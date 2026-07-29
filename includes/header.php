<?php
// Calculate the relative path prefix to the root directory dynamically based on current script location
$root_prefix = '';
$request_uri = $_SERVER['PHP_SELF'];
if (strpos($request_uri, '/pages/') !== false || strpos($request_uri, '/services/') !== false || strpos($request_uri, '/Policies/') !== false) {
    $root_prefix = '../';
}

// Initialize dynamic SEO variables if not set
if (!isset($page_title)) {
    $page_title = "Maid It Easy | Best & Number One Maid Agency in India";
}
if (!isset($page_description)) {
    $page_description = "Book trusted and verified maids, cooks, drivers, babysitters, and elderly care services with Maid It Easy. Professional, reliable, and hassle-free domestic help.";
}
if (!isset($canonical_url)) {
    $canonical_url = "https://maiditeasy.co.in" . $_SERVER['REQUEST_URI'];
}
$current_page = basename($_SERVER['PHP_SELF']);
require_once __DIR__ . '/contacts_config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WFZPZC2X');</script>
      <!-- End Google Tag Manager -->

      <!-- Google tag (gtag.js) - Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-CVM7MFBVX0"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-CVM7MFBVX0');
      </script>

      <!-- Microsoft Clarity -->
      <script type="text/javascript">
          (function(c,l,a,r,i,t,y){
              c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
              t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
              y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
          })(window, document, "clarity", "script", "wzpg6bhgfq");
      </script>
      <!-- End Microsoft Clarity -->

      <!-- Technical SEO: Meta Tags & Canonical URLs -->
      <meta charset="utf-8" /> 
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title><?php echo htmlspecialchars($page_title); ?></title>
      <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>" />
      <?php if (isset($meta_robots)): ?>
      <meta name="robots" content="<?php echo htmlspecialchars($meta_robots); ?>" />
      <?php else: ?>
      <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
      <?php endif; ?>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link class="canonical-link" rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>" />

      <!-- Typography Font -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

      <?php if (isset($additional_head)) { echo $additional_head; } ?>

      <!-- Technical SEO: Schema Markup -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@graph": [
          {
            "@type": "LocalBusiness",
            "@id": "https://maiditeasy.co.in/#organization",
            "name": "Maid It Easy",
            "image": "https://maiditeasy.co.in/assets/img/logo/logo-blue.png",
            "logo": "https://maiditeasy.co.in/assets/img/logo/logo-blue.png",
            "url": "https://maiditeasy.co.in/",
            "telephone": "<?php echo $SITE_PHONE_DISPLAY; ?>",
            "priceRange": "₹₹",
            "address": {
              "@type": "PostalAddress",
              "streetAddress": "2ND FLOOR, PLOT NO 2, SECTOR 1 SY NO 64, Huda Techno Enclave, Madhapur",
              "addressLocality": "Hyderabad",
              "addressRegion": "Telangana",
              "postalCode": "500081",
              "addressCountry": "IN"
            },
            "geo": {
              "@type": "GeoCoordinates",
              "latitude": 17.4483,
              "longitude": 78.3915
            },
            "areaServed": [
              "Hyderabad", "Bangalore", "Mumbai", "Pune", "Chennai", "Delhi NCR", "Ahmedabad"
            ],
            "description": "Get verified maids, cooks, nannies, caretakers, drivers, and security guards sent right to your home. Verified domestic helper agency."
          },
          {
            "@type": "WebSite",
            "@id": "https://maiditeasy.co.in/#website",
            "url": "https://maiditeasy.co.in/",
            "name": "Maid It Easy",
            "description": "Professional Domestic Helper Aggregation Agency",
            "publisher": {
              "@id": "https://maiditeasy.co.in/#organization"
            }
          }
        ]
      }
      </script>

      <link rel="manifest" href="<?php echo $root_prefix; ?>site.webmanifest" />
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo $root_prefix; ?>assets/favicon.png" />
      <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/custom-animation.css" />
      <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/fontawesome.min.css" />
      <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/meanmenu.css" />
      <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/magnific-popup.css" />
      <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/flaticon.css" />
      <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/venobox.min.css" />
      <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/swiper-bundle.css" />
      <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/default.css" />
      <link rel="stylesheet" href="<?php echo $root_prefix; ?>assets/css/main.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

      <style>
      /* Pill Active State Styling and Spacing Adjustments */
      .tp-main-menu ul li {
          margin-right: 10px !important;
      }
       .tp-main-menu ul li a:not(.yellow-btn) {
          position: relative !important;
          transition: all 0.3s ease-in-out !important;
          padding: 6px 12px !important;
          border-radius: 20px !important;
          font-size: 14px !important;
      }
      .tp-main-menu ul li a.active:not(.yellow-btn),
      .tp-main-menu ul li a:hover:not(.yellow-btn) {
          background-color: #fff9e6 !important;
          color: #ff890c !important;
      }
      .tp-main-menu ul li a.yellow-btn {
          padding: 13px 25px !important;
          border-radius: 5px !important;
          font-size: 14px !important;
          font-weight: 700 !important;
          line-height: 1.2 !important;
          display: inline-flex !important;
          align-items: center !important;
          gap: 6px !important;
          height: auto !important;
      }
      .tp-main-menu ul li a::after {
          display: none !important;
      }
      .tp-services {
          cursor: pointer;
          display: flex;
          flex-direction: column;
          height: calc(100% - 30px);
      }
      .tp-services-text {
          display: flex;
          flex-direction: column;
          flex-grow: 1;
      }
      .tp-services-text p {
          flex-grow: 1;
          min-height: 80px;
      }
      @media (max-width: 575px) {
          .tp-services {
              padding: 15px 10px !important;
              height: calc(100% - 15px) !important;
              margin-bottom: 15px !important;
          }
          .tp-services-text-title {
              font-size: 14px !important;
              min-height: auto !important;
              margin-bottom: 8px !important;
          }
          .tp-services-text p {
              font-size: 11px !important;
              margin-bottom: 10px !important;
              line-height: 1.4 !important;
              min-height: 65px !important;
          }
          .tp-services-icon {
              width: 45px !important;
              height: 45px !important;
              line-height: 45px !important;
              font-size: 18px !important;
              margin-bottom: 12px !important;
          }
          .tp-services-icon img {
              width: 22px !important;
              height: 22px !important;
          }
      }

      .float {
          position:fixed;
          width:60px;
          height:60px;
          bottom:120px;
          right:10px;
          background-color:#25d366;
          color:#FFF;
          border-radius:50px;
          text-align:center;
          font-size:35px; /* Larger icon */
          box-shadow: 2px 2px 3px #999;
          z-index:100;
          display: flex !important;
          align-items: center !important;
          justify-content: center !important;
          text-decoration: none;
      }
      .float:hover { color: #FFF; }
      .float i {
          margin: 0 !important;
          padding: 0 !important;
          line-height: 1 !important;
      }
      
      /* NEAT GRID LAYOUT FOR EXACTLY IDENTICAL BUTTON SIZES & BIGGER TEXT */
      .hero-btn-grid {
          display: grid;
          grid-template-columns: repeat(3, 1fr); /* 3 Equal Columns */
          grid-auto-rows: 1fr; /* Forces all rows to be exactly the same height */
          gap: 12px; /* Uniform spacing */
          max-width: 520px; /* Prevents overlapping the image on desktop */
          margin-top: 20px;
      }
      .hero-btn-grid .btn {
          margin: 0; 
          padding: 10px 5px;
          text-align: center;
          border-radius: 8px;
          color: white;
          background-image: linear-gradient(to right, #ffd10c 0%, #ff890c 51%, #ffd10c 100%);
          background-size: 200% auto;
          font-size: 16px; /* BIGGER TEXT */
          font-weight: 600; /* BOLDER TEXT for better visibility */
          transition: 0.5s;
          display: flex;
          align-items: center;
          justify-content: center;
          line-height: 1.3;
          width: 100%;
          height: 100%; /* Stretches the button vertically to fill the forced row height */
          min-height: 70px; /* Taller baseline height to fit larger text cleanly */
      }
      .hero-btn-grid .btn:hover {
          background-position: right center;
          color: #0e0035; 
      }
      
      /* STRICT MOBILE RESPONSIVENESS - GUARANTEED TO FIT */
      @media (max-width: 767px) {
          .hero-btn-grid {
              grid-template-columns: repeat(2, 1fr); /* Stacks into 2 columns on mobile/tablets */
              max-width: 100%; /* Allows it to use the full phone width safely */
              gap: 10px;
          }
          .hero-btn-grid .btn {
              font-size: 14px; /* Scales down slightly to prevent words from breaking out of boxes */
              min-height: 60px;
              padding: 8px 4px;
          }
      }
      
      @media (max-width: 400px) {
          .hero-btn-grid {
              gap: 8px; /* Tighter gaps for very small phone screens */
          }
          .hero-btn-grid .btn {
              font-size: 12px; /* Extra safety for very narrow devices like iPhone SE */
              min-height: 55px;
          }
      }

      /* Base button styling for Marquee */
      .btn-2 {
          background-image: linear-gradient(to right, #0e0035 0%, #270f6a 51%, #0e0035 100%);
          padding: 15px;
          margin: 10px;
          border-radius: 10px;
          color: white;
          transition: 0.5s;
          background-size: 200% auto;
      }
      .btn-2:hover {
          background-position: right center;
      }

      /* Bulletproof Centering for CTA Icons */
      .tp-contact-cta-inner-icon {
          display: flex !important;
          align-items: center !important;
          justify-content: center !important;
      }
      .tp-contact-cta-inner-icon a,
      .tp-contact-cta-inner-icon i,
      .tp-contact-cta-inner-icon .fab.fa-whatsapp,
      .tp-contact-cta-inner-icon .flaticon-email-1 {
          display: flex !important;
          align-items: center !important;
          justify-content: center !important;
          position: static !important;
          top: auto !important;
          margin: 0 !important;
          padding: 0 !important;
          line-height: 1 !important;
          width: 100%;
          height: 100%;
      }
      
      /* Footer Social Icons */
      .tp-footer-info-social-three a {
          display: inline-flex !important;
          align-items: center !important;
          justify-content: center !important;
          text-decoration: none;
      }
      .tp-footer-info-social-three .fab {
          position: static !important;
          top: auto !important;
          margin: 0 !important;
          line-height: 1 !important;
      }

      /* Fixed Height for Service Tiles ensuring Watchman tile matches others */
      .tp-services-text-title {
          min-height: 55px;
          display: flex;
          align-items: center;
      }

      /* Banner Overlay to improve text contrast */
      .tp-page-title-area {
          position: relative;
      }
      .tp-page-title-area::before {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(255, 255, 255, 0.7) !important;
          z-index: 1;
      }
      .tp-page-title-area .tp-custom-container {
          position: relative;
          z-index: 2;
      }
      </style>
      <?php if (isset($additional_styles)) { echo '<style>' . $additional_styles . '</style>'; } ?>
  </head>

  <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFZPZC2X"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      
      <a href="https://api.whatsapp.com/send?phone=<?php echo $SITE_WHATSAPP_RAW; ?>&text=Hello.%20I%20want%20to%20book%20a%20service!" class="float" target="_blank">
        <i class="fab fa-whatsapp"></i>
      </a>
      <a href="tel:<?php echo $SITE_PHONE_RAW; ?>" style="position:fixed;width:60px;height:60px;bottom:50px;right:10px;background-color:#007bff;color:#FFF;border-radius:50px;text-align:center;font-size:28px;box-shadow:2px 2px 3px #999;z-index:100;display:flex;align-items:center;justify-content:center;text-decoration:none;" aria-label="Call Us"><img src="<?php echo $root_prefix; ?>assets/img/call.png" width="30" height="30" style="width:30px;height:30px;filter:brightness(0) invert(1);" alt="Call Icon"></a>
      
      <header>
      <div class="tp-header-area-three header-sticky">
              <div class="tp-custom-container">
                  <div class="row justify-content-xl-center align-items-center">
                      <div class="col-xxl-2 col-xl-3 col-8">
                          <div class="tp-header-logo-three">
                              <a href="<?php echo $root_prefix; ?>index.php"><img src="<?php echo $root_prefix; ?>assets/img/logo/logo-blue.png" width="180" height="55" class="img-fluid" alt="Maid It Easy Logo"></a>
                          </div>
                      </div>
                      <div class="col-xxl-6 col-xl-6 col-4">
                          <div class="tp-main-menu tp-main-menu-three">
                              <nav id="tp-mobile-menu">
                                  <ul>
                                      <li class="menu-item-has-children"><a href="<?php echo $root_prefix; ?>index.php" class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>">Home</a></li>
                                      <li class="menu-item-has-children"><a href="<?php echo $root_prefix; ?>pages/about.php" class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About</a></li>
                                      <li class="menu-item-has-children"><a href="<?php echo $root_prefix; ?>services/maids-cooks-babysitter-nanny-driver-watchman-service.php" class="<?php echo ($current_page == 'maids-cooks-babysitter-nanny-driver-watchman-service.php') ? 'active' : ''; ?>">Services</a></li>
                                      
                                      <li class="menu-item-has-children"><a href="<?php echo $root_prefix; ?>pages/blogs.php" class="<?php echo ($current_page == 'blogs.php') ? 'active' : ''; ?>">Blogs</a></li>
                                      <li><a href="<?php echo $root_prefix; ?>pages/contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact Us</a></li>
                                      <li class="menu-item-has-children" style="margin-left: 5px;"><a href="tel:<?php echo $SITE_PHONE_RAW; ?>" class="yellow-btn" style="color: #0e0035 !important; font-weight: bold; border-radius: 6px !important; padding: 8px 15px !important; font-size: 13px !important; display: inline-flex; align-items: center; gap: 5px; height: auto; line-height: 1.2;"><i class="fas fa-phone-alt"></i> <?php echo $SITE_PHONE_DISPLAY; ?></a></li>
                                  </ul>
                              </nav>
                          </div>
                          <div class="side-menu-icon d-xl-none text-end">
                              <button class="side-toggle"><i class="far fa-bars"></i></button>
                          </div>
                      </div>
                      <div class="col-xxl-4 col-xl-3 d-none d-xl-block">
                          <div class="tp-header-right-three">
                              <div class="tp-header-number-three">
                                  <span><img src="<?php echo $root_prefix; ?>assets/img/call.png" width="20" height="20" alt="Call Icon">&nbsp;<a href="tel:<?php echo $SITE_PHONE_RAW; ?>"><?php echo $SITE_PHONE_DISPLAY; ?></a></span>
                              </div>
                              <div class="tp-header-btn-three">
                                  <a href="javascript:void(0);" class="yellow-btn book-now-trigger"><i class="flaticon-enter"></i> BOOK NOW</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>

      <div class="fix">
        <div class="side-info">
          <button class="side-info-close"><i class="fal fa-times"></i></button>
          <div class="side-info-content">
            <div class="tp-mobile-menu"></div>
            <div class="contact-infos mb-30">
              <div class="contact-list mb-30">
                <h4>Contact Info</h4>
                <ul>
                  <li><i class="flaticon-email"></i><a href="mailto:<?php echo $SITE_EMAIL; ?>"><?php echo $SITE_EMAIL; ?></a></li>
                  <li><i class="flaticon-phone-call"></i><a href="tel:<?php echo $SITE_PHONE_RAW; ?>"><?php echo $SITE_PHONE_DISPLAY; ?></a></li>
                </ul>
                <div class="sidebar__menu--social">
                    <a href="https://www.facebook.com/Maid-It-Easy-102856618723539"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/company/maid-it-easy/about/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/maidit_easy/"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/<?php echo $SITE_WHATSAPP_RAW; ?>"><i class="fab fa-whatsapp"></i></a>
                </div>
              </div>   
              <div class="tp-header-btn-three">
                  <a href="javascript:void(0);" class="yellow-btn book-now-trigger"><i class="flaticon-enter"></i> BOOK NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="offcanvas-overlay"></div>

      <!-- Global Custom Booking Modal -->
      <div id="bookingModal" style="display: none; position: fixed; z-index: 99999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.5); align-items: center; justify-content: center; backdrop-filter: blur(4px); padding: 10px;">
          <div style="background-color: #fff; border-radius: 12px; width: 95%; max-width: 480px; padding: 18px 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); position: relative; max-height: 90vh; overflow-y: auto; margin: auto;">
              <span class="close-booking-modal" style="position: absolute; right: 15px; top: 12px; font-size: 24px; font-weight: bold; cursor: pointer; color: #333; line-height: 1;">&times;</span>
              <h3 style="font-size: 18px; font-weight: bold; color: #0e0035; margin-bottom: 12px; text-align: center;">Book Your Helper</h3>
              <?php include __DIR__ . '/booking-form.php'; ?>
          </div>
      </div>
