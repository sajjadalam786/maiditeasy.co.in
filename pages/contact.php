<?php
$page_title = "Contact Us | Maid It Easy";
$page_description = "Get in touch with Maid It Easy. Fill out our contact form or reach out via WhatsApp to hire verified maids, cooks, and babysitters. We serve Hyderabad, Pune, Mumbai, and more.";
$canonical_url = "https://maiditeasy.in/pages/contact.php";
include '../includes/header.php';
?>
    <main>
        <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="../assets/img/all-type-Maid-services.webp">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title">Contact us</h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="../index.php">Home</a></li>
                                        <li class="trail-item trail-end"><span>Contact us</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>

        <section class="tp-contact-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section-title-wrapper-two mb-50">
                            <p class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black" style="font-weight: 600;">Get a Free Estimate Now</p>
                            <h1 class="tp-section-title heading-color-black" style="font-size: 40px; font-weight: 800; line-height: 1.2;">If you have any query, <br>Don't Hesitate to Contact us </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row custom-mar-20">
                            <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                                <div class="tp-contact-info mb-40">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Address</h4>
                                        <p>2ND FLOOR, PLOT NO 2, SECTOR 1 SY NO 64, Huda Techno Enclave, Madhapur, Hyderabad, Rangareddy, Telangana <br>Pincode: 500081</p><br>
                                        <p>Maid It Easy, Saket Callipolis, Sarjapur-Marathalli Road, Doddakanneli, Bengaluru, Karnataka <br>Pincode: 560035 </p><br>
                                        <p>Maid It Easy, Suite 1115, 15 A 4th Floor, City Vista Fountain Road, Kharadi, Pune <br>Pincode: 411014</p><br>
                                        <p>Maid It Easy, Suite 1123, 715-A 7th Floor, Spencer Plaza Mount Road, Chennai <br>Pincode: 600002</p><br>
                                        <p>Maid It Easy, Plot no. 11, <br>Sector 33, Gurugram <br>Pincode: 122005</p><br>
                                        <p>401, Corporate Arena, Sitaram Patkar Rd, Piramal Nagar, Goregaon West, Mumbai, Maharashtra 400104</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                                <div class="tp-contact-info mb-40">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Phone</h4>
                                        <a href="tel:<?php echo $SITE_PHONE_RAW; ?>"><?php echo $SITE_PHONE_DISPLAY; ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                                <div class="tp-contact-info mb-40">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Email</h4>
                                        <a href="mailto:<?php echo $SITE_EMAIL; ?>"><?php echo $SITE_EMAIL; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tp-contact-form" style="background-color: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                            <!-- Form Type Toggle Buttons -->
                            <div class="form-type-toggle mb-3" style="display: flex; gap: 6px; background: #f0f2f5; padding: 5px; border-radius: 8px; border: 1px solid #e0e0e0;">
                                <button type="button" class="form-toggle-btn active" onclick="void(0);" style="flex: 1; padding: 9px 8px; border-radius: 6px; border: none; font-size: 12px; font-weight: 700; cursor: pointer; transition: 0.3s; background: #0e0035; color: #fff; text-align: center; line-height: 1.2;">
                                    Book Services Only (No Jobs)
                                </button>
                                <a href="career.php" class="form-toggle-btn" style="flex: 1; padding: 9px 8px; border-radius: 6px; border: none; font-size: 12px; font-weight: 700; cursor: pointer; transition: 0.3s; background: transparent; color: #555; text-align: center; text-decoration: none; display: flex; align-items: center; justify-content: center; line-height: 1.2;">
                                    Looking for Job
                                </a>
                            </div>

                            <form action="../submit-booking.php" method="POST">
                                <div style="background-color: #fff9e6; color: #856404; padding: 12px 15px; border-radius: 6px; margin-bottom: 20px; font-weight: bold; border: 1px solid #ffeeba; font-size: 14px; text-align: center;">
                                    Instant Maids Requirement Not Available - Only Long Terms
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">Full Name *</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your full name" required style="height: 45px; border-radius: 6px; font-size: 14px;">
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">Phone Number *</label>
                                        <input type="tel" name="phone" class="form-control" placeholder="Enter phone number" required style="height: 45px; border-radius: 6px; font-size: 14px;">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">Alternate Number *</label>
                                        <input type="tel" name="alternate_phone" class="form-control" placeholder="Enter alternate number" required style="height: 45px; border-radius: 6px; font-size: 14px;">
                                    </div>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">Email Address *</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required style="height: 45px; border-radius: 6px; font-size: 14px;">
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">City *</label>
                                        <input type="text" name="city" class="form-control" placeholder="Enter your city" required style="height: 45px; border-radius: 6px; font-size: 14px;">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">Area *</label>
                                        <input type="text" name="area" class="form-control" placeholder="Enter Area" required style="height: 45px; border-radius: 6px; font-size: 14px;">
                                    </div>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">Choose Interested Service *</label>
                                    <select name="service" class="form-control" required style="height: 45px; border-radius: 6px; font-size: 14px; background-color: #fff;">
                                        <option value="">-- Select Service --</option>
                                        <option value="Maid Service">Maid Service</option>
                                        <option value="Cook Service">Cook Service</option>
                                        <option value="Babysitter & Nanny Service">Babysitter & Nanny Service</option>
                                        <option value="Elderly Care Service">Elderly Care Service</option>
                                        <option value="Driver Service">Driver Service</option>
                                        <option value="Watchman & Security Guard Service">Watchman & Security Guard Service</option>
                                        <option value="All-in-One Service">All-in-One Domestic Help Service</option>
                                    </select>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">Urgency of your requirement *</label>
                                    <select name="urgency" class="form-control" required style="height: 45px; border-radius: 6px; font-size: 14px; background-color: #fff;">
                                        <option value="Urgent">Urgent</option>
                                        <option value="Not Urgent">Not Urgent</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">How did you hear about us?</label>
                                    <input type="text" name="referrer" class="form-control" placeholder="Google, Friends, Social Media, etc." style="height: 45px; border-radius: 6px; font-size: 14px;">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">Comment or Remark</label>
                                    <textarea name="message" class="form-control" rows="3" placeholder="Enter Comment" style="border-radius: 6px; font-size: 14px; padding: 10px;"></textarea>
                                </div>
                                
                                <div class="form-group mb-3" style="display: flex; align-items: flex-start; gap: 8px;">
                                    <input type="checkbox" name="premium_agreement" id="premiumAgreementCheckContact" required style="margin-top: 4px;">
                                    <label for="premiumAgreementCheckContact" style="font-size: 12px; color: #555; line-height: 1.4; margin-bottom: 0; cursor: pointer;">
                                        I understand that I have to pay a premium to Maid It Easy for providing domestic aid services with a free replacement guarantee. *
                                    </label>
                                </div>
                                
                                <div class="form-group mb-4" style="display: flex; align-items: flex-start; gap: 8px;">
                                    <input type="checkbox" name="terms_agreement" id="termsAgreementCheckContact" required style="margin-top: 4px;">
                                    <label for="termsAgreementCheckContact" style="font-size: 12px; color: #555; line-height: 1.4; margin-bottom: 0; cursor: pointer;">
                                        Accepting <a href="../pages/terms-and-conditions.php" target="_blank" style="color: #ff890c; text-decoration: underline;">Terms & Conditions</a> *
                                    </label>
                                </div>
                                
                                <!-- Google reCAPTCHA v3 Token Field -->
                                <input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">
                                
                                <button type="submit" class="btn" style="width: 100%; height: 50px; background-image: linear-gradient(to right, #ffd10c 0%, #ff890c 51%, #ffd10c 100%); background-size: 200% auto; border: none; border-radius: 6px; color: #0e0035; font-weight: bold; font-size: 16px; transition: 0.5s;">SUBMIT BOOKING</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../includes/faq-section.php'; ?>
    </main>
<?php
include '../includes/footer.php';
?>
