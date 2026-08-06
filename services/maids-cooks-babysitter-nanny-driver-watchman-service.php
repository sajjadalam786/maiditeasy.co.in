<?php
$page_title = "Our Services | Hire Best Maids, Cooks, Babysitters, and Drivers";
$page_description = "Hire best maids, cooks, babysitters, drivers, and watchmen. Verified domestic helpers under one platform with Maid It Easy.";
$canonical_url = "https://maiditeasy.in/services/maids-cooks-babysitter-nanny-driver-watchman-service.php";
$additional_styles = "
.service-card-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-bottom: 40px;
}
.service-card-item {
    background: #fff;
    border: 1px solid #eef0f3;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.03);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    cursor: pointer;
}
.service-card-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.06);
}
.service-icon-box {
    width: 50px;
    height: 50px;
    background: #fff9e6;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ff890c;
    font-size: 24px;
    margin-bottom: 20px;
}
.service-card-title {
    font-size: 18px;
    font-weight: 700;
    color: #0e0035;
    margin-bottom: 12px;
}
.service-card-desc {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
}
.service-card-btn {
    font-size: 14px;
    color: #ff890c;
    font-weight: 700;
    text-transform: uppercase;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}
.service-card-btn:hover {
    color: #0e0035;
}

@media (max-width: 575px) {
    .service-card-grid {
        gap: 12px;
    }
    .service-card-item {
        padding: 15px 10px;
    }
    .service-icon-box {
        width: 40px;
        height: 40px;
        font-size: 18px;
        margin-bottom: 12px;
    }
    .service-icon-box img {
        width: 20px;
        height: 20px;
    }
    .service-card-title {
        font-size: 13px;
        margin-bottom: 8px;
    }
    .service-card-desc {
        font-size: 11px;
        margin-bottom: 12px;
        line-height: 1.4;
    }
    .service-card-btn {
        font-size: 11px;
    }
}
";
include '../includes/header.php';
?>
    <main>
        <!-- Banner Image Section -->
        <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="../assets/img/all-type-Maid-services.webp" role="img" aria-label="Banner image placeholder for complete range of domestic help services">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title">Our Services</h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="../index.php">Home</a></li>
                                        <li class="trail-item trail-end"><span>Services</span></li>
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
                    <!-- Column 1: Services Cards Grid -->
                    <div class="col-lg-8 mb-40">
                        <div class="tp-service-details-left">
                            <h1 style="font-size: 32px; font-weight: 800; color: #0e0035; margin-bottom: 20px;">Reliable Domestic Help & Housekeeping Solutions</h1>
                            <p class="mb-40" style="font-size: 15px; line-height: 1.6; color: #555;">Maid It Easy is your premium platform to hire background-verified home assistants. Browse through our specialized services below and select the helper who fits your home's unique routines. Click on any card to read detailed services and policies.</p>
                            
                            <div class="service-card-grid">
                                <!-- Maid Service -->
                                <div class="service-card-item" onclick="location.href='maid-service.php';">
                                    <div class="service-icon-box"><i class="flaticon-cleaning"></i></div>
                                    <h3 class="service-card-title">Maid Service</h3>
                                    <p class="service-card-desc">Professional domestic maids to manage your daily home routines including deep dusting, sweeping, mopping, utensil washing, and laundry chores.</p>
                                    <a href="maid-service.php" class="service-card-btn">Learn More & Book <i class="flaticon-enter"></i></a>
                                </div>

                                <!-- Cook Service -->
                                <div class="service-card-item" onclick="location.href='cook-service.php';">
                                    <div class="service-icon-box"><i class="flaticon-pot"></i></div>
                                    <h3 class="service-card-title">Cook Service</h3>
                                    <p class="service-card-desc">Enjoy delicious, hygienic home-style food prepared in your kitchen. Options available for general home cooks and pure vegetarian brahmin cook specialists.</p>
                                    <a href="cook-service.php" class="service-card-btn">Learn More & Book <i class="flaticon-enter"></i></a>
                                </div>

                                <!-- Babysitter & Nanny -->
                                <div class="service-card-item" onclick="location.href='babysitter-nanny-service.php';">
                                    <div class="service-icon-box"><i class="flaticon-boy"></i></div>
                                    <h3 class="service-card-title">Babysitter & Nanny</h3>
                                    <p class="service-card-desc">Warm, experienced child care assistants. Trusted nanny service for newborn baby care, toddler babysitting, and child companions.</p>
                                    <a href="babysitter-nanny-service.php" class="service-card-btn">Learn More & Book <i class="flaticon-enter"></i></a>
                                </div>

                                <!-- Elderly Care -->
                                <div class="service-card-item" onclick="location.href='elderly-care-service.php';">
                                    <div class="service-icon-box"><img src="../assets/old-man.png" style="width: 25px; height: 25px; filter: invert(53%) sepia(85%) saturate(1455%) hue-rotate(1deg) brightness(102%) contrast(101%);" alt="Elderly Care Icon"></div>
                                    <h3 class="service-card-title">Elderly Care</h3>
                                    <p class="service-card-desc">Compassionate and patient care for senior family members. Assistance with daily routines, mobility, and medical tracking companionship.</p>
                                    <a href="elderly-care-service.php" class="service-card-btn">Learn More & Book <i class="flaticon-enter"></i></a>
                                </div>

                                <!-- Driver Service -->
                                <div class="service-card-item" onclick="location.href='driver-service.php';">
                                    <div class="service-icon-box"><img src="../assets/person.png" style="width: 25px; height: 25px; filter: invert(53%) sepia(85%) saturate(1455%) hue-rotate(1deg) brightness(102%) contrast(101%);" alt="Driver Icon"></div>
                                    <h3 class="service-card-title">Driver Service</h3>
                                    <p class="service-card-desc">Experienced and licensed private chauffeurs for your personal cars. Perfect for business travels, daily commutes, or outstation tours.</p>
                                    <a href="driver-service.php" class="service-card-btn">Learn More & Book <i class="flaticon-enter"></i></a>
                                </div>

                                <!-- Security Guard / Watchman -->
                                <div class="service-card-item" onclick="location.href='watchman-security-guard-service.php';">
                                    <div class="service-icon-box"><img src="../assets/person.png" style="width: 25px; height: 25px; filter: invert(53%) sepia(85%) saturate(1455%) hue-rotate(1deg) brightness(102%) contrast(101%);" alt="Security Guard Icon"></div>
                                    <h3 class="service-card-title">Watchman & Security Guard</h3>
                                    <p class="service-card-desc">Trained and background-verified watchmen and security personnel to safeguard residential apartments, bungalows, and offices.</p>
                                    <a href="watchman-security-guard-service.php" class="service-card-btn">Learn More & Book <i class="flaticon-enter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2: Booking Form -->
                    <div class="col-lg-4 mb-40">
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
