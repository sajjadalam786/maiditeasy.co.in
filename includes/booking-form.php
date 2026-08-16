<?php
// Ensure root prefix exists
$root_prefix = isset($root_prefix) ? $root_prefix : '';
$form_uniq = uniqid('bf_');

// Determine current service to auto-select
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
<div class="maid-booking-form-wrapper" style="background-color: #fff; padding: 25px 22px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee; width: 100%; box-sizing: border-box;">
    <!-- Form Type Toggle Buttons -->
    <div class="form-type-toggle mb-3" style="display: flex; gap: 6px; background: #f0f2f5; padding: 5px; border-radius: 8px; border: 1px solid #e0e0e0;">
        <button type="button" class="form-toggle-btn active" onclick="void(0);" style="flex: 1; padding: 8px 6px; border-radius: 6px; border: none; font-size: 12px; font-weight: 700; cursor: pointer; transition: 0.3s; background: #0e0035; color: #fff; text-align: center; line-height: 1.2;">
            Book Services Only (No Jobs)
        </button>
        <a href="<?php echo $root_prefix; ?>pages/career.php" class="form-toggle-btn" style="flex: 1; padding: 8px 6px; border-radius: 6px; border: none; font-size: 12px; font-weight: 700; cursor: pointer; transition: 0.3s; background: transparent; color: #555; text-align: center; text-decoration: none; display: flex; align-items: center; justify-content: center; line-height: 1.2;">
            Looking for Job
        </a>
    </div>

    <form action="<?php echo $root_prefix; ?>submit-booking.php" method="POST" class="maid-unified-booking-form">
        <div style="background-color: #fff9e6; color: #856404; padding: 10px 12px; border-radius: 6px; margin-bottom: 18px; font-weight: bold; border: 1px solid #ffeeba; font-size: 13px; text-align: center; line-height: 1.4;">
            Instant Maids Requirement Not Available - Only Long Terms
        </div>
        
        <!-- Full Name -->
        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block; color: #222;">Full Name *</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your full name" required style="height: 42px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background: #fff;">
        </div>
        
        <!-- Phone Number -->
        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block; color: #222;">Phone Number *</label>
            <input type="tel" name="phone" class="form-control" placeholder="Enter phone number" required style="height: 42px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background: #fff;">
        </div>
        
        <!-- City & Area -->
        <div class="row g-2 mb-3">
            <div class="col-6 form-group">
                <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block; color: #222;">City *</label>
                <input type="text" name="city" class="form-control" placeholder="Enter your city" required style="height: 42px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background: #fff;">
            </div>
            <div class="col-6 form-group">
                <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block; color: #222;">Area *</label>
                <input type="text" name="area" class="form-control" placeholder="Enter Area" required style="height: 42px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background: #fff;">
            </div>
        </div>
        
        <!-- Choose Interested Service -->
        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block; color: #222;">Choose Interested Service *</label>
            <select name="service" class="form-control" required style="height: 42px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background-color: #fff;">
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

        <!-- Preferred Salary Range (New Field) -->
        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block; color: #222;">What is your preferred salary range? *</label>
            <select name="salary_range" class="form-control" required style="height: 42px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background-color: #fff;">
                <option value="" disabled selected>Select</option>
                <option value="Rs. 9000 - 11000 (2 hours)">Rs. 9000 - 11000 (2 hours)</option>
                <option value="Rs. 12000 - 14000 (3-4 hours)">Rs. 12000 - 14000 (3-4 hours)</option>
                <option value="Rs. 14000 - 16000 (5-6 hours)">Rs. 14000 - 16000 (5-6 hours)</option>
                <option value="Rs. 18000 - 20000 (8-9 hours)">Rs. 18000 - 20000 (8-9 hours)</option>
                <option value="Rs. 22000 - 24000 (10-11 hours)">Rs. 22000 - 24000 (10-11 hours)</option>
                <option value="Rs. 25000 - 28000 (Live-in)(Food to be provided by the client)">Rs. 25000 - 28000 (Live-in)(Food to be provided by the client)</option>
            </select>
        </div>
        
        <!-- Comment or Remark -->
        <div class="form-group mb-3">
            <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block; color: #222;">Comment or Remark</label>
            <textarea name="message" class="form-control" rows="3" placeholder="Need a maid for babysitting, cooking, cleaning, or elderly care?" style="border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background: #fff;"></textarea>
        </div>
        
        <!-- Agreements -->
        <div class="form-group mb-2" style="display: flex; align-items: flex-start; gap: 8px;">
            <input type="checkbox" name="premium_agreement" id="premiumAgreement_<?php echo $form_uniq; ?>" required style="margin-top: 3px;">
            <label for="premiumAgreement_<?php echo $form_uniq; ?>" style="font-size: 11px; color: #555; line-height: 1.35; margin-bottom: 0; cursor: pointer;">
                I understand that I have to pay a premium to Maid It Easy for providing domestic aid services with replacement support. *
            </label>
        </div>
        
        <div class="form-group mb-3" style="display: flex; align-items: flex-start; gap: 8px;">
            <input type="checkbox" name="terms_agreement" id="termsAgreement_<?php echo $form_uniq; ?>" required style="margin-top: 3px;">
            <label for="termsAgreement_<?php echo $form_uniq; ?>" style="font-size: 11px; color: #555; line-height: 1.35; margin-bottom: 0; cursor: pointer;">
                Accepting <a href="<?php echo $root_prefix; ?>pages/terms-and-conditions.php" target="_blank" style="color: #ff890c; text-decoration: underline;">Terms & Conditions</a> *
            </label>
        </div>
        
        <!-- Google reCAPTCHA v3 Token Field -->
        <input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">

        <!-- Google Ads & Campaign Tracking Hidden Fields -->
        <input type="hidden" name="utm_campaign" class="utm_campaign">
        <input type="hidden" name="utm_account" class="utm_account">
        <input type="hidden" name="utm_source" class="utm_source">
        <input type="hidden" name="utm_medium" class="utm_medium">
        <input type="hidden" name="gclid" class="gclid">
        <input type="hidden" name="referrer" class="referrer_field">

        <!-- Submit Button -->
        <button type="submit" class="btn" style="width: 100%; height: 46px; background-image: linear-gradient(to right, #ffd10c 0%, #ff890c 51%, #ffd10c 100%); background-size: 200% auto; border: none; border-radius: 6px; color: #0e0035; font-weight: 800; font-size: 15px; transition: 0.5s; cursor: pointer; text-transform: uppercase;">
            SUBMIT BOOKING
        </button>

        <?php if (!empty($SITE_PHONE_RAW)): ?>
        <div style="text-align: center; margin: 6px 0; font-size: 11px; font-weight: bold; color: #888;">OR</div>
        <a href="tel:<?php echo $SITE_PHONE_RAW; ?>" style="display: flex; align-items: center; justify-content: center; gap: 6px; width: 100%; background: #007bff; color: #fff; border-radius: 6px; font-size: 13px; font-weight: bold; text-decoration: none; height: 40px; transition: 0.3s;">
            <i class="fas fa-phone-alt"></i> Call Us for Better Understanding 24/7
        </a>
        <?php endif; ?>
    </form>
</div>
