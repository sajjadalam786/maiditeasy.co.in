<?php
$page_title = "Book Cook Service | cooks near me | Maid It Easy Agency";
$page_description = "Hire professional cooks for home. Get the best cook service near me, including specialized cooks and brahmin cook experts from Maid It Easy.";
$canonical_url = "https://maiditeasy.in/services/cook-service.php";
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
        <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="../assets/img/all-type-Maid-services.webp" role="img" aria-label="Banner image placeholder for hire cook service and cooks near me">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title">Cook Service</h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="../index.php">Home</a></li>
                                        <li class="trail-item trail-end"><span>Cook Service</span></li>
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
                <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 15px; color: #0e0035;">Our Culinary Expertise</h3>
                <div class="mobile-image-slider">
                    <div class="slider-wrapper">
                        <div class="slider-item">
                            <img src="../assets/img/service/Cook-01.jpg" alt="Home Meal Prep Cook" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/cook-02.jpeg" alt="South Indian Cook" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/cook-03.jpeg" alt="Brahmin Pure Veg Cook" width="300" height="180" loading="lazy">
                        </div>
                        <div class="slider-item">
                            <img src="../assets/img/service/cook-04.jpeg" alt="Multi-cuisine Chef" width="300" height="180" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Column 1: SEO Content -->
                    <div class="col-lg-7 mb-40">
                        <div class="tp-service-details">
                            <h1 style="font-size: 32px; font-weight: 800; color: #0e0035; margin-bottom: 20px;">Hire Professional Cook for Home Services</h1>
                            
                            <p class="mb-20">Searching for the best <strong>"cooks near me"</strong>? Having home-cooked meals prepared in the comfort of your kitchen is a great way to maintain a healthy lifestyle. Our premium <strong>cook service</strong> matches you with experienced culinary professionals who can prepare delicious, hygienic meals tailored to your taste preference.</p>
                            
                            <p class="mb-20">Whether you need a cook for standard daily home meals or are looking for a specialized <strong>brahmin cook</strong> to prepare pure vegetarian, satvik cuisine, we have the right candidates. As a reliable domestic help provider, Maid It Easy handles recruitment, screening, and documentation to give you a stress-free experience.</p>

                            <h3 style="font-size: 20px; font-weight: bold; color: #0e0035; margin-top: 30px; margin-bottom: 15px;">Why Hire Cooks from Our Platform?</h3>
                            <ul>
                                <li style="margin-bottom: 10px;"><strong>Custom Cuisines:</strong> Choose cooks skilled in North Indian, South Indian, Gujarati, Chinese, and Continental food.</li>
                                <li style="margin-bottom: 10px;"><strong>Hygienic Cooking:</strong> All cooks undergo background checks and kitchen hygiene assessments.</li>
                                <li style="margin-bottom: 10px;"><strong>Free Replacements:</strong> Get a standby replacement cook if your helper is absent or leaves.</li>
                            </ul>
                        </div>      
                    </div>

                    <!-- Column 2: Booking Form -->
                    <div class="col-lg-5 mb-40">
                        <h3 style="font-size: 22px; font-weight: bold; color: #0e0035; margin-bottom: 20px; text-align: center;">Book Your Cook</h3>
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
