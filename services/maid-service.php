<?php
$page_title = "Need Maid? Hire Domestic Maid Service | Maid It Easy Agency";
$page_description = "If you need maid services, hire a domestic maid with Maid It Easy. Leading maid agency offering background-verified housemaid service with a free replacement guarantee.";
$canonical_url = "https://maiditeasy.in/services/maid-service.php";
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
        <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="../assets/img/all-type-Maid-services.webp" role="img" aria-label="Banner image placeholder for hire maid and housemaid service">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title">Maid Service</h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="../index.php">Home</a></li>
                                        <li class="trail-item trail-end"><span>Maid Service</span></li>
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
                <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 15px; color: #0e0035;">Our Service Portfolio</h3>
                <div class="mobile-image-slider">
                    <div class="slider-wrapper">
                        <div class="slider-item">
                            <img src="../assets/img/service/maid-service-1.png" alt="House Cleaning Service" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/maid-service-2.png" alt="Kitchen Helper Maid" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/maid-service-3.png" alt="Ironing & Washing Helper" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/maid-service-4.png" alt="Professional Housemaid" width="300" height="180" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Column 1: SEO Content -->
                    <div class="col-lg-7 mb-40">
                        <div class="tp-service-details">
                            <h1 style="font-size: 32px; font-weight: 800; color: #0e0035; margin-bottom: 20px;">Hire Maid Help from India's Top Maid Agency</h1>
                            
                            <p class="mb-20">Are you saying to yourself: <strong>"I need maid help for my home"</strong>? Finding a reliable and skilled domestic maid can be stressful. At Maid It Easy, we operate as a premium <strong>maid service</strong> and <strong>maid agency</strong>, bridging the gap between busy homeowners and background-checked housekeepers. We provide verified candidates with a replacement guarantee, ensuring you have help whenever you need it.</p>
                            
                            <p class="mb-20">Our comprehensive <strong>housemaid service</strong> covers all aspects of residential cleaning, including dusting, sweeping, mopping, washing utensils, cleaning toilets, and laundry. We understand that every household has unique requirements, which is why we allow you to customize duties and schedules during recruitment.</p>

                            <h3 style="font-size: 20px; font-weight: bold; color: #0e0035; margin-top: 30px; margin-bottom: 15px;">Benefits of Our Maid Service</h3>
                            <ul>
                                <li style="margin-bottom: 10px;"><strong>Vetted Profiles:</strong> Background checks and identity verifications are performed on every domestic maid.</li>
                                <li style="margin-bottom: 10px;"><strong>Replacement Guarantee:</strong> Free replacement if the hired helper leaves within the contract period.</li>
                                <li style="margin-bottom: 10px;"><strong>Professional Support:</strong> Dedicated customer care to handle helper schedules and disputes.</li>
                            </ul>
                        </div>      
                    </div>

                    <!-- Column 2: Booking Form -->
                    <div class="col-lg-5 mb-40">
                        <h3 style="font-size: 22px; font-weight: bold; color: #0e0035; margin-bottom: 20px; text-align: center;">Book Your Maid Service</h3>
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
