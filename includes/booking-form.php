<?php
// Determine the current service to auto-select it in the dropdown
$current_service = '';
$script_name = basename($_SERVER['PHP_SELF']);
if ($script_name == 'maid-service.php') {
    $current_service = 'Maid Service';
} elseif ($script_name == 'cook-service.php') {
    $current_service = 'Cook Service';
} elseif ($script_name == 'babysitter-nanny-service.php') {
    $current_service = 'Babysitter & Nanny Service';
} elseif ($script_name == 'elderly-care-service.php') {
    $current_service = 'Elderly Care Service';
} elseif ($script_name == 'driver-service.php') {
    $current_service = 'Driver Service';
} elseif ($script_name == 'watchman-security-guard-service.php') {
    $current_service = 'Watchman & Security Guard Service';
} elseif (strpos($script_name, 'all-in-one') !== false) {
    $current_service = 'All-in-One Service';
}
?>
<div style="background-color: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee; width: 100%;">
    <!-- Form Type Toggle Buttons -->
    <div class="form-type-toggle mb-3" style="display: flex; gap: 6px; background: #f0f2f5; padding: 5px; border-radius: 8px; border: 1px solid #e0e0e0;">
        <button type="button" class="form-toggle-btn active" onclick="void(0);" style="flex: 1; padding: 9px 8px; border-radius: 6px; border: none; font-size: 12px; font-weight: 700; cursor: pointer; transition: 0.3s; background: #0e0035; color: #fff; text-align: center; line-height: 1.2;">
            Book Services Only (No Jobs)
        </button>
        <a href="<?php echo $root_prefix; ?>pages/career.php" class="form-toggle-btn" style="flex: 1; padding: 9px 8px; border-radius: 6px; border: none; font-size: 12px; font-weight: 700; cursor: pointer; transition: 0.3s; background: transparent; color: #555; text-align: center; text-decoration: none; display: flex; align-items: center; justify-content: center; line-height: 1.2;">
            Looking for Job
        </a>
    </div>

    <form action="<?php echo $root_prefix; ?>submit-booking.php" method="POST">
        <div style="background-color: #fff9e6; color: #856404; padding: 12px 15px; border-radius: 6px; margin-bottom: 20px; font-weight: bold; border: 1px solid #ffeeba; font-size: 14px; text-align: center; line-height: 1.4;">
            Instant Maids Requirement Not Available - Only Long Terms
        </div>
        
        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px; display: block;">Full Name *</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your full name" required style="height: 45px; border-radius: 6px; font-size: 14px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
        </div>
        
        <div class="row">
            <div class="col-md-6 form-group mb-3">
                <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px; display: block;">Phone Number *</label>
                <input type="tel" name="phone" class="form-control" placeholder="Enter phone number" required style="height: 45px; border-radius: 6px; font-size: 14px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
            </div>
            <div class="col-md-6 form-group mb-3">
                <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px; display: block;">Alternate Number *</label>
                <input type="tel" name="alternate_phone" class="form-control" placeholder="Enter alternate number" required style="height: 45px; border-radius: 6px; font-size: 14px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
            </div>
        </div>
        
        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px; display: block;">Email Address *</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required style="height: 45px; border-radius: 6px; font-size: 14px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
        </div>
        
        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px; display: block;">City *</label>
            <input type="text" name="city" class="form-control" placeholder="Enter your city" required style="height: 45px; border-radius: 6px; font-size: 14px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
        </div>
        
        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px; display: block;">Choose Interested Service *</label>
            <select name="service" class="form-control" required style="height: 45px; border-radius: 6px; font-size: 14px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background-color: #fff;">
                <option value="">-- Select Service --</option>
                <option value="Maid Service" <?php echo ($current_service == 'Maid Service') ? 'selected' : ''; ?>>Maid Service</option>
                <option value="Cook Service" <?php echo ($current_service == 'Cook Service') ? 'selected' : ''; ?>>Cook Service</option>
                <option value="Babysitter & Nanny Service" <?php echo ($current_service == 'Babysitter & Nanny Service') ? 'selected' : ''; ?>>Babysitter & Nanny Service</option>
                <option value="Elderly Care Service" <?php echo ($current_service == 'Elderly Care Service') ? 'selected' : ''; ?>>Elderly Care Service</option>
                <option value="Driver Service" <?php echo ($current_service == 'Driver Service') ? 'selected' : ''; ?>>Driver Service</option>
                <option value="Watchman & Security Guard Service" <?php echo ($current_service == 'Watchman & Security Guard Service') ? 'selected' : ''; ?>>Watchman & Security Guard Service</option>
                <option value="All-in-One Service" <?php echo ($current_service == 'All-in-One Service') ? 'selected' : ''; ?>>All-in-One Domestic Help Service</option>
            </select>
        </div>
        
        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px; display: block;">Urgency of your requirement *</label>
            <select name="urgency" class="form-control" required style="height: 45px; border-radius: 6px; font-size: 14px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background-color: #fff;">
                <option value="Urgent">Urgent</option>
                <option value="Not Urgent">Not Urgent</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px; display: block;">How did you hear about us?</label>
            <input type="text" name="referrer" class="form-control" placeholder="Google, Friends, Social Media, etc." style="height: 45px; border-radius: 6px; font-size: 14px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
        </div>
        
        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px; display: block;">Comment or Remark</label>
            <textarea name="message" class="form-control" rows="3" placeholder="What do you Actually Need ? bartan, jhhado & pocha ?" style="border-radius: 6px; font-size: 14px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;"></textarea>
        </div>
        
        <div class="form-group mb-3" style="display: flex; align-items: flex-start; gap: 8px;">
            <input type="checkbox" name="premium_agreement" id="premiumAgreementCheckEmbed" required style="margin-top: 4px;">
            <label for="premiumAgreementCheckEmbed" style="font-size: 12px; color: #555; line-height: 1.4; margin-bottom: 0; cursor: pointer;">
                I understand that I have to pay a premium to Maid It Easy for providing domestic aid services with replacement support. *
            </label>
        </div>
        
        <div class="form-group mb-4" style="display: flex; align-items: flex-start; gap: 8px;">
            <input type="checkbox" name="terms_agreement" id="termsAgreementCheckEmbed" required style="margin-top: 4px;">
            <label for="termsAgreementCheckEmbed" style="font-size: 12px; color: #555; line-height: 1.4; margin-bottom: 0; cursor: pointer;">
                Accepting <a href="<?php echo $root_prefix; ?>pages/terms-and-conditions.php" target="_blank" style="color: #ff890c; text-decoration: underline;">Terms & Conditions</a> *
            </label>
        </div>
        
        <!-- Google reCAPTCHA v2 -->
        <div class="form-group mb-3 d-flex justify-content-center">
            <?php 
            $host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? '';
            $is_local_host = (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false || get_env_var('ENVIRONMENT') === 'development');
            if ($is_local_host): 
            ?>
                <div style="font-size: 11px; color: #856404; background: #fff3cd; border: 1px solid #ffeeba; padding: 6px 12px; border-radius: 4px; text-align: center; width: 100%;">
                    <i class="fas fa-info-circle"></i> Local Testing Mode: reCAPTCHA bypassed for localhost.
                </div>
            <?php else: ?>
                <div class="g-recaptcha" data-sitekey="<?php echo get_env_var('RECAPTCHA_SITE_KEY', '6LdID3AtAAAAACVcD-KNE6eogW6YUpWDLakphEDZ'); ?>"></div>
            <?php endif; ?>
        </div>

        <!-- Google Ads & Campaign Tracking Hidden Fields -->
        <input type="hidden" name="utm_campaign" class="utm_campaign">
        <input type="hidden" name="utm_account" class="utm_account">
        <input type="hidden" name="utm_source" class="utm_source">
        <input type="hidden" name="gclid" class="gclid">
        <input type="hidden" name="referrer" class="referrer_field">

        <button type="submit" class="btn" style="width: 100%; height: 50px; background-image: linear-gradient(to right, #ffd10c 0%, #ff890c 51%, #ffd10c 100%); background-size: 200% auto; border: none; border-radius: 6px; color: #0e0035; font-weight: bold; font-size: 16px; transition: 0.5s;">SUBMIT BOOKING</button>
    </form>
</div>
