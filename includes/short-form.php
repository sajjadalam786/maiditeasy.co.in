<?php
// Unique identifier for element matching
$form_uniq = uniqid('sf_');
?>
<style>
.lead-short-form-box {
    background:#fff;
    border:1px solid #eee;
    border-radius:12px;
    padding:18px 15px;
    box-shadow:0 4px 15px rgba(0,0,0,0.05);
    width:100%;
}
#leadPopupModal .lead-short-form-box {
    border: none !important;
    padding: 0 !important;
    box-shadow: none !important;
    background: transparent !important;
}
.lead-short-form-box .sf-field {
    margin-bottom: 8px;
}
.lead-short-form-box label {
    font-size: 12px;
    font-weight: 600;
    color: #333;
    margin-bottom: 3px;
    display: block;
}
.lead-short-form-box input[type="text"],
.lead-short-form-box input[type="tel"],
.lead-short-form-box input[type="email"],
.lead-short-form-box select {
    width: 100%;
    padding: 6px 10px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 13px;
    outline: none;
    height: 38px;
    background: #fff;
}
.lead-short-form-box button[type="submit"] {
    width: 100%;
    background: #ff890c;
    color: #fff;
    border: none;
    padding: 8px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    height: 38px;
    margin-top: 4px;
}
</style>
<form class="lead-short-form lead-short-form-box" action="<?php echo $root_prefix; ?>submit-booking.php" method="POST">
    <!-- Form Type Toggle Buttons -->
    <div class="form-type-toggle mb-2" style="display: flex; gap: 4px; background: #f0f2f5; padding: 4px; border-radius: 6px; border: 1px solid #e0e0e0; margin-bottom: 12px;">
        <button type="button" class="form-toggle-btn active" onclick="void(0);" style="flex: 1; padding: 6px 4px; border-radius: 4px; border: none; font-size: 10px; font-weight: 700; cursor: pointer; transition: 0.3s; background: #0e0035; color: #fff; text-align: center; line-height: 1.2;">
            Book Services Only (No Jobs)
        </button>
        <a href="<?php echo $root_prefix; ?>pages/career.php" class="form-toggle-btn" style="flex: 1; padding: 6px 4px; border-radius: 4px; border: none; font-size: 10px; font-weight: 700; cursor: pointer; transition: 0.3s; background: transparent; color: #555; text-align: center; text-decoration: none; display: flex; align-items: center; justify-content: center; line-height: 1.2;">
            Looking for Job
        </a>
    </div>

    <div class="sf-field">
        <label>Full Name *</label>
        <input type="text" name="name" required placeholder="Enter your name">
    </div>
    <div class="sf-field">
        <label>Mobile Number *</label>
        <input type="tel" name="phone" required placeholder="Enter your 10-digit number">
    </div>
    <div class="sf-field">
        <label>Email Address *</label>
        <input type="email" name="email" required placeholder="Enter your email">
    </div>
    <div class="sf-field">
        <label>City *</label>
        <input type="text" name="city" required placeholder="Enter your city">
    </div>
    <div class="sf-field">
        <label>Service Required *</label>
        <select name="service" required>
            <option value="" disabled selected>Select a Service</option>
            <option value="Maid">Maid</option>
            <option value="Cook">Cook</option>
            <option value="Driver">Driver</option>
            <option value="Babysitter/Nanny">Babysitter/ Nanny</option>
            <option value="Elderly Care">Elderly Care</option>
            <option value="Watchman/Security Guard">Watchman/ Security Guard</option>
        </select>
    </div>
    <div class="sf-field">
        <label>Comment or Remark</label>
        <textarea name="message" rows="2" placeholder="What do you Actually Need ? bartan, jhhado & pocha ?" style="width: 100%; padding: 6px 10px; border: 1px solid #ddd; border-radius: 6px; font-size: 12px; outline: none; background: #fff;"></textarea>
    </div>
    
    <div style="display: flex; align-items: flex-start; gap: 6px; margin-bottom: 8px; margin-top: 4px;">
        <input type="checkbox" name="premium_agreement" id="shortPremiumCheck_<?php echo $form_uniq; ?>" required style="margin-top: 2px;">
        <label for="shortPremiumCheck_<?php echo $form_uniq; ?>" style="font-size: 10px; color: #555; line-height: 1.3; margin-bottom: 0; cursor: pointer;">
            I understand that I have to pay a premium for domestic aid services with replacement support. *
        </label>
    </div>

    <!-- Google reCAPTCHA v2 (Compact) -->
    <div style="margin-bottom: 8px; display: flex; justify-content: center;">
        <div class="g-recaptcha" data-sitekey="<?php echo get_env_var('RECAPTCHA_SITE_KEY', '6LdID3AtAAAAACVcD-KNE6eogW6YUpWDLakphEDZ'); ?>" data-size="compact"></div>
    </div>

    <!-- Google Ads & Campaign Tracking Hidden Fields -->
    <input type="hidden" name="utm_campaign" class="utm_campaign">
    <input type="hidden" name="utm_account" class="utm_account">
    <input type="hidden" name="utm_source" class="utm_source">
    <input type="hidden" name="gclid" class="gclid">
    <input type="hidden" name="referrer" class="referrer_field">

    <button type="submit">Submit Details</button>

    <div style="text-align: center; margin: 6px 0; font-size: 11px; font-weight: bold; color: #888;">OR</div>

    <a href="tel:<?php echo $SITE_PHONE_RAW; ?>" style="display: flex; align-items: center; justify-content: center; gap: 6px; width: 100%; background: #007bff; color: #fff; border-radius: 6px; font-size: 13px; font-weight: bold; text-decoration: none; height: 38px; transition: 0.3s;">
        <i class="fas fa-phone-alt"></i> Call Us for better Understanding 24/7
    </a>
</form>
