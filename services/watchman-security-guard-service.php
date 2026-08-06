<?php
$page_title = "Book Watchman & Security Guard Services | Maid It Easy Agency";
$page_description = "Hire professional security guards and watchmen near me. Get top security guard services from leading security guard companies through Maid It Easy.";
$canonical_url = "https://maiditeasy.in/services/watchman-security-guard-service.php";
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
        <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="../assets/img/all-type-Maid-services.webp" role="img" aria-label="Banner image placeholder for hire security guard and watchman services near me">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title">Watchman & Security Guard Service</h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="../index.php">Home</a></li>
                                        <li class="trail-item trail-end"><span>Security Guard Service</span></li>
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
                <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 15px; color: #0e0035;">Our Security Personnel</h3>
                <div class="mobile-image-slider">
                    <div class="slider-wrapper">
                        <div class="slider-item">
                            <img src="../assets/img/service/watchman-02.jpeg" alt="Residential Gate Watchman" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/watchman-03.jpeg" alt="Commercial Security Guard" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/watchman-04.jpeg" alt="Night Shift Patrol Officer" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/watchman-05.jpeg" alt="Apartment Compound Guard" width="300" height="180" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Column 1: SEO Content -->
                    <div class="col-lg-7 mb-40">
                        <div class="tp-service-details">
                            <h1 style="font-size: 32px; font-weight: 800; color: #0e0035; margin-bottom: 20px;">Hire Professional Security Guard Services</h1>
                            
                            <p class="mb-20">Searching for reliable <strong>"Security guard services near me"</strong>? Keeping your residential property, office building, or warehouse safe and secure is a necessity. Maid It Easy functions as a premium <strong>Security Guard agency</strong>, providing trained gatekeepers and watchmen who help guard your premises around the clock.</p>
                            
                            <p class="mb-20">Unlike unorganized independent guards, choosing security personnel through structured <strong>Security guard companies</strong> guarantees you verified documentation, professional training, and shift backup consistency. We verify the identity and police records of all guards to ensure your ultimate safety.</p>

                            <h3 style="font-size: 20px; font-weight: bold; color: #0e0035; margin-top: 30px; margin-bottom: 15px;">Benefits of Our Security Guard Services</h3>
                            <ul>
                                <li style="margin-bottom: 10px;"><strong>Trained Personnel:</strong> Guarding entry/exit logs, handling visitor verifications, and compound patrolling.</li>
                                <li style="margin-bottom: 10px;"><strong>Background Screened:</strong> Thorough verification of identity, local references, and criminal records.</li>
                                <li style="margin-bottom: 10px;"><strong>Organized Agency Structure:</strong> Reliable replacement guards during leaves or shift turnarounds.</li>
                            </ul>
                        </div>      
                    </div>

                    <!-- Column 2: Booking Form -->
                    <div class="col-lg-5 mb-40">
                        <h3 style="font-size: 22px; font-weight: bold; color: #0e0035; margin-bottom: 20px; text-align: center;">Book Your Security Guard</h3>
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
