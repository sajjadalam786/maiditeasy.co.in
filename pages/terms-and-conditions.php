<?php
$page_title = "Terms & Conditions | Maid It Easy";
$page_description = "Read the terms and conditions for using Maid It Easy services. Learn about our payment terms, refund policy, and replacement policy.";
$canonical_url = "https://maiditeasy.in/pages/terms-and-conditions.php";
$additional_styles = '
      .policy-card {
          background: #fff;
          border: 1px solid #eef0f3;
          border-left: 4px solid #ff890c;
          border-radius: 8px;
          padding: 30px;
          margin-bottom: 25px;
          box-shadow: 0 4px 10px rgba(0,0,0,0.02);
      }
      .policy-title {
          font-size: 20px;
          font-weight: 800;
          color: #0e0035;
          margin-bottom: 15px;
          text-transform: uppercase;
      }
      .policy-list {
          list-style: none;
          padding-left: 0;
      }
      .policy-list li {
          font-size: 15px;
          line-height: 1.7;
          color: #555;
          margin-bottom: 12px;
          position: relative;
          padding-left: 20px;
      }
      .policy-list li::before {
          content: "•";
          color: #ff890c;
          font-weight: bold;
          font-size: 20px;
          position: absolute;
          left: 0;
          top: -2px;
      }
      .policy-text {
          font-size: 15px;
          line-height: 1.7;
          color: #555;
          margin-bottom: 15px;
      }
