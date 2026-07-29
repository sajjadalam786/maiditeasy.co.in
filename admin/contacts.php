<?php
session_start();

$root_prefix = '../';
require_once __DIR__ . '/../includes/contacts_config.php';

// Admin authentication passcode
define('ADMIN_PASSCODE', 'maiditeasy2026');

$error_msg = '';
$success_msg = '';

// Handle Logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['admin_contacts_auth']);
    header("Location: contacts.php");
    exit;
}

// Handle Login POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $passcode = trim($_POST['passcode'] ?? '');
    if ($passcode === ADMIN_PASSCODE) {
        $_SESSION['admin_contacts_auth'] = true;
    } else {
        $error_msg = 'Invalid Admin Passcode! Please try again.';
    }
}

// Handle Save Contacts POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_contacts'])) {
    if (!empty($_SESSION['admin_contacts_auth'])) {
        $update_data = [
            'phone_raw' => $_POST['phone_raw'] ?? '',
            'phone_display' => $_POST['phone_display'] ?? '',
            'whatsapp_raw' => $_POST['whatsapp_raw'] ?? '',
            'whatsapp_display' => $_POST['whatsapp_display'] ?? '',
            'email' => $_POST['email'] ?? ''
        ];
        if (save_contacts_config($update_data)) {
            $success_msg = 'Contact details successfully updated across the website!';
            // Reload updated variables
            $SITE_CONTACTS = load_contacts_config();
            $SITE_PHONE_RAW        = htmlspecialchars($SITE_CONTACTS['phone_raw']);
            $SITE_PHONE_DISPLAY    = htmlspecialchars($SITE_CONTACTS['phone_display']);
            $SITE_WHATSAPP_RAW     = htmlspecialchars($SITE_CONTACTS['whatsapp_raw']);
            $SITE_WHATSAPP_DISPLAY = htmlspecialchars($SITE_CONTACTS['whatsapp_display']);
            $SITE_EMAIL            = htmlspecialchars($SITE_CONTACTS['email']);
        } else {
            $error_msg = 'Failed to update contact configuration file.';
        }
    }
}

$is_authenticated = !empty($_SESSION['admin_contacts_auth']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Contact Settings - Maid It Easy</title>
    <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background: #f4f6f9;
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .admin-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(14, 0, 53, 0.08);
            border: 1px solid #e2e8f0;
            width: 100%;
            max-width: 580px;
            overflow: hidden;
        }
        .admin-header {
            background: linear-gradient(135deg, #0e0035 0%, #1e1b4b 100%);
            padding: 30px 25px;
            color: #ffffff;
            text-align: center;
        }
        .admin-header h2 {
            font-weight: 700;
            font-size: 24px;
            margin-bottom: 6px;
        }
        .admin-header p {
            font-size: 14px;
            color: #cbd5e1;
            margin: 0;
        }
        .admin-body {
            padding: 30px 25px;
        }
        .form-label {
            font-weight: 600;
            font-size: 14px;
            color: #334155;
            margin-bottom: 6px;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            font-size: 15px;
            transition: all 0.2s ease;
        }
        .form-control:focus {
            border-color: #0e0035;
            box-shadow: 0 0 0 3px rgba(14, 0, 53, 0.15);
        }
        .btn-submit {
            background: #0e0035;
            color: #ffffff;
            font-weight: 700;
            padding: 12px 20px;
            border-radius: 8px;
            border: none;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.2s ease;
        }
        .btn-submit:hover {
            background: #1e1b4b;
        }
        .btn-logout {
            background: #ef4444;
            color: #ffffff;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .btn-logout:hover {
            background: #dc2626;
            color: #ffffff;
        }
        .alert {
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
        }
        .form-hint {
            font-size: 12px;
            color: #64748b;
            margin-top: 4px;
        }
    </style>
</head>
<body>

<div class="admin-card">
    <div class="admin-header">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <span class="badge bg-warning text-dark px-3 py-2" style="font-size: 11px; letter-spacing: 0.5px;">ADMIN PANEL</span>
            <?php if ($is_authenticated): ?>
                <a href="contacts.php?action=logout" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            <?php endif; ?>
        </div>
        <h2>Website Contact Settings</h2>
        <p>Dynamically update WhatsApp, Phone Call numbers & Email across the site</p>
    </div>

    <div class="admin-body">
        <?php if (!empty($error_msg)): ?>
            <div class="alert alert-danger mb-4"><i class="fas fa-exclamation-circle me-2"></i><?php echo $error_msg; ?></div>
        <?php endif; ?>

        <?php if (!empty($success_msg)): ?>
            <div class="alert alert-success mb-4"><i class="fas fa-check-circle me-2"></i><?php echo $success_msg; ?></div>
        <?php endif; ?>

        <?php if (!$is_authenticated): ?>
            <!-- LOGIN FORM -->
            <form method="POST" action="contacts.php">
                <div class="mb-4">
                    <label for="passcode" class="form-label">Enter Admin Passcode</label>
                    <input type="password" class="form-control" id="passcode" name="passcode" placeholder="Enter security passcode" required autofocus>
                </div>
                <button type="submit" name="login_submit" class="btn-submit">
                    <i class="fas fa-lock me-2"></i> Unlock Settings
                </button>
            </form>
        <?php else: ?>
            <!-- UPDATE CONTACTS FORM -->
            <form method="POST" action="contacts.php">
                <div class="mb-3">
                    <label for="whatsapp_raw" class="form-label">WhatsApp Number (Raw / Direct Link)</label>
                    <input type="text" class="form-control" id="whatsapp_raw" name="whatsapp_raw" value="<?php echo $SITE_WHATSAPP_RAW; ?>" placeholder="e.g. 919866769832" required>
                    <div class="form-hint">Used for <code>wa.me/NUMBER</code> or <code>phone=NUMBER</code> links (include country code without +).</div>
                </div>

                <div class="mb-3">
                    <label for="whatsapp_display" class="form-label">WhatsApp Number (Display Text)</label>
                    <input type="text" class="form-control" id="whatsapp_display" name="whatsapp_display" value="<?php echo $SITE_WHATSAPP_DISPLAY; ?>" placeholder="e.g. +91 98667 69832" required>
                </div>

                <hr class="my-4" style="border-color: #e2e8f0;">

                <div class="mb-3">
                    <label for="phone_raw" class="form-label">Call Phone Number (Raw / Tel Link)</label>
                    <input type="text" class="form-control" id="phone_raw" name="phone_raw" value="<?php echo $SITE_PHONE_RAW; ?>" placeholder="e.g. 9866769832" required>
                    <div class="form-hint">Used for <code>tel:NUMBER</code> click-to-call links.</div>
                </div>

                <div class="mb-3">
                    <label for="phone_display" class="form-label">Call Phone Number (Display Text)</label>
                    <input type="text" class="form-control" id="phone_display" name="phone_display" value="<?php echo $SITE_PHONE_DISPLAY; ?>" placeholder="e.g. +91 98667 69832" required>
                </div>

                <hr class="my-4" style="border-color: #e2e8f0;">

                <div class="mb-4">
                    <label for="email" class="form-label">Contact Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $SITE_EMAIL; ?>" placeholder="e.g. maiditeasy21@gmail.com" required>
                    <div class="form-hint">Used for <code>mailto:EMAIL</code> links and footer/header contact info.</div>
                </div>

                <button type="submit" name="save_contacts" class="btn-submit">
                    <i class="fas fa-save me-2"></i> Save & Apply Changes Everywhere
                </button>
            </form>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
