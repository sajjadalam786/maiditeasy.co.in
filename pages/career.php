<?php
$page_title = "Join Our Team | Careers at Maid It Easy";
$page_description = "Careers at Maid It Easy. Helper registration form.";
$canonical_url = "https://maiditeasy.co.in/pages/career.php";
$meta_robots = "noindex, nofollow";
include '../includes/header.php';
?>
    <main>
        <!-- Banner Image Section with Alt text placeholder -->
        <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="../assets/img/all-type-Maid-services.webp" role="img" aria-label="Banner image placeholder for joining our professional helper team">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title">Join Our Team</h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="../index.php">Home</a></li>
                                        <li class="trail-item trail-end"><span>Careers</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="tp-service-details-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <!-- Column 1: Career Information -->
                    <div class="col-lg-6 mb-40">
                        <div class="tp-service-details">
                            <h1 class="mb-30" style="font-size: 32px; font-weight: 800; color: #0e0035;">Earn Dignity, Trust & Good Salary with Us</h1>
                            <p class="mb-20">At Maid It Easy, we connect skilled helpers with families across the country. We believe in providing stable employment, punctual payments, and a safe work environment for all our helper partners.</p>
                            
                            <h3 style="font-size: 20px; font-weight: bold; color: #0e0035; margin-top: 30px; margin-bottom: 15px;">Benefits of Joining Us:</h3>
                            <ul class="mb-30">
                                <li style="margin-bottom: 10px;"><strong>Continuous Jobs:</strong> We match you with families in your preferred area immediately.</li>
                                <li style="margin-bottom: 10px;"><strong>Medical & Salary Security:</strong> Get paid on time directly to your account.</li>
                                <li style="margin-bottom: 10px;"><strong>Free Registration:</strong> No agent fees or commissions to join.</li>
                            </ul>

                            <h3 style="font-size: 20px; font-weight: bold; color: #0e0035; margin-bottom: 15px;">We Are Hiring For:</h3>
                            <div class="row">
                                <div class="col-sm-6 mb-15"><strong>• House Maid</strong></div>
                                <div class="col-sm-6 mb-15"><strong>• Baby Nanny / Caretaker</strong></div>
                                <div class="col-sm-6 mb-15"><strong>• Kitchen Cook / Brahmin Cook</strong></div>
                                <div class="col-sm-6 mb-15"><strong>• Senior Elderly Caretaker</strong></div>
                                <div class="col-sm-6 mb-15"><strong>• Private Car Driver</strong></div>
                                <div class="col-sm-6 mb-15"><strong>• Security Guard / Watchman</strong></div>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2: Job Seeker Form -->
                    <div class="col-lg-6 mb-40">
                        <div style="background-color: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                            <!-- Form Type Toggle Buttons -->
                            <div class="form-type-toggle mb-3" style="display: flex; gap: 6px; background: #f0f2f5; padding: 5px; border-radius: 8px; border: 1px solid #e0e0e0;">
                                <a href="../index.php" class="form-toggle-btn" style="flex: 1; padding: 9px 8px; border-radius: 6px; border: none; font-size: 12px; font-weight: 700; cursor: pointer; transition: 0.3s; background: transparent; color: #555; text-align: center; text-decoration: none; display: flex; align-items: center; justify-content: center; line-height: 1.2;">
                                    Book Services Only (No Jobs)
                                </a>
                                <button type="button" class="form-toggle-btn active" onclick="void(0);" style="flex: 1; padding: 9px 8px; border-radius: 6px; border: none; font-size: 12px; font-weight: 700; cursor: pointer; transition: 0.3s; background: #0e0035; color: #fff; text-align: center; line-height: 1.2;">
                                    Looking for Job
                                </button>
                            </div>

                            <h3 style="font-size: 22px; font-weight: bold; color: #0e0035; margin-bottom: 20px; text-align: center;">Helper Registration Form</h3>
                            
                            <form action="../submit-application.php" method="POST">
                                <div class="form-group mb-3">
                                    <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">Full Name *</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required style="height: 40px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">Phone Number *</label>
                                        <input type="tel" name="phone" class="form-control" placeholder="Mobile number" required style="height: 40px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">Alternate Contact Number *</label>
                                        <input type="tel" name="alternate_phone" class="form-control" placeholder="Family member number" required style="height: 40px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">Age *</label>
                                        <input type="number" name="age" class="form-control" placeholder="Age in years" required style="height: 40px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">Gender *</label>
                                        <select name="gender" class="form-control" required style="height: 40px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background-color: #fff;">
                                            <option value="">-- Select --</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">Which Job Role are you applying for? *</label>
                                    <select name="role" class="form-control" required style="height: 40px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background-color: #fff;">
                                        <option value="">-- Select Job --</option>
                                        <option value="House Maid">House Maid (Cleaning & Laundry)</option>
                                        <option value="Home Cook">Home Cook (Veg & Non-Veg)</option>
                                        <option value="Brahmin Cook">Brahmin Cook (Veg Only)</option>
                                        <option value="Babysitter / Nanny">Babysitter / Nanny</option>
                                        <option value="Elderly Caretaker">Elderly Caretaker</option>
                                        <option value="Private Driver">Private Driver</option>
                                        <option value="Watchman / Security Guard">Watchman / Security Guard</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">Experience *</label>
                                        <select name="experience" class="form-control" required style="height: 40px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background-color: #fff;">
                                            <option value="No Experience">No Experience</option>
                                            <option value="1-2 Years">1-2 Years</option>
                                            <option value="3-5 Years">3-5 Years</option>
                                            <option value="5+ Years">5+ Years</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">Salary Expectation (Monthly) *</label>
                                        <input type="text" name="salary" class="form-control" placeholder="INR amount" required style="height: 40px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">Work Shift Preference *</label>
                                    <select name="work_type" class="form-control" required style="height: 40px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px; background-color: #fff;">
                                        <option value="Part-time (Day Shift)">Part-time (Day Shift)</option>
                                        <option value="12 Hours Day/Night">12 Hours Day/Night Shift</option>
                                        <option value="24 Hours (Live-in)">24 Hours (Live-in)</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">City *</label>
                                        <input type="text" name="city" class="form-control" placeholder="Enter your city" required style="height: 40px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">Preferred Work Area / Address *</label>
                                        <input type="text" name="location" class="form-control" placeholder="e.g. Madhapur, Gachibowli" required style="height: 40px; border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;">
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label style="font-weight: 600; margin-bottom: 5px; font-size: 13px; display: block;">Brief Work History / Remarks</label>
                                    <textarea name="message" class="form-control" rows="3" placeholder="What do you Actually Need ? bartan, jhhado & pocha ?" style="border-radius: 6px; font-size: 13px; border: 1px solid #ced4da; width: 100%; padding: 8px 12px;"></textarea>
                                </div>

                                <div class="form-group mb-3" style="display: flex; align-items: flex-start; gap: 8px;">
                                    <input type="checkbox" name="dignity_agreement" id="dignityCheck" required style="margin-top: 4px;">
                                    <label for="dignityCheck" style="font-size: 11px; color: #555; line-height: 1.4; margin-bottom: 0; cursor: pointer;">
                                        I confirm that the details provided are accurate and I do not have any criminal records. *
                                    </label>
                                </div>

                                <div class="form-group mb-4" style="display: flex; align-items: flex-start; gap: 8px;">
                                    <input type="checkbox" name="terms_agreement" id="termsCheck" required style="margin-top: 4px;">
                                    <label for="termsCheck" style="font-size: 11px; color: #555; line-height: 1.4; margin-bottom: 0; cursor: pointer;">
                                        Accepting <a href="../pages/terms-and-conditions.php" target="_blank" style="color: #ff890c; text-decoration: underline;">Terms & Conditions</a> *
                                    </label>
                                </div>

                                <!-- Google reCAPTCHA v3 Token Field -->
                                <input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">

                                <button type="submit" class="btn" style="width: 100%; height: 45px; background-image: linear-gradient(to right, #ffd10c 0%, #ff890c 51%, #ffd10c 100%); background-size: 200% auto; border: none; border-radius: 6px; color: #0e0035; font-weight: bold; font-size: 14px; transition: 0.5s;">REGISTER NOW</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
include '../includes/footer.php';
?>
