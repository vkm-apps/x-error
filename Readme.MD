# X-Error

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vkm-apps/x-error.svg?style=flat-square)](https://packagist.org/packages/vkm-apps/x-error)
[![Total Downloads](https://img.shields.io/packagist/dt/vkm-apps/x-error.svg?style=flat-square)](https://packagist.org/packages/vkm-apps/x-error)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)


A clean, customizable, and developer-friendly error page system for Laravel.

X-Error replaces Laravel’s default error pages with a polished, fully-responsive UI featuring automatic dark mode, detailed (and secure) exception inspector, and comprehensive localization support — while remaining completely unobtrusive.

---

### 🌐 Available Languages
X-Error comes pre-translated out-of-the-box for **25 languages**:
- 🇸🇦 **Arabic** (`ar`)
- 🇧🇬 **Bulgarian** (`bg`)
- 🇨🇳 **Chinese** (`zh`)
- 🇩🇰 **Danish** (`da`)
- 🇳🇱 **Dutch** (`nl`)
- 🇺🇸/🇬🇧 **English** (`en`)
- 🇫🇮 **Finnish** (`fi`)
- 🇫🇷 **French** (`fr`)
- 🇩🇪 **German** (`de`)
- 🇬🇷 **Greek** (`el`)
- 🇮🇳 **Hindi** (`hi`)
- 🇮🇩 **Indonesian** (`id`)
- 🇮🇹 **Italian** (`it`)
- 🇯🇵 **Japanese** (`ja`)
- 🇰🇷 **Korean** (`ko`)
- 🇳🇴 **Norwegian Bokmål** (`nb`)
- 🇵🇱 **Polish** (`pl`)
- 🇵🇹 **Portuguese** (`pt`)
- 🇷🇴 **Romanian** (`ro`)
- 🇷🇺 **Russian** (`ru`)
- 🇪🇸 **Spanish** (`es`)
- 🇸🇪 **Swedish** (`sv`)
- 🇹🇷 **Turkish** (`tr`)
- 🇺🇦 **Ukrainian** (`uk`)
- 🇻🇳 **Vietnamese** (`vi`)

---

### 💡 Why X-Error?

Laravel is fantastic, but its default error pages can feel plain, hard to translate dynamically, and difficult to customize securely. **X-Error** bridges this gap:

- **Stunning, Responsive UI:** Your users will see a polished, cohesive design (with auto-switching light and dark mode) matching modern web standards instead of generic web pages.
- **Global-First Architecture:** The package automatically detects and translates error titles and messages based on Laravel's active locale.
- **Secure Stack Traces in Production:** Developers often need to see traceback info on staging or production to debug issues quickly. X-Error allows you to enable exception details securely, restricted to authenticated users or specific permission gates (e.g., custom Laravel Gates), while displaying clean, credential-safe minimal info to regular users.
- **Developer-Friendly & Unobtrusive:**
  - Standard debuggers (like Ignition) are fully preserved in `local` development or when `app.debug` is enabled.
  - API and JSON requests automatically bypass X-Error, letting Laravel handle API error responses natively.
- **Total Customization:** Map unique theme colors to specific HTTP status codes, configure redirect actions, or bring your own template utilizing the `<x-vkm-error />` Blade component.

---

## 📋 Requirements

- **PHP:** `^8.1`
- **Laravel (illuminate/support):** `^10.0 | ^11.0 | ^12.0 | ^13.0`

## 📦 Installation

Install the package via Composer:

```bash
composer require vkm-apps/x-error
```

Laravel will automatically discover and register the service provider.

## ⚙️ Publishing Assets

You may publish the package resources as needed.

Publish Configuration
```bash
php artisan vendor:publish --tag="x-error-config"
```

Publish Views (optional)
```bash
php artisan vendor:publish --tag="x-error-views"
```

Publish Translations (optional)
```bash
php artisan vendor:publish --tag="x-error-lang"
```

## 🧠 How It Works

The package registers a custom exception handler that renders error pages using the `x-error` views.

During rendering, the following data is passed to the error view:
```php
return response()->view($view, [
    'code'      => $code,
    'title'     => __("x-error::errors.$code.title"),
    'message'   => __("x-error::errors.$code.message"),
    'color'     => $color,
    'exception' => $exception,
]);
```

These variables are always available — including when using your own custom layout.

## 🧩 Blade Component

The package registers a reusable component that is automatically available in all views:
```html
<x-vkm-error />
```

### Component Props & Slots

You can customize the `<x-vkm-error />` component with the following properties:

| Prop / Slot | Type | Description |
| :--- | :--- | :--- |
| `code` | `string/int` | The HTTP status code (e.g. `404`, `500`). |
| `title` | `string` | The error title. |
| `message` | `string` | The error description message. |
| `color` | `string` | CSS class for text color (e.g. `text-red-500`). |
| `exception` | `Throwable/string` | Exception stack trace to display inside the accordion. |
| `logo` | `Slot` | Custom slot to place a logo/brand image at the top. |
| `button` | `Slot` | Custom slot to override the redirect button. |
| Default Slot | `Slot` | Any custom HTML to append below the error message. |

#### Component Example with Slots
```html
<x-vkm-error :code="$code" :title="$title" :message="$message" :color="$color">
    <!-- Custom Logo Slot -->
    <x-slot:logo>
        <img src="/images/logo.png" alt="My App Logo" class="h-12 mx-auto">
    </x-slot:logo>

    <!-- Custom Button Slot -->
    <x-slot:button>
        <div class="flex justify-center mt-8">
            <a href="/dashboard" class="px-6 py-2 bg-indigo-600 text-white rounded-md">
                Go to Dashboard
            </a>
        </div>
    </x-slot:button>

    <!-- Custom Default Slot Content -->
    <p class="text-xs text-gray-500 mt-4">If you believe this is an error, please contact support.</p>
</x-vkm-error>
```

## 🎨 Configuration

The configuration file is published at `config/x-error.php`.

### Layout
You may define a custom layout view. If set, you must manually include the `<x-vkm-error />` component in your layout file.
```php
'layout' => 'errors.custom', // Set to null to use default package layout
```

### Exception Details
Control visibility of exception stack traces.
```php
'exception' => [
    'enabled' => false, // Set to true to enable stack trace outputs
    'title' => 'Exception Details',
    'permission' => null, // Permission required to view exceptions (null = all authenticated users)
],
```
- **enabled:** Enable or disable exception trace outputs.
- **title:** Title shown above the trace accordion.
- **permission:** An authorization Gate or Permission required to view exceptions. If `null`, all authenticated users can view details.

### Colors
Define colors mapped to HTTP status codes (Tailwind CSS classes recommended).
```php
'colors' => [
    '404' => 'text-blue-600 dark:text-blue-400',
    '500' => 'text-red-600 dark:text-red-400',
    'default' => 'text-zinc-600 dark:text-white',
],
```

### Redirect Button
A redirect button shown on all error pages (except status code 503).
```php
'button' => [
    'url' => '/', // Set to null to hide the button
    'class' => 'px-20 py-2 border border-zinc-400 dark:border-zinc-500 rounded-md ...',
    'text' => 'Home',
],
```

## 🌍 Localization

Error titles and messages are fully translatable. The package resolves translations using:
```php
__("x-error::errors.{code}.title")
__("x-error::errors.{code}.message")
```

Example Translation File Structure (`lang/vendor/x-error/{locale}/errors.php`):
```php
return [
    '404' => [
        'title' => 'Page Not Found',
        'message' => 'The page you are looking for does not exist.',
    ],
];
```
> Translations can be published using the `--tag="x-error-lang"` flag and customized as needed.

## 🧪 Custom Layout Example

If you define a custom layout view in `config/x-error.php` (e.g. `layout => 'errors.custom'`), your layout file (`resources/views/errors/custom.blade.php`) should include the component to render the details:

```html
<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <div class="app-layout">
        <x-vkm-error
            :code="$code"
            :title="$title"
            :message="$message"
            :color="$color"
            :exception="$exception"
        />
    </div>
</body>
</html>
```
> All values are automatically injected by the exception handler into your custom view.

## 🛡 Best Practices

- **Security First:** Enable exception details (`exception.enabled => true`) only in `local`/`staging` environments or restrict them with a robust `permission` check in production.
- **Keep it Clean:** Avoid over-styling error states so critical status information remains easy to read.
- **Localization:** Always check if your supported application locales exist in the package or publish the translations to add them.

## 📄 License

This package is open-sourced software licensed under the [MIT license](LICENSE).

## ⭐ Credits

Created with ❤️ for the Laravel community.