';
include '../includes/header.php';
?>
    <main>
        <!-- Banner Image Section -->
        <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="../assets/img/all-type-Maid-services.webp" role="img" aria-label="Terms and conditions banner image">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title">Terms & Conditions</h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="../index.php">Home</a></li>
                                        <li class="trail-item trail-end"><span>Terms & Conditions</span></li>
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
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-12">
                        <div class="tp-service-details">
                            <h1 style="font-size: 32px; font-weight: 800; color: #0e0035; margin-bottom: 30px; text-align: center;">Service Agreement & Policies</h1>
                            
                            <p class="policy-text mb-40" style="text-align: center; max-width: 800px; margin: 0 auto 45px auto;">This agreement governs the use of www.maiditeasy.in and its domestic help services. Please read the clauses carefully before finalizing your helper registration or booking.</p>
                            
                            <!-- Card 1 -->
                            <div class="policy-card">
                                <h3 class="policy-title">1. Acceptance of Terms</h3>
                                <p class="policy-text">By accessing this website or utilizing its services, you unconditionally accept the terms, guidelines, and operating policies set forth in this agreement. Maid It Easy reserves the right to modify these clauses at any time, and your continued usage constitutes active acceptance of such changes.</p>
                            </div>

                            <!-- Card 2 -->
                            <div class="policy-card">
                                <h3 class="policy-title">2. Fee & Payment Terms</h3>
                                <ul class="policy-list">
                                    <li><strong>Payment Formats:</strong> All payments must be made online, by cheque, or via UPI. Appropriate invoices will be generated for every transaction.</li>
                                    <li><strong>Service Charges:</strong> The placement service charge is due immediately upon the helper initiating work for the client.</li>
                                    <li><strong>Direct Hires:</strong> Clients cannot independently hire candidates shared through our platform without completing the service fee. Failing to pay the placement fee while employing candidates shared by us will result in legal actions.</li>
                                    <li><strong>Helper Dignity:</strong> We request clients to judge helpers by their work and treat them with value, without discrimination based on appearance, age, or religion.</li>
                                </ul>
                            </div>

                            <!-- Card 3 -->
                            <div class="policy-card">
                                <h3 class="policy-title">3. Helper Salary Terms</h3>
                                <ul class="policy-list">
                                    <li><strong>Direct Payments:</strong> Salary must be paid directly by the client to the helper. If a helper leaves, the client is responsible for paying them for the exact number of days worked.</li>
                                    <li><strong>Salary Advances:</strong> Giving salary advances is at the client\'s own discretion. Maid It Easy is not responsible for retrieving or adjusting advance salaries if a helper leaves.</li>
                                </ul>
                            </div>

                            <!-- Card 4 -->
                            <div class="policy-card">
                                <h3 class="policy-title">4. Refund Policy</h3>
                                <ul class="policy-list">
                                    <li><strong>Registration Fees:</strong> The registration fee (Rs. 1500/2000/3000) is non-refundable if the customer decides not to participate in interviews after registration.</li>
                                    <li><strong>Fee Return Exception:</strong> Registration fees will only be refunded if Maid It Easy fails to share any helper profiles within 25 working days. Once a profile is shared, no refund requests apply.</li>
                                    <li><strong>Salary Adjustments:</strong> Helper market salaries change over time. If a client refuses to adjust their salary budget to reflect current market rates, replacement matching becomes difficult, and no refunds are granted.</li>
                                    <li><strong>Worker Safety Disclaimers:</strong> Helpers must not be subjected to physical, emotional, or verbal abuse. If a helper leaves due to mistreatment or changes in job roles without prior written approval, no replacements or refunds will be processed.</li>
                                </ul>
                            </div>

                            <!-- Card 5 -->
                            <div class="policy-card">
                                <h3 class="policy-title">5. Replacement Policy</h3>
                                <ul class="policy-list">
                                    <li><strong>Suitable Backups:</strong> We agree to replace candidates with suitable profiles willing to execute the same duties within 15 to 25 working days, depending on candidate availability.</li>
                                    <li><strong>Credit Notes:</strong> If we fail to find a replacement candidate within 25 working days, we will issue a credit note for the full service fee, valid for future bookings.</li>
                                    <li><strong>Salary Clearances:</strong> Clients must clear all salary dues of the previous helper before a replacement candidate is deployed.</li>
                                    <li><strong>Illness or Leave:</strong> If a helper takes temporary leave due to illness or family emergencies, no replacements apply if the helper agrees to return upon recovery. If they fail to return within 7 days, a replacement can be requested.</li>
                                </ul>
                            </div>

                            <!-- Card 6 -->
                            <div class="policy-card">
                                <h3 class="policy-title">6. Terms of Duty & Work Satisfaction</h3>
                                <ul class="policy-list">
                                    <li><strong>Job Scope:</strong> Job descriptions must be outlined before helper placement. Pay cannot be cut, and helpers cannot be forced to perform tasks outside the agreed job scope.</li>
                                    <li><strong>Notice Period:</strong> Clients must give a 15-day notice if they are unhappy with the helper to allow us to search for replacements.</li>
                                    <li><strong>Hiring Conviction:</strong> Date of helper joining might vary due to transport, weather, or medical issues. Service charges apply after candidate finalization via calls and document previews.</li>
                                </ul>
                            </div>

                            <!-- Card 7 -->
                            <div class="policy-card">
                                <h3 class="policy-title">7. Miscellaneous Clauses</h3>
                                <ul class="policy-list" style="margin-bottom: 0;">
                                    <li><strong>Mediation Disclaimer:</strong> Maid It Easy acts as a hiring and vetting aggregator. We do not mediate daily domestic disputes between clients and helpers.</li>
                                    <li><strong>Police Verification:</strong> Background checking and police checks are at the client\'s own discretion and responsibility. The company does not perform police verification.</li>
                                    <li><strong>Service Locations:</strong> Part-time help services are active in Delhi NCR, Chennai, Hyderabad, Mumbai, and Pune.</li>
                                    <li><strong>Manual Cleaning:</strong> Mopping tasks will not be done manually; clients must provide mop sticks.</li>
                                    <li><strong>Jurisdiction:</strong> All dispute solicitations are subject to Telangana Jurisdiction only.</li>
                                </ul>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
include '../includes/footer.php';
?>
