<?php
$page_title = "Book Driver Service | Professional Car Drivers | Maid It Easy";
$page_description = "Hire experienced and background-verified drivers for your private cars. Trusted and professional driver services with Maid It Easy.";
$canonical_url = "https://maiditeasy.in/services/driver-service.php";
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
        <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="../assets/img/all-type-Maid-services.webp" role="img" aria-label="Banner image placeholder for hire driver and driver services near me">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title">Driver Service</h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="../index.php">Home</a></li>
                                        <li class="trail-item trail-end"><span>Driver Service</span></li>
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
                <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 15px; color: #0e0035;">Our Chauffeur Network</h3>
                <div class="mobile-image-slider">
                    <div class="slider-wrapper">
                        <div class="slider-item">
                            <img src="../assets/img/service/Driver-01.jpeg" alt="Sedan & Hatchback Driver" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/Driver-02.jpeg" alt="Luxury SUV Driver" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/Driver-03.jpeg" alt="Outstation Driver" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/Driver-04.jpeg" alt="Personal Chauffeur" width="300" height="180" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Column 1: SEO Content -->
                    <div class="col-lg-7 mb-40">
                        <div class="tp-service-details">
                            <h1 style="font-size: 32px; font-weight: 800; color: #0e0035; margin-bottom: 20px;">Hire Professional Drivers for Personal Cars</h1>
                            
                            <p class="mb-20">Looking for a safe, reliable chauffeur? Navigating city traffic or driving long distances can be exhausting. Our professional <strong>driver service</strong> connects you with highly experienced, background-verified personal car drivers for daily commuting, business travel, or weekend outstation trips.</p>
                            
                            <p class="mb-20">All drivers in our network undergo thorough background checks, reference checks, and driving skill reviews. We ensure you get a driver who is polite, punctual, and knows the local navigation rules perfectly.</p>

                            <h3 style="font-size: 20px; font-weight: bold; color: #0e0035; margin-top: 30px; margin-bottom: 15px;">Benefits of Our Driver Service</h3>
                            <ul>
                                <li style="margin-bottom: 10px;"><strong>Vetted Licences:</strong> Thorough check of valid commercial/private driving licences.</li>
                                <li style="margin-bottom: 10px;"><strong>Expert Driving:</strong> Handled by drivers with years of experience driving sedans, SUVs, and luxury vehicles.</li>
                                <li style="margin-bottom: 10px;"><strong>Flexible Contracts:</strong> Monthly hire with simple replacement guarantees.</li>
                            </ul>
                        </div>      
                    </div>

                    <!-- Column 2: Booking Form -->
                    <div class="col-lg-5 mb-40">
                        <h3 style="font-size: 22px; font-weight: bold; color: #0e0035; margin-bottom: 20px; text-align: center;">Book Your Driver</h3>
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
