# Workspace Customizations & AI Guidelines

Welcome to the **Maid It Easy** codebase. This guide serves as the instructions context for AI agents working on updates, layout tweaks, or API additions to this repository.

## 🏢 Business Context

* **Brand Name:** Maid It Easy
* **Domain:** Professional Domestic Helper Aggregation Agency (vetted maids, cooks, babysitters, nannies, senior caretakers, drivers, watchmen).
* **Target Cities:** Hyderabad, Bangalore, Mumbai, Pune, Chennai, Delhi NCR.
* **Core Offerings:** Background-checked helpers with structural replacement policies.

## 🛠️ Technology Stack & Directory Rules

1. **Framework:** Custom Native PHP template layout.
2. **Pathing:** All assets, partials, and pages must leverage the dynamic `$root_prefix` path helper (e.g. `<?php echo $root_prefix; ?>assets/css/...`) to ensure URLs resolve correctly from subdirectories.
3. **Responsive Grid Layouts:** 
   * Homepage service grid tiles must support a 2-column mobile layout (`col-6`) side-by-side to reduce vertical scroll fatigue.
   * Flex-box column layouts should use min-height matching classes to prevent staggered height displays when descriptions vary in content length.
4. **Credential Security:** 
   * Strictly load API keys, webhook triggers, database handles, and recipient emails from the gitignored `.env` file using the local `get_env_var()` utility.
   * Never hardcode customer or admin email addresses in PHP scripts.

## 🔄 Integrations & Webhooks

* **Booking Lead Processors:** 
  * Lead submissions from `includes/booking-form.php` and the quick lead popup in `includes/footer.php` target `submit-booking.php`.
  * `submit-booking.php` forwards JSON payloads via cURL POST to custom REST APIs, CRM Webhooks, and Google Sheet Apps Script Web Apps (`GOOGLE_SHEET_WEBHOOK_URL`).

## 🎯 Target Workspace Scope
* **Exclusive Target Directory:** All operations, edits, bug fixes, and file creations MUST strictly target only the `/Applications/XAMPP/xamppfiles/htdocs/maiditeasy.co.in` directory.
* Do NOT edit or touch any other workspace directory (e.g. `maiditeasy.in` or `maiditeasy.in-PHP`).

## 💬 Response & Communication Rules
* **No Code Output:** Do NOT respond with full raw code blocks as the final text response. Always execute code modifications directly in the codebase files.
* **Short Table Summaries:** Provide responses as short, clean Markdown table summaries/checklists highlighting what was completed.
