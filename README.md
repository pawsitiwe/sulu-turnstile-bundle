# Sulu Turnstile Bundle

**Cloudflare Turnstile integration for Sulu FormBundle (fully automatic).**

This bundle is a **wrapper for the [Pixel-Open Cloudflare Turnstile Bundle](https://github.com/Pixel-Open/cloudflare-turnstile-bundle)** and allows you to easily add Turnstile captchas as Dynamic FormFields in Sulu without manually configuring services or XML.

---

## Features

- Adds a **Turnstile Dynamic FormFieldType** automatically.
- Fully compatible with Sulu 2.x.
- No manual project modifications required.
- Installable via `composer require`.
- Field appears automatically in the Sulu Admin.

---

## Installation

### 1. Install the bundle via Composer

```bash
composer require pawsitiwe/sulu-turnstile-bundle
```

### 2. Register the bundle

If Symfony Flex is enabled, it should register automatically in config/bundles.php:

```php
return [
    // ...
    PixelOpen\CloudflareTurnstileBundle\PixelOpenCloudflareTurnstileBundle::class => ['all' => true],
    Pawsitiwe\SuluTurnstileBundle\PawsitiweSuluTurnstileBundle::class => ['all' => true],
];
```

### 3. Add configuration

Add a config file into config/packages/pixel_open_cloudflare_turnstile.yaml :

```yaml
pixel_open_cloudflare_turnstile:
    key: '%env(TURNSTILE_KEY)%'
    secret: '%env(TURNSTILE_SECRET)%'
    enable : true
```

### 4. Add Cloudflare API credentials to your environment variables

Visit Cloudflare to create your site key and secret key and add them to your .env file.

```
TURNSTILE_KEY="1x00000000000000000000AA"
TURNSTILE_SECRET="2x0000000000000000000000000000000AA"
```

### 5. Clear the cache

```bash
bin/console cache:clear
```

## Usage in Sulu Admin
1. After installation, the Turnstile field is automatically available in the Dynamic FormFieldType dropdown.
2. The field can be configured like any other Dynamic FormField.

## Requirements

- PHP 8.1 or higher
- Sulu 2.5 or higher
- [Pixel-Open Cloudflare Turnstile Bundle](https://github.com/Pixel-Open/cloudflare-turnstile-bundle) (installed automatically via Composer)

## Note

This bundle is only a Sulu wrapper for the official Pixel-Open Cloudflare Turnstile Bundle. It handles:
 
- Registration as a Dynamic FormFieldType
- XML field setup
- Easy usage in the Sulu Admin

The actual Captcha logic remains fully handled by the original bundle.

## License

MIT