<?php
$page_title = "Book All-in-One Domestic Help Services | Maid It Easy Agency";
$page_description = "Book strictly vetted, background-verified maids, professional cooks, caring babysitters, and dependable drivers. All-in-one solution by Maid It Easy.";
$canonical_url = "https://maiditeasy.in/services/all-in-one-maid-services-cooking-services-take-care.php";
$additional_styles = "
.mobile-image-slider { overflow-x: auto; white-space: nowrap; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; margin-bottom: 30px; }
.mobile-image-slider::-webkit-scrollbar { height: 6px; }
.mobile-image-slider::-webkit-scrollbar-thumb { background-color: #ffd10c; border-radius: 10px; }
.mobile-image-slider .slider-wrapper { display: flex; gap: 15px; }
.mobile-image-slider .slider-item { flex: 0 0 80%; scroll-snap-align: start; border-radius: 8px; overflow: hidden; background: #eaeaea; height: 180px; display: flex; align-items: center; justify-content: center; color: #666; font-size: 14px; font-weight: bold; }
.mobile-image-slider .slider-item img { width: 100%; height: 100%; object-fit: cover; }
@media (min-width: 768px) { .mobile-image-slider .slider-item { flex: 0 0 23%; } }
";
include '../includes/header.php';
?>
    <main>
        <!-- Banner Image section with Alt Text placeholder -->
        <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="../assets/img/all-type-Maid-services.webp" role="img" aria-label="Banner image placeholder for all-in-one domestic help services">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title">All-in-One Service</h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="../index.php">Home</a></li>
                                        <li class="trail-item trail-end"><span>All-in-One Service</span></li>
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
                <!-- Mobile Image Slider (4 Images) -->
                <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 15px; color: #0e0035;">Our Helpers Portfolio</h3>
                <div class="mobile-image-slider">
                    <div class="slider-wrapper">
                        <div class="slider-item">
                            <img src="../assets/img/service/Maid-01.jpg" alt="Domestic Cleaning Helper" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/Cook-01.jpg" alt="Gourmet Kitchen Cook" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/Nanny-01.jpg" alt="Childcare Nanny Specialist" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/watchman-02.jpeg" alt="Gate Watchman Security Guard" width="300" height="180" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Column 1: SEO Content -->
                    <div class="col-lg-7 mb-40">
                        <div class="tp-service-details">
                            <h1 style="font-size: 32px; font-weight: 800; color: #0e0035; margin-bottom: 20px;">Book All-in-One Domestic Help Services</h1>
                            
                            <p class="mb-20">Welcome to Maid It Easy, your ultimate all-in-one solution for reliable domestic help. Whether you <strong>need maid</strong> services, a <strong>professional nanny</strong>, a <strong>cook service</strong> expert, or a reliable gatekeeper, we provide structured, background-verified help for your private residence or workspace.</p>
                            
                            <p class="mb-20">We handle the verification, screening, documentation, and candidate matching. Our replacement guarantee ensures that your household routines continue seamlessly even if a helper leaves. Register your requirement today to find the perfect helper match.</p>

                            <h3 style="font-size: 20px; font-weight: bold; color: #0e0035; margin-top: 30px; margin-bottom: 15px;">Why Choose Maid It Easy?</h3>
                            <ul>
                                <li style="margin-bottom: 10px;"><strong>Verified Network:</strong> All domestic helpers, caretakers, and drivers are screened carefully.</li>
                                <li style="margin-bottom: 10px;"><strong>Organized Platform:</strong> Standard billing, transparent terms, and customer care support.</li>
                                <li style="margin-bottom: 10px;"><strong>Free Standby Replacements:</strong> Quick turnaround when a backup is required.</li>
                            </ul>
                        </div>      
                    </div>

                    <!-- Column 2: Booking Form -->
                    <div class="col-lg-5 mb-40">
                        <h3 style="font-size: 22px; font-weight: bold; color: #0e0035; margin-bottom: 20px; text-align: center;">Book Your Helper</h3>
                        <?php include '../includes/booking-form.php'; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../includes/faq-section.php'; ?>
    </main>
<?php
include '../includes/footer.php';
?>
