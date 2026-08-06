<?php
$page_title = "Maid It Easy | Best & Number One Maid Agency in India";
$page_description = "Book trusted and verified maids, cooks, drivers, babysitters, and elderly care services with Maid It Easy. Professional, reliable, and hassle-free domestic help.";
$canonical_url = "https://maiditeasy.co.in/index.php";
include 'includes/header.php';
?>
      <main>
        <section class="tp-slider-area fix">
          <div class="tp-slider-active swiper-container common-dots">
            <div class="swiper-wrapper">
              <div class="tp-single-slider tp-slider-height d-flex align-items-center swiper-slide" data-background="assets/img/all-type-Maid-services.webp" data-swiper-autoplay="5000">
                <div class="slider-img">
                  <img src="assets/img/all-type-Maid-services.webp" class="img-fluid" alt="Maid It Easy - Domestic Help Services" width="1920" height="600" fetchpriority="high" loading="eager"/>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="tp-slider-wrapper mt-10 position-relative">
                        <div class="tp-slider z-index">
                          <div class="hero-book-now-top mb-20" data-animation="fadeInUp" data-delay=".6s">
                            <a href="pages/contact.php" class="yellow-btn" style="color: #0e0035 !important; font-weight: 800 !important; background-image: linear-gradient(to right, #ffd10c 0%, #ff890c 51%, #ffd10c 100%); padding: 12px 28px; border-radius: 8px; font-size: 16px; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 15px rgba(255,137,12,0.4); text-decoration: none; text-transform: uppercase;">
                              <i class="flaticon-enter"></i> BOOK NOW
                            </a>
                          </div>
                          <h1 class="tp-slider-title mb-25" data-animation="fadeInUp" data-delay=".8s" style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(22px, 5vw, 42px); font-weight: 800; line-height: 1.25; color: #0e0035; max-width: 920px;">
                            Get Verified <span style="color: #ff890c;">Maids, Cooks, Nannies, Caretakers, Drivers</span>, and <span style="color: #ff890c;">Security Guards</span> Sent Right to Your Home.
                          </h1>
                          
                          <p style="color: #555; font-size: 1.1rem; font-weight: 600; margin-bottom: 25px;" data-animation="fadeInUp" data-delay="0.9s">Click below to book trusted domestic helpers instantly:</p>
                           
                          <div class="hero-btn-grid" data-animation="fadeInUp" data-delay="1.1s">
                             <!-- Rule 7: Maid points to maid-service.html -->
                             <a href="services/maid-service.php" class="btn">Maid</a>
                             <a href="services/watchman-security-guard-service.php" class="btn">Watchman/<br>Security Guard</a>
                             <a href="services/cook-service.php" class="btn">Cook</a>
                             <a href="services/driver-service.php" class="btn">Driver</a>
                             <a href="services/babysitter-nanny-service.php" class="btn">Babysitter/ Nanny</a>
                             <a href="services/elderly-care-service.php" class="btn">Elderly Care</a>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <div class="container">  
          <marquee scrollamount="13" onmouseover="this.stop()" onmouseleave="this.start()">
            <button class="btn-2">Hyderabad</button>
            <button class="btn-2">Bangalore</button>
            <button class="btn-2">Mumbai</button>
            <button class="btn-2">Pune</button>
            <button class="btn-2">Chennai</button>
            <button class="btn-2">Vizag</button>
            <button class="btn-2">Vijayawada</button>
            <button class="btn-2">Delhi</button>
            <button class="btn-2">Noida</button>
            <button class="btn-2">Gurgaon</button>
            <button class="btn-2">Ahmedabad</button>
            <button class="btn-2">Indore</button>
            <button class="btn-2">Nagpur</button>
            <button class="btn-2">Chandigarh</button>
          </marquee>
        </div>

        <!-- First Placement: Hero bottom inline inquiry form -->
        <section class="tp-inquiry-inline-one pt-60 pb-60" style="background: #fff;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-12 mb-30">
                        <span style="font-size: 13px; font-weight: 800; color: #ff890c; text-transform: uppercase; letter-spacing: 1.5px; display: block; margin-bottom: 8px;">Premium Domestic Helper Agency</span>
                        <h2 style="font-size: 32px; font-weight: 800; color: #0e0035; margin-bottom: 20px; line-height: 1.2;">Get Verified Domestic Helpers Sent Direct to Your Home</h2>
                        <p style="font-size: 15px; color: #555; line-height: 1.6; margin-bottom: 20px;">Select your service, input your contact details, and our local team will contact you to match you with background-screened maids, cooks, caretakers, and drivers.</p>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 25px;">Whether you need full-time housemaids, experienced home cooks, professional newborn nannies, or personal chauffeurs, we connect you with reliable domestic solutions in Hyderabad, Bangalore, Mumbai, Pune, Chennai, Ahmedabad, and Surat.</p>
                        <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                            <div style="flex: 1 1 200px;">
                                <h4 style="color: #ff890c; font-size: 24px; font-weight: bold; margin: 0;">10,000+</h4>
                                <span style="font-size: 13px; color: #666;">Verified Helpers Onboarded</span>
                            </div>
                            <div style="flex: 1 1 200px;">
                                <h4 style="color: #ff890c; font-size: 24px; font-weight: bold; margin: 0;">Active</h4>
                                <span style="font-size: 13px; color: #666;">Background Screening Support</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <?php 
                        $root_prefix = ''; 
                        include 'includes/short-form.php'; 
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="tp-services-area theme-dark-bg">
          <div class="tp-custom-container">
            <div class="tp-services-bg grey-bg pt-120 pb-90 z-index">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="tp-section-title-wrapper text-center mb-55">
                      <h2 class="tp-section-title">Our Services</h2>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-4 col-sm-6 col-6">
                    <div class="tp-services white-bg mb-30" onclick="location.href='services/maid-service.php';">
                      <div class="tp-services-icon yellow-circle-shape">
                              <i class="flaticon-cleaning"></i>
                      </div>
                      <div class="tp-services-text fix">
                        <h3 class="tp-services-text-title mb-15 hover-theme-color">
                          <a href="services/maid-service.php">Maid</a>
                        </h3>
                        <p class="mb-20">
                          Professional helper to clean your house, sweep/mopping, wash utensils, laundry, and keep rooms immaculate.
                        </p>
                        <div class="tp-services-text-link">
                          <a href="services/maid-service.php"><i class="flaticon-enter"></i> BOOK</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-sm-6 col-6">
                    <div class="tp-services white-bg mb-30" onclick="location.href='services/cook-service.php';">
                      <div class="tp-services-icon yellow-circle-shape">
                             <i class="flaticon-pot"></i>
                      </div>
                      <div class="tp-services-text fix">
                        <h3 class="tp-services-text-title mb-15 hover-theme-color">
                          <a href="services/cook-service.php">Cook</a>
                        </h3>
                        <p class="mb-20">
                          Experienced kitchen cook to prepare delicious, healthy daily meals customized exactly to your family taste.
                        </p>
                        <div class="tp-services-text-link">
                          <a href="services/cook-service.php"><i class="flaticon-enter"></i> BOOK</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-sm-6 col-6">
                    <div class="tp-services white-bg mb-30" onclick="location.href='services/babysitter-nanny-service.php';">
                      <div class="tp-services-icon yellow-circle-shape">
                        <i class="flaticon-boy"></i>
                      </div>
                      <div class="tp-services-text fix">
                        <h3 class="tp-services-text-title mb-15 hover-theme-color">
                          <a href="services/babysitter-nanny-service.php">Babysitter/ Nanny</a>
                        </h3>
                        <p class="mb-20">
                          Experienced child caretakers to ensure safety, nurturing support, and playful engagement for children.
                        </p>
                        <div class="tp-services-text-link">
                          <a href="services/babysitter-nanny-service.php"><i class="flaticon-enter"></i> BOOK</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-sm-6 col-6">
                    <div class="tp-services white-bg mb-30" onclick="location.href='services/elderly-care-service.php';">
                      <div class="tp-services-icon yellow-circle-shape">
                        <i class="fa fa-heartbeat" style="font-size: 44px; color: #0e0035; line-height: 1;"></i>
                      </div>
                      <div class="tp-services-text fix">
                        <h3 class="tp-services-text-title mb-15 hover-theme-color">
                          <a href="services/elderly-care-service.php">Elderly Care</a>
                        </h3>
                        <p class="mb-20">
                          Patient senior caretakers to provide companionship, mobility support, and daily medication monitoring.
                        </p>
                        <div class="tp-services-text-link">
                          <a href="services/elderly-care-service.php"><i class="flaticon-enter"></i> BOOK</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-sm-6 col-6">
                    <div class="tp-services white-bg mb-30" onclick="location.href='services/driver-service.php';">
                      <div class="tp-services-icon yellow-circle-shape">
                        <i class="fa fa-car" style="font-size: 42px; color: #0e0035; line-height: 1;"></i>
                      </div>
                      <div class="tp-services-text fix">
                        <h3 class="tp-services-text-title mb-15 hover-theme-color">
                          <a href="services/driver-service.php">Driver</a>
                        </h3>
                        <p class="mb-20">
                          Safe, background-verified personal drivers for daily city commuting or stress-free outstation travels.
                        </p>
                        <div class="tp-services-text-link">
                          <a href="services/driver-service.php"><i class="flaticon-enter"></i> BOOK</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-sm-6 col-6">
                    <div class="tp-services white-bg mb-30" onclick="location.href='services/watchman-security-guard-service.php';">
                      <div class="tp-services-icon yellow-circle-shape">
                        <i class="fa fa-shield" style="font-size: 44px; color: #0e0035; line-height: 1;"></i>
                      </div>
                      <div class="tp-services-text fix">
                        <h3 class="tp-services-text-title mb-15 hover-theme-color">
                          <a href="services/watchman-security-guard-service.php">Watchman/ Security Guard</a>
                        </h3>
                        <p class="mb-20">
                          Trained compound watchmen and security personnel to safeguard your property and monitor visitor logs.
                        </p>
                        <div class="tp-services-text-link">
                          <a href="services/watchman-security-guard-service.php"><i class="flaticon-enter"></i> BOOK</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="tp-feature-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrapper text-center mb-55">
                            <h2 class="tp-section-title-two color-theme-blue">How does it work?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="tp-feature-three text-center mb-30">
                            <div class="tp-feature-three-icon mb-30">
                                <img src="assets/img/icon/feature-bg.png" class="img-fluid" alt="Maid It Easy Search Feature" width="80" height="80" loading="lazy">
                                <i class="fa fa-search" style="font-size: 30px; color: #ffffff;"></i>
                            </div>
                            <div class="tp-feature-three-text">
                                <h3 class="tp-feature-three-title mb-20"><a href="#">Search</a></h3>
                                <p>You can look for a maid by searching & entering all your requirements & wait for the list of all the available maids in your area. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="tp-feature-three text-center mb-30">
                            <div class="tp-feature-three-icon mb-30">
                                <img src="assets/img/icon/feature-bg.png" class="img-fluid" alt="Maid It Easy Shortlist Feature" width="80" height="80" loading="lazy">
                                <i class="fa fa-users" style="font-size: 30px; color: #ffffff;"></i>
                            </div>
                            <div class="tp-feature-three-text">
                                <h3 class="tp-feature-three-title mb-20"><a href="#">Shortlist & Meet</a></h3>
                                <p>Go through the profiles of all the maids in your area & try shortlisting a few from them as per your needs & schedule a meeting with them. </p>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-xl-4 col-sm-6">
                        <div class="tp-feature-three text-center mb-30">
                            <div class="tp-feature-three-icon mb-30">
                                <img src="assets/img/icon/feature-bg.png" class="img-fluid" alt="Maid It Easy Selection Feature" width="80" height="80" loading="lazy">
                                <i class="flaticon-happy" style="font-size: 30px; color: #ffffff;"></i>
                            </div>
                            <div class="tp-feature-three-text">
                                <h3 class="tp-feature-three-title mb-20"><a href="#">Select & Relax</a></h3>
                                <p>Now, you can finally select your maid and relax while we have already done all their background verification. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="tp-choose-area-three position-relative mt-120 pb-50">
            <div class="tp-choose-area-three-img">
                <img src="assets/img/about/about-img-5.png" alt="Why Choose Maid It Easy Services" width="600" height="500" loading="lazy" class="img-fluid" style="max-width: 100%; height: auto; object-fit: contain;">
            </div>
            <div class="container">
                <div class="row align-items-end justify-content-center">
                    <div class="col-xl-6 text-end d-xl-block d-none">
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="tp-choose-three">
                            <div class="section-title-wrapper mb-25">
                                <h2 class="tp-section-title-two color-theme-blue">Why choose us?</h2>
                            </div>
                            <div class="row mb-10">
                                <div class="col-sm-6 col-6">
                                    <div class="tp-about-service mb-30" style="min-height: 140px;">
                                        <div class="tp-about-service-text">
                                            <h3 class="tp-about-service-text-title mb-10" style="font-size: 15px;"><a href="#">Quick & Easy</a></h3>
                                            <p style="font-size: 12px; line-height: 1.4;">Shortlist based on your criteria, call, and schedule instantly.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="tp-about-service mb-30" style="min-height: 140px;">
                                        <div class="tp-about-service-text">
                                            <h3 class="tp-about-service-text-title mb-10" style="font-size: 15px;"><a href="#">Safe & Verified</a></h3>
                                            <p style="font-size: 12px; line-height: 1.4;">All domestic helpers undergo strict background and document verification.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="tp-about-service mb-30" style="min-height: 140px;">
                                        <div class="tp-about-service-text">
                                            <h3 class="tp-about-service-text-title mb-10" style="font-size: 15px;"><a href="#">Multiple Options</a></h3>
                                            <p style="font-size: 12px; line-height: 1.4;">Explore numerous verified profiles to find the perfect helper match.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="tp-about-service mb-30" style="min-height: 140px;">
                                        <div class="tp-about-service-text">
                                            <h3 class="tp-about-service-text-title mb-10" style="font-size: 15px;"><a href="#">Highly Skilled</a></h3>
                                            <p style="font-size: 12px; line-height: 1.4;">Our helpers are professionally trained by an expert mentoring team.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="tp-about-service mb-30" style="min-height: 140px;">
                                        <div class="tp-about-service-text">
                                            <h3 class="tp-about-service-text-title mb-10" style="font-size: 15px;"><a href="#">Free Replacement</a></h3>
                                            <p style="font-size: 12px; line-height: 1.4;">If the helper leaves within the contract tenure, we replace them immediately.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="tp-about-service mb-30" style="min-height: 140px;">
                                        <div class="tp-about-service-text">
                                            <h3 class="tp-about-service-text-title mb-10" style="font-size: 15px;"><a href="#">Premium Service</a></h3>
                                            <p style="font-size: 12px; line-height: 1.4;">Enjoy unmatched hospitality and reliable customer support services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Second Placement: Bottom Page inline inquiry form -->
        <section class="tp-inquiry-inline-two pt-60 pb-60" style="background: #f8f9fa; border-top: 1px solid #eee;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12 order-lg-1 order-2">
                        <?php 
                        $root_prefix = ''; 
                        include 'includes/short-form.php'; 
                        ?>
                    </div>
                    <div class="col-lg-7 col-12 order-lg-2 order-1 mb-30" style="padding-left: 30px;">
                        <h2 style="font-size: 32px; font-weight: 800; color: #0e0035; margin-bottom: 20px; line-height: 1.2;">Don't Wait! Get Your Custom Pricing Quote Now</h2>
                        <p style="font-size: 15px; color: #555; line-height: 1.6; margin-bottom: 20px;">Get matched with vetted professionals within 48 hours. Our replacement policies safeguard your home routines against sudden absences.</p>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px;">
                            <li style="font-size: 14px; color: #333; font-weight: bold; display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: #ff890c;"></i> Free Standby Replacement Support</li>
                            <li style="font-size: 14px; color: #333; font-weight: bold; display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: #ff890c;"></i> Transparent Pricing & Contract Terms</li>
                            <li style="font-size: 14px; color: #333; font-weight: bold; display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: #ff890c;"></i> Verified Work References & ID Proofs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'includes/faq-section.php'; ?>
      </main>
<?php
include 'includes/footer.php';
?>
