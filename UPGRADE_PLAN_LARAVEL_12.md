# Complete Upgrade Plan: Laravel 12 & Modern UI

This document outlines the step-by-step process to successfully upgrade your project from **Laravel 8** to **Laravel 12** and implement the modern User Interface.

## 🚨 Critical Prerequisite: PHP Upgrade
**Status**: ❌ **Pending**
Your current PHP version is `8.0.30`. Laravel 12 **requires PHP 8.2 or higher**.

### Step 1: Upgrade WAMP Architecture
1.  **Download PHP 8.3/8.4**: Visit the WAMP files repository or use the WampServer "Addon" feature to install **PHP 8.3** (recommended for future-proofing).
2.  **Switch Version**:
    *   Left-click WAMP icon in tray.
    *   Go to **PHP** -> **Version**.
    *   Select **8.3.x**.
3.  **Verify CLI**: Open a new terminal and run:
    ```bash
    php -v
    ```
    *Ensure it says PHP 8.2, 8.3, or 8.4.*

---

## 📦 Step 2: Dependency Upgrade
**Status**: ⚠️ **Ready to Run (After Step 1)**
I have already updated your `composer.json` file to target Laravel 12.

1.  **Stop Local Server**: Press `Ctrl+C` in your terminal running `php artisan serve`.
2.  **Run Update**:
    ```bash
    composer update
    ```
    *If you encounter "dependency errors", you may need to run `composer update --with-all-dependencies`.*

---

## 🛠️ Step 3: Framework Configuration
Laravel major version jumps often require updating config files and service providers.

1.  **Clear Caches**:
    ```bash
    php artisan optimize:clear
    php artisan config:clear
    ```
2.  **Update Application Booting**:
    *   Laravel 11/12 streamlined the application structure (moving strict config to `bootstrap/app.php`). You are likely still using the "Legacy" structure (Kernel.php), which **is supported** in Laravel 12, so no major file deletion is needed yet.
3.  **Check Middleware**:
    *   Verify `app/Http/Kernel.php` for any deprecated middleware.
    *   Ensure `TrustProxies` matches modern standards (updates often needed here).

---

## 🎨 Step 4: Modern User Interface (Completed)
**Status**: ✅ **Implemented for 'Teapost'**

I have created a new modern design system.
*   **Layout**: `resources/views/layouts/modern_store.blade.php`
*   **View**: `resources/views/online_stores/teapost/index_modern.blade.php`
*   **Routing**: Modified `routes/web.php` to serve the modern view for `/teapost`.

**Action Item**:
*   Once the server is running, visit: `http://127.0.0.1:8000/teapost`
*   If satisfied, we can replicate this logic for other stores (`chappan`, `boxpark`, etc.) by creating `index_modern.blade.php` for them and updating routes.

---

## 🗄️ Step 5: Database & Verification
1.  **Run Migrations**:
    ```bash
    php artisan migrate
    ```
2.  **Verify Admin Panel**:
    *   Log in to `/admin` to ensure the upgrade didn't break authentication (Sanctum/Session changes).
3.  **Test Frontend**:
    *   Check all images load (we fixed the `public/` path issue earlier).
    *   Test forms (Slot Booking) to ensure the API endpoints (web3forms) are reachable.

---

## 🏁 Summary Checklist
- [ ] Upgrade WAMP PHP to 8.3
- [ ] Run `composer update`
- [ ] Run `php artisan migrate`
- [ ] Test `/teapost` (Modern UI)
- [ ] Test `/admin` (Backend)
