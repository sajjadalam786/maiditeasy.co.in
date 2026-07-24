<?php
/*
  GOOGLE SHEETS INTEGRATION GUIDE:
  1. Open your Google Sheet: https://docs.google.com/spreadsheets/d/1c1LYiTW0yvioMTV1nt2I_xE_GfN1a2PNAtwsqRt0PKE/edit
  2. Click Extensions > Apps Script.
  3. Delete any default code and paste this script:

     function doPost(e) {
       var sheet = SpreadsheetApp.openById("1c1LYiTW0yvioMTV1nt2I_xE_GfN1a2PNAtwsqRt0PKE").getActiveSheet();
       var rowData = [];
       rowData.push(new Date()); // Timestamp
       rowData.push(e.parameter.name);
       rowData.push(e.parameter.phone);
       rowData.push(e.parameter.email);
       rowData.push(e.parameter.city);
       rowData.push(e.parameter.service);
       rowData.push(e.parameter.urgency);
       rowData.push(e.parameter.referrer);
       rowData.push(e.parameter.message);
       sheet.appendRow(rowData);
       return ContentService.createTextOutput("Success").setMimeType(ContentService.MimeType.TEXT);
     }

  4. Click Deploy > New Deployment.
  5. Select type "Web App". Set "Execute as" to "Me", and "Who has access" to "Anyone".
  6. Deploy, copy the Web App URL, and paste it into GOOGLE_SHEET_WEBHOOK_URL in .env!
  
  * HOW TO BYPASS GOOGLE AUTH WARNING:
    - Click the "Advanced" link in the bottom left of the Google popup.
    - Click "Go to Untitled project (unsafe)" (or your script name) at the bottom.
    - Click "Allow" on the next screen to authorize!
*/

function get_env_var($key, $default = '') {
    $env_file = __DIR__ . '/config.env';
    if (file_exists($env_file)) {
        $lines = file($env_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) continue;
            if (strpos($line, '=') !== false) {
                list($name, $value) = explode('=', $line, 2);
                if (trim($name) == $key) {
                    return trim($value);
                }
            }
        }
    }
    return $default;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $phone = strip_tags(trim($_POST["phone"]));
    $alternate_phone = isset($_POST["alternate_phone"]) ? strip_tags(trim($_POST["alternate_phone"])) : '';
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $city = isset($_POST["city"]) ? strip_tags(trim($_POST["city"])) : '';
    $service = strip_tags(trim($_POST["service"]));
    $urgency = isset($_POST["urgency"]) ? strip_tags(trim($_POST["urgency"])) : '';
    $referrer = isset($_POST["referrer"]) ? strip_tags(trim($_POST["referrer"])) : '';
    $message = isset($_POST["message"]) ? strip_tags(trim($_POST["message"])) : '';
    
    if (empty($name) || empty($phone) || empty($email) || empty($service)) {
        header("Location: index.php");
        exit;
    }
    
    // 1. Send Email Notification
    $recipient = get_env_var('RECIPIENT_EMAIL');
    $subject = "New Maid It Easy Booking Request from $name";
    
    $email_content = "Name: $name\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Alternate Phone: $alternate_phone\n";
    $email_content .= "Email: $email\n";
    $email_content .= "City: $city\n";
    $email_content .= "Service: $service\n";
    $email_content .= "Urgency: $urgency\n";
    $email_content .= "How did they hear: $referrer\n\n";
    $email_content .= "Message/Remarks:\n$message\n";
    
    $email_headers = "From: Maid It Easy Booking <no-reply@maiditeasy.in>";
    mail($recipient, $subject, $email_content, $email_headers);
    
    // 2. Trigger Webhook API
    $webhook_url = get_env_var('BOOKING_WEBHOOK_URL');
    if (!empty($webhook_url) && filter_var($webhook_url, FILTER_VALIDATE_URL)) {
        $payload = json_encode([
            'event' => 'new_booking',
            'timestamp' => date('c'),
            'data' => [
                'name' => $name,
                'phone' => $phone,
                'alternate_phone' => $alternate_phone,
                'email' => $email,
                'city' => $city,
                'service' => $service,
                'urgency' => $urgency,
                'referrer' => $referrer,
                'message' => $message
            ]
        ]);
        
        $ch = curl_init($webhook_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload)
        ]);
        curl_exec($ch);
        curl_close($ch);
    }

    // 3. Forward to Google Sheets Web Apps (Supports primary and secondary sheet)
    $sheet_urls = array_filter([
        get_env_var('GOOGLE_SHEET_WEBHOOK_URL'),
        get_env_var('GOOGLE_SHEET_WEBHOOK_URL_2')
    ]);

    if (!empty($sheet_urls)) {
        $post_fields = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'city' => $city,
            'service' => $service,
            'urgency' => $urgency,
            'referrer' => $referrer,
            'message' => $message
        ];
        
        foreach ($sheet_urls as $s_url) {
            if (filter_var($s_url, FILTER_VALIDATE_URL)) {
                $ch = curl_init($s_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Required for Google script redirect
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_fields));
                curl_exec($ch);
                curl_close($ch);
            }
        }
    }
    
    header("Location: pages/book-now-thank-you.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>
