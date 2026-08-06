<?php
$page_title = "Book Elderly Care Service | Senior Caretakers | Maid It Easy";
$page_description = "Book experienced and caring elderly care assistants with Maid It Easy. Professional caretakers for seniors at home.";
$canonical_url = "https://maiditeasy.in/services/elderly-care-service.php";
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
        <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="../assets/img/all-type-Maid-services.webp" role="img" aria-label="Banner image placeholder for elderly care service and senior caretakers">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title">Elderly Care Service</h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="../index.php">Home</a></li>
                                        <li class="trail-item trail-end"><span>Elderly Care Service</span></li>
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
                <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 15px; color: #0e0035;">Our Senior Care Services</h3>
                <div class="mobile-image-slider">
                    <div class="slider-wrapper">
                        <div class="slider-item">
                            <img src="../assets/img/service/elderly-care-01.jpg" alt="Senior Companion Care" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/elderly-care-02.jpeg" alt="Medical Reminders Assistant" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/elderly-care-03.jpeg" alt="Daily Mobility Helper" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/elderly-care-04.jpeg" alt="Post-Hospitalization Caretaker" width="300" height="180" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Column 1: SEO Content -->
                    <div class="col-lg-7 mb-40">
                        <div class="tp-service-details">
                            <h1 style="font-size: 32px; font-weight: 800; color: #0e0035; margin-bottom: 20px;">Compassionate Elderly Care Services at Home</h1>
                            
                            <p class="mb-20">Caring for aging parents or family members requires patience, respect, and time. Our dedicated <strong>elderly care service</strong> matches your family with trusted, background-verified senior caretakers. We support daily routines, medical tracking, basic mobility assistance, and companionship.</p>
                            
                            <p class="mb-20">We ensure that our helpers are warm, clinical-aware, and experienced in dealing with the unique needs of seniors. Whether your family member needs a part-time caregiver or a full-time live-in assistant, Maid It Easy helps you recruit the best profiles under an organized agency structure.</p>

                            <h3 style="font-size: 20px; font-weight: bold; color: #0e0035; margin-top: 30px; margin-bottom: 15px;">Features of Our Elderly Care</h3>
                            <ul>
                                <li style="margin-bottom: 10px;"><strong>Companion Care:</strong> Engaging seniors in reading, walks, and pleasant conversations to support mental wellness.</li>
                                <li style="margin-bottom: 10px;"><strong>Activity Support:</strong> Assisting with bathing, dressing, toilet routines, and dining.</li>
                                <li style="margin-bottom: 10px;"><strong>Replacement Guarantee:</strong> Immediate replacements if the caregiver takes leave.</li>
                            </ul>
                        </div>      
                    </div>

                    <!-- Column 2: Booking Form -->
                    <div class="col-lg-5 mb-40">
                        <h3 style="font-size: 22px; font-weight: bold; color: #0e0035; margin-bottom: 20px; text-align: center;">Book Your Caregiver</h3>
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
