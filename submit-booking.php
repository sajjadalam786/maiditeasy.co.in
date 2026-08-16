<?php
/*
  GOOGLE SHEETS INTEGRATION GUIDE:
  1. Open your Google Sheet: https://docs.google.com/spreadsheets/d/1c1LYiTW0yvioMTV1nt2I_xE_GfN1a2PNAtwsqRt0PKE/edit
  2. Click Extensions > Apps Script.
  3. Replace any code with this bulletproof script:

     function doPost(e) {
       var sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
       var p = (e && e.parameter) ? e.parameter : {};
       
       if (e && e.postData && e.postData.contents) {
         try {
           var json = JSON.parse(e.postData.contents);
           if (json.data) p = json.data;
           else if (json.name) p = json;
         } catch(err) {}
       }
       
       var rowData = [];
       rowData.push(new Date()); // Timestamp
       rowData.push(p.name || "");
       rowData.push(p.phone || "");
       rowData.push(p.email || "");
       rowData.push(p.city || "");
       rowData.push(p.area || p.location || "");  // Area Field
       rowData.push(p.service || "");
       rowData.push(p.salary_range || p.salary || ""); // Preferred Salary Range Field
       rowData.push(p.urgency || "");
       rowData.push(p.referrer || "");
       rowData.push(p.message || "");
       rowData.push(p.utm_campaign || "");
       rowData.push(p.utm_account || "");
       rowData.push(p.utm_source || "");
       rowData.push(p.gclid || "");
       
       sheet.appendRow(rowData);
       return ContentService.createTextOutput("Success").setMimeType(ContentService.MimeType.TEXT);
     }

  4. IMPORTANT: In Google Sheet, insert columns named "Area" and "Salary Range".
  5. Click Deploy > Manage Deployments > Edit (pencil icon).
  6. Under Version, select "NEW VERSION" (CRITICAL: Google Sheet will NOT use new code until you select New Version!).
  7. Click Deploy!
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
    $name = strip_tags(trim($_POST["name"] ?? ''));
    $phone = strip_tags(trim($_POST["phone"] ?? ''));
    $alternate_phone = isset($_POST["alternate_phone"]) ? strip_tags(trim($_POST["alternate_phone"])) : '';
    $email = isset($_POST["email"]) ? filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL) : '';
    $city = isset($_POST["city"]) ? strip_tags(trim($_POST["city"])) : '';
    $area = isset($_POST["area"]) ? strip_tags(trim($_POST["area"])) : '';
    $service = strip_tags(trim($_POST["service"] ?? ''));
    $salary_range = isset($_POST["salary_range"]) ? strip_tags(trim($_POST["salary_range"])) : (isset($_POST["salary"]) ? strip_tags(trim($_POST["salary"])) : '');
    $urgency = isset($_POST["urgency"]) ? strip_tags(trim($_POST["urgency"])) : '';
    $referrer = isset($_POST["referrer"]) ? strip_tags(trim($_POST["referrer"])) : '';
    $message = isset($_POST["message"]) ? strip_tags(trim($_POST["message"])) : '';
    
    // Campaign & Ads Tracking Parameters
    $utm_campaign = isset($_POST["utm_campaign"]) ? strip_tags(trim($_POST["utm_campaign"])) : '';
    $utm_account = isset($_POST["utm_account"]) ? strip_tags(trim($_POST["utm_account"])) : '';
    $utm_source = isset($_POST["utm_source"]) ? strip_tags(trim($_POST["utm_source"])) : '';
    $utm_medium = isset($_POST["utm_medium"]) ? strip_tags(trim($_POST["utm_medium"])) : '';
    $gclid = isset($_POST["gclid"]) ? strip_tags(trim($_POST["gclid"])) : '';
    
    if (empty($name) || empty($phone) || empty($service)) {
        header("Location: index.php");
        exit;
    }
    
    // Google reCAPTCHA v2/v3 Verification (Enforced on live production domain)
    $host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? '';
    $is_local_dev = (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false);

    if (!$is_local_dev) {
        $recaptcha_response = isset($_POST['g-recaptcha-response']) ? trim($_POST['g-recaptcha-response']) : '';
        $secret_key = get_env_var('RECAPTCHA_SECRET_KEY', '6LdID3AtAAAAABEpa-FFr_9iZKRhad5J2QEJ_T-F');
        
        if (!empty($recaptcha_response)) {
            $verify_url = "https://www.google.com/recaptcha/api/siteverify";
            $verify_data = [
                'secret' => $secret_key,
                'response' => $recaptcha_response,
                'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
            ];
            
            $ch = curl_init($verify_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($verify_data));
            $verify_response = curl_exec($ch);
            curl_close($ch);
            
            $verify_json = json_decode($verify_response, true);
            if (!isset($verify_json['success']) || $verify_json['success'] !== true) {
                echo "<script>alert('reCAPTCHA verification failed. Please try again.'); window.history.back();</script>";
                exit;
            }
        }
    }
    
    // 1. Send Email Notification
    $recipient = get_env_var('RECIPIENT_EMAIL');
    $subject = "New Maid It Easy Booking Request from $name";
    
    $email_content = "Name: $name\n";
    $email_content .= "Phone: $phone\n";
    if (!empty($alternate_phone)) $email_content .= "Alternate Phone: $alternate_phone\n";
    if (!empty($email)) $email_content .= "Email: $email\n";
    $email_content .= "City: $city\n";
    $email_content .= "Area: $area\n";
    $email_content .= "Service: $service\n";
    if (!empty($salary_range)) $email_content .= "Preferred Salary Range: $salary_range\n";
    if (!empty($urgency)) $email_content .= "Urgency: $urgency\n";
    if (!empty($referrer)) $email_content .= "How did they hear: $referrer\n";
    if (!empty($utm_campaign)) $email_content .= "Campaign Name: $utm_campaign\n";
    if (!empty($utm_account)) $email_content .= "Campaign Account: $utm_account\n";
    if (!empty($utm_source)) $email_content .= "UTM Source: $utm_source\n";
    if (!empty($gclid)) $email_content .= "GCLID: $gclid\n\n";
    $email_content .= "Message/Remarks:\n$message\n";
    
    $email_headers = "From: Maid It Easy Booking <no-reply@maiditeasy.in>";
    if (!empty($recipient)) {
        mail($recipient, $subject, $email_content, $email_headers);
    }
    
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
                'area' => $area,
                'service' => $service,
                'salary_range' => $salary_range,
                'urgency' => $urgency,
                'referrer' => $referrer,
                'message' => $message,
                'utm_campaign' => $utm_campaign,
                'utm_account' => $utm_account,
                'utm_source' => $utm_source,
                'utm_medium' => $utm_medium,
                'gclid' => $gclid
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
        // Construct composite message for backwards compatibility with any existing sheet columns
        $details = [];
        if (!empty($area)) $details[] = "Area: $area";
        if (!empty($salary_range)) $details[] = "Salary: $salary_range";
        if (!empty($message)) $details[] = $message;
        $composite_message = implode(" | ", $details);

        $post_fields = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'city' => $city,
            'area' => $area,
            'location' => $area,
            'service' => $service,
            'salary_range' => $salary_range,
            'salary' => $salary_range,
            'urgency' => $urgency,
            'referrer' => $referrer,
            'message' => $composite_message,
            'utm_campaign' => $utm_campaign,
            'utm_account' => $utm_account,
            'utm_source' => $utm_source,
            'utm_medium' => $utm_medium,
            'gclid' => $gclid
        ];
        
        foreach ($sheet_urls as $s_url) {
            if (filter_var($s_url, FILTER_VALIDATE_URL)) {
                $ch = curl_init($s_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Required for Google script redirect
                curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
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
