# Rental Application Portal — TODO Plan (Phased)

## Phase A — App foundation (routes + app skeleton)

1. Create controllers:
    - `HomeController`
    - `ApplicationController`
    - `Admin/ApplicationController` (as requested by spec)
2. Update `routes/web.php` to remove the inline `/` closure.
3. Add routes:
    - `GET /` -> landing page
    - `GET /apply` -> rental application form
    - `POST /apply` -> store submission
    - `GET /success` -> success confirmation page
    - `GET /admin/applications` -> admin list
    - `GET /admin/applications/{id}` -> admin details
4. Ensure CSRF protection via `@csrf` in the form.

## Phase B — Database layer (migration + model)

1. Create `applications` migration with fields as per specification:
    - id
    - full_name, email, phone, address
    - marital_status, children_count
    - occupancy_length, move_in_date
    - pets, smokers_count, ever_evicted, vacating_reason
    - employer_name, occupation, employment_length, monthly_income
    - landlord_name, landlord_phone, next_of_kin, relationship, next_of_kin_phone
    - authorized_check (boolean), information_verified (boolean)
    - created_at, updated_at
2. Create `Application` model:
    - `protected $fillable` for safe mass assignment
    - casts for boolean/date fields
3. Ensure MySQL-friendly column types:
    - booleans for `pets` and `ever_evicted`
    - numeric fields for counts, and decimal for `monthly_income` (or string if required by UX)

## Phase C — Validation layer (robust rules + old input preservation)

1. Create `StoreApplicationRequest`.
2. Add Laravel validation rules aligned to each field.
3. Checkbox handling:
    - `authorized_check` and `information_verified` validated as booleans (0/1)
    - `pets` and `ever_evicted` validated as booleans (0/1)
4. On validation failure:
    - preserve old input automatically
    - return field-specific error messages

## Phase D — UI layer (Blade + Tailwind premium SaaS look)

1. Create layouts:
    - `resources/views/layouts/app.blade.php`
    - `resources/views/layouts/admin.blade.php`
2. Create views:
    - `resources/views/home.blade.php`
    - `resources/views/apply.blade.php`
    - `resources/views/success.blade.php`
    - `resources/views/admin/applications/index.blade.php`
    - `resources/views/admin/applications/show.blade.php`
3. Tailwind styling requirements:
    - clean white background
    - blue accent color
    - soft shadows + rounded inputs
    - mobile-first responsive layout
    - Inter font loaded in layouts

## Phase E — Form UX behaviors

1. Implement submit loading state:
    - disable submit button while posting
    - show spinner or “Submitting…”
2. Provide clear field labels and error text under each field.
3. Use optional Alpine.js:
    - for multi-step wizard UI interactions (if implemented)
    - should be non-essential (server validation still the source of truth)

## Phase F — Admin pages behavior

1. Admin list:
    - table with columns: Full Name, Email, Phone, Date Submitted, View
    - newest first
2. Admin detail view:
    - structured display of all stored fields
3. No editing.
4. No login/auth/roles/approval flow.

## Phase G — Setup + testing checklist

1. Ensure `.env` has MySQL connection configured.
2. Run migrations:
    - `php artisan migrate`
3. Confirm routes:
    - `/` landing
    - `/apply` form loads
    - successful submission redirects to `/success`
    - `/admin/applications` and `.../{id}` show data
4. Validate:
    - validation errors show inline
    - old input preserved
