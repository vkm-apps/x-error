# XError — Beautiful Custom Error Pages for Laravel 12

XError is a Laravel 12–ready package that replaces the default exception handler and provides beautiful, customizable error pages using Blade components and TailwindCSS.

It supports:

✅ Laravel **12+**
✅ Custom layouts
✅ Per‑status‑code Tailwind colors
✅ Translations
✅ Permission‑based exception visibility
✅ A clean `<x-error />` Blade component
✅ Publishable views & translations

---

## 🚀 Installation

```
composer require vkmapps/x-error
```

Laravel will auto‑discover the service provider.

✅ What XError Does
Replaces Laravel’s default exception handler

Renders all HTTP exceptions (404, 403, 419, 429, 500, etc.) using a single clean Blade view

Provides a reusable <x-error /> component

Allows full customization via config/x-error.php

🌍 Supports multilingual error messages for the following languages:
English, Greek, Italian, Spanish, French, German, Portuguese, Bulgarian, Chinese, Russian, Turkish

Allows showing the full exception only to authenticated users with a specific permission

Publish Assets & views using:
```
php artisan vendor:publish
```

🔐 Exception Visibility (Permissions)
XError allows you to show the full exception only to users with a specific permission.

Example:
```
'exception' => [
    'enabled' => true,
    'permission' => 'canViewExceptions',
],
```
This means:

If enabled = false → no one sees the exception

If enabled = true and permission = null → all authenticated users see it

If enabled = true and permission = 'canViewExceptions' → only users with that permission see it

🧩 Blade Component
Use the component directly in your error view:

```
<x-error
    :code="$code"
    :title="$title"
    :message="$message"
    :color="$color"
    :exception="$exception"
/>
```
You can add extra content:

```
<x-error :code="$code">
    <p class="mt-4 text-sm text-gray-600">Additional info here…</p>
</x-error>
```

🎨 Styling
XError uses TailwindCSS classes that you can edit on config/x-error.php

🧱 Custom Layout
If you want to wrap the error component in your own layout:
```
'layout_view' => 'layouts.app',
```
