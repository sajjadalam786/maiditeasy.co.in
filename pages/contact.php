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
                        <?php 
                        $root_prefix = '../';
                        include '../includes/booking-form.php'; 
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../includes/faq-section.php'; ?>
    </main>
<?php
include '../includes/footer.php';
?>
