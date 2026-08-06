<?php
$page_title = "Book Babysitter & Nanny Service | nanny near me | Maid It Easy";
$page_description = "Hire professional nannies and babysitters. Get local babysitting near me, caretaker for kids, and nanny for newborn care from Maid It Easy.";
$canonical_url = "https://maiditeasy.in/services/babysitter-nanny-service.php";
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
        <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="../assets/img/all-type-Maid-services.webp" role="img" aria-label="Banner image placeholder for hire babysitter and nanny service near me">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title">Babysitter & Nanny Service</h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="../index.php">Home</a></li>
                                        <li class="trail-item trail-end"><span>Babysitter & Nanny Service</span></li>
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
                <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 15px; color: #0e0035;">Our Childcare Experts</h3>
                <div class="mobile-image-slider">
                    <div class="slider-wrapper">
                        <div class="slider-item">
                            <img src="../assets/img/service/Nanny-01.jpg" alt="Newborn Nanny Care" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/Nanny-02.jpg" alt="Toddler Babysitter" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/Nanny-03.jpeg" alt="Kids Caretaker" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/Nanny-04.jpeg" alt="Professional Nanny" width="300" height="180" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Column 1: SEO Content -->
                    <div class="col-lg-7 mb-40">
                        <div class="tp-service-details">
                            <h1 style="font-size: 32px; font-weight: 800; color: #0e0035; margin-bottom: 20px;">Hire Trusted Babysitter & Nanny Services</h1>
                            
                            <p class="mb-20">Are you a parent search-querying <strong>"nanny near me"</strong> or <strong>"babysitting near me"</strong>? Keeping your children safe, engaged, and well-cared-for is our absolute focus. At Maid It Easy, we provide specialized <strong>Babysitting services</strong> and <strong>nanny service</strong> helpers who are highly experienced in early childhood care.</p>
                            
                            <p class="mb-20">Whether you need an experienced <strong>nanny for newborn</strong> baby care, an active <strong>babysitter</strong> to manage toddlers, or a dedicated <strong>caretaker for kids</strong> to help with schooling, we find the perfect helper. When a <strong>nanny needed</strong> request is placed, we ensure the profiles are thoroughly vetted for background security and child safety.</p>

                            <h3 style="font-size: 20px; font-weight: bold; color: #0e0035; margin-top: 30px; margin-bottom: 15px;">Why Trust Our Nanny Services?</h3>
                            <ul>
                                <li style="margin-bottom: 10px;"><strong>Professional Childcare:</strong> Helpers trained in child feeding, diaper changing, sleep scheduling, and play activities.</li>
                                <li style="margin-bottom: 10px;"><strong>Newborn Care Specialists:</strong> Gentle care for infants, assisting new mothers during postpartum.</li>
                                <li style="margin-bottom: 10px;"><strong>Verified Safety:</strong> Direct police checks and identity verifications before placement.</li>
                            </ul>
                        </div>      
                    </div>

                    <!-- Column 2: Booking Form -->
                    <div class="col-lg-5 mb-40">
                        <h3 style="font-size: 22px; font-weight: bold; color: #0e0035; margin-bottom: 20px; text-align: center;">Book Your Nanny / Babysitter</h3>
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
