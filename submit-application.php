<?php
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
    $alternate_phone = strip_tags(trim($_POST["alternate_phone"]));
    $city = isset($_POST["city"]) ? strip_tags(trim($_POST["city"])) : '';
    $age = strip_tags(trim($_POST["age"]));
    $gender = strip_tags(trim($_POST["gender"]));
    $role = strip_tags(trim($_POST["role"]));
    $experience = strip_tags(trim($_POST["experience"]));
    $salary = strip_tags(trim($_POST["salary"]));
    $work_type = strip_tags(trim($_POST["work_type"]));
    $location = isset($_POST["location"]) ? strip_tags(trim($_POST["location"])) : '';
    $area = isset($_POST["area"]) ? strip_tags(trim($_POST["area"])) : $location;
    $message = strip_tags(trim($_POST["message"]));
    
    if (empty($name) || empty($phone) || empty($role)) {
        header("Location: pages/career.php");
        exit;
    }
    
    // Google reCAPTCHA v2 Verification (Enforced on live production domain)
    $host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? '';
    $is_local_dev = (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false);

    if (!$is_local_dev) {
        $recaptcha_response = isset($_POST['g-recaptcha-response']) ? trim($_POST['g-recaptcha-response']) : '';
        $secret_key = get_env_var('RECAPTCHA_SECRET_KEY', '6LdID3AtAAAAABEpa-FFr_9iZKRhad5J2QEJ_T-F');
        
        if (empty($recaptcha_response)) {
            echo "<script>alert('Please complete the reCAPTCHA verification checkbox before submitting.'); window.history.back();</script>";
            exit;
        }
        
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
    
    // Send immediate 302 Redirect to browser so Thank You page loads instantly (< 50ms)
    if (function_exists('fastcgi_finish_request')) {
        header("Location: pages/book-now-thank-you.php");
        fastcgi_finish_request();
    } else {
        ignore_user_abort(true);
        set_time_limit(60);
        if (ob_get_level() == 0) ob_start();
        header("Location: pages/book-now-thank-you.php");
        header("Connection: close");
        header("Content-Length: " . ob_get_length());
        @ob_end_flush();
        @ob_flush();
        @flush();
    }

    // 1. Send Email Notification
    $recipient = get_env_var('RECIPIENT_EMAIL');
    $subject = "New Job Application: $role - $name";
    
    $email_content = "Name: $name\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Alternate Phone: $alternate_phone\n";
    $email_content .= "City: $city\n";
    $email_content .= "Age: $age\n";
    $email_content .= "Gender: $gender\n";
    $email_content .= "Role Applied For: $role\n";
    $email_content .= "Experience: $experience\n";
    $email_content .= "Expected Salary: $salary\n";
    $email_content .= "Work Type Preference: $work_type\n";
    $email_content .= "Area: $area\n\n";
    $email_content .= "Work History/Remarks:\n$message\n";
    
    $email_headers = "From: Maid It Easy Careers <no-reply@maiditeasy.in>";
    if (!empty($recipient)) {
        @mail($recipient, $subject, $email_content, $email_headers);
    }
    
    // 2. Trigger Webhook API
    $webhook_url = get_env_var('APPLICATION_WEBHOOK_URL');
    if (!empty($webhook_url) && filter_var($webhook_url, FILTER_VALIDATE_URL)) {
        $payload = json_encode([
            'event' => 'new_application',
            'timestamp' => date('c'),
            'data' => [
                'name' => $name,
                'phone' => $phone,
                'alternate_phone' => $alternate_phone,
                'city' => $city,
                'area' => $area,
                'age' => $age,
                'gender' => $gender,
                'role' => $role,
                'experience' => $experience,
                'salary' => $salary,
                'work_type' => $work_type,
                'location' => $area,
                'message' => $message
            ]
        ]);
        
        $ch = curl_init($webhook_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_TIMEOUT, 4);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
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
            'email' => '',
            'city' => $city,
            'area' => $area,
            'service' => 'Job Application: ' . $role,
            'urgency' => $work_type,
            'referrer' => 'Career Page',
            'message' => "Age: $age, Gender: $gender, Exp: $experience, Salary: $salary, Area: $area. $message",
            'utm_campaign' => isset($_POST["utm_campaign"]) ? strip_tags(trim($_POST["utm_campaign"])) : '',
            'utm_account' => isset($_POST["utm_account"]) ? strip_tags(trim($_POST["utm_account"])) : '',
            'utm_source' => isset($_POST["utm_source"]) ? strip_tags(trim($_POST["utm_source"])) : '',
            'utm_medium' => isset($_POST["utm_medium"]) ? strip_tags(trim($_POST["utm_medium"])) : '',
            'gclid' => isset($_POST["gclid"]) ? strip_tags(trim($_POST["gclid"])) : ''
        ];
        
        foreach ($sheet_urls as $s_url) {
            if (filter_var($s_url, FILTER_VALIDATE_URL)) {
                $ch = curl_init($s_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_fields));
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
                curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
                curl_exec($ch);
                curl_close($ch);
            }
        }
    }
    
    if (!headers_sent()) {
        header("Location: pages/book-now-thank-you.php");
    }
    exit;
} else {
    header("Location: pages/career.php");
    exit;
}
?>
