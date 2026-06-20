# MediaSane Website

Official website source code for **MediaSane**, an open-source Ubuntu/Debian cleanup utility.

* * *

## Overview

This repository contains the PHP-powered marketing website for MediaSane. The site provides:

- Product landing page
- Download page
- FAQ section
- Contact page
- Privacy Policy
- Terms of Use
- Legal information
- SEO assets (sitemap, robots.txt, metadata)
- Responsive frontend built with Bootstrap

* * *

## Project Structure

```text
public_html/
├── index.php                # Homepage
├── download.php             # Download page
├── faq.php                  # Frequently Asked Questions
├── contact.php              # Contact form / support page
├── privacy.php              # Privacy policy
├── terms.php                # Terms of use
├── legal.php                # Legal notices
├── 404.php                  # Error page
├── sitemap.xml              # XML sitemap
├── robots.txt               # Search engine rules
├── .htaccess                # Apache configuration
│
├── includes/
│   ├── conf.php             # Global configuration
│   ├── core.php             # Routing and SEO metadata helpers
│   └── recaptcha.php        # reCAPTCHA integration
│
├── parts/
│   ├── header.php           # Shared head section
│   ├── navbar.php           # Navigation component
│   ├── footer.php           # Footer component
│   ├── scripts.php          # JavaScript includes
│   ├── preloader.php        # Loading animation
│   └── cta.php              # Call-to-action section
│
├── assets/
│   ├── stylesheets/
│   ├── javascripts/
│   ├── images/
│   └── fonts/
│
└── uploads/
    ├── logos/
    ├── favicons/
    ├── badges/
    ├── thumbnails/
    └── pages/
```

* * *

## Technology Stack

- PHP
- Bootstrap
- jQuery
- Font Awesome
- Google Analytics (gtag)
- Google reCAPTCHA
- Apache (.htaccess)

* * *

## Configuration

Application settings are stored in:

```php
public_html/includes/conf.php
```

Example:

```php
$conf = [
    'sitename' => 'MediaSane',
    'gtag'     => 'YOUR_GA_ID'
];
```

* * *

## SEO Features

- Dynamic page metadata
- Canonical URLs
- Open Graph support
- XML sitemap
- robots.txt
- Social media thumbnails

SEO metadata is centrally managed through:

```php
public_html/includes/core.php
```

* * *

## Development

Run the project locally using PHP's built-in server:

```bash
php -S localhost:8000
```

Then visit:

```text
http://localhost:8000
```

* * *

## Deployment

Designed for traditional Apache hosting environments using the `public_html` web root.

Deployment steps:

1. Upload contents to your web server.
2. Configure PHP.
3. Verify `.htaccess` rules.
4. Configure Google Analytics and reCAPTCHA keys.
5. Update sitemap and canonical URLs if needed.

* * *

## Assets

The repository includes:

- Product screenshots
- Brand logos
- Favicons
- Compliance badges
- Marketing imagery

* * *

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Make your changes and commit them (`git commit -m "Add your feature"`).
4. Push to your branch (`git push origin feature/your-feature`).
5. Open a pull request with a clear description of your changes.

Ensure your code follows PEP 8 style guidelines and includes appropriate tests.

* * *

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

* * *

## Contact

For any issues, suggestions, or questions regarding the project, please open a new issue on the official GitHub repository or reach out directly to the maintainer through the [GitHub Issues](issues) page for further assistance and follow-up.


## Related Project

MediaSane Application Repository: https://github.com/mediasane/app