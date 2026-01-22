# X-Error

A clean, customizable, and developer-friendly error page system for Laravel.

X-Error replaces Laravel’s default error pages with a polished UI, optional exception details, and full localization support — while remaining simple and unobtrusive. The default layout is using Tailwind classes.

## 📦 Installation

Install the package via Composer:

```bash
 composer require vkmapps/x-error
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

The package registers a custom exception handler that renders error pages using the x-error views.

During rendering, the following data is passed to the error view:
```bash
return response()->view($view, [
    'code'      => $code,
    'title'     => __("x-error::errors.$code.title"),
    'message'   => __("x-error::errors.$code.message"),
    'color'     => $color,
    'exception' => $exception,
    ], $code);
```

These variables are always available — including when using your own custom layout.

## 🧩 Blade Component

The package registers the following Blade component:
```php
<x-error />
```

This component is automatically available in all views.

## 🎨 Configuration

The configuration file is located at:
```php
config/x-error.php
```

### Layout
You may define a custom layout view.
If set, you must manually include the <x-error /> component.
```php
'layout' => null,
```

Example:
```php
'layout' => 'errors.custom',
```

### Exception Details

Control visibility of exception stack traces.
```php
'exception' => [
    'enabled' => false,
    'title' => 'Exception Details',
    'permission' => null,
],
```
**enabled** – Enable or disable exception output
**title** – Title shown above exception details
**permission** – Permission required to view exceptions (`null` = all authenticated users)

### Colors

By default, all error pages use a neutral color:
```php
'colors' => [
    'default' => 'text-zinc-600 dark:text-white',
],
```

You may optionally define colors per HTTP status code, but this is not required.

### Redirect Button

A redirect button is shown on all error pages except 503.
```php
    'button' => [
    'url' => '/',
    'class' => '...',
    'text' => 'Home',
],
```

> Set url to null to hide the button

## 🌍 Localization

Error titles and messages are fully translatable.

The package resolves translations using:
```php
__("x-error::errors.{code}.title")
__("x-error::errors.{code}.message")
```
Example Translation File
```php
return [
    '404' => [
    'title' => 'Page Not Found',
    'message' => 'The page you are looking for does not exist.',
    ],
];
```

> Translations can be published and overridden as needed.

## 🧪 Custom Layout Example

If you use your own layout, include the component manually or just use your own layout and error styling:

<x-error
    :code="$code"
    :title="$title"
    :message="$message"
    :color="$color"
    :exception="$exception"
/>


> All values are automatically injected by the exception handler into your view.

## 🛡 Best Practices

- Enable exception details only in local or staging

- Keep production error pages minimal

- Use translations for all user-facing text

- Avoid over-styling error states

## 📄 License

This package is open-sourced software licensed under the MIT license.

## ❤️ Contributing
Contributions are welcome!
Fork the repository
Create a feature branch

Submit a pull request

## ⭐ Credits

Created with ❤️ for the Laravel community.
