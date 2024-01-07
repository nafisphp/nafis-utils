# This is my package nafis-utils

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nafisphp/nafis-utils.svg?style=flat-square)](https://packagist.org/packages/nafisphp/nafis-utils)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/nafisphp/nafis-utils/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/nafisphp/nafis-utils/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/nafisphp/nafis-utils/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/nafisphp/nafis-utils/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nafisphp/nafis-utils.svg?style=flat-square)](https://packagist.org/packages/nafisphp/nafis-utils)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

[//]: # (## Support us)

[//]: # ()
[//]: # ([<img src="https://github-ads.s3.eu-central-1.amazonaws.com/nafis-utils.jpg?t=1" width="419px" />]&#40;https://spatie.be/github-ad-click/nafis-utils&#41;)

[//]: # (We invest a lot of resources into creating [best in class open source packages]&#40;https://spatie.be/open-source&#41;. You can support us by [buying one of our paid products]&#40;https://spatie.be/open-source/support-us&#41;.)

[//]: # ()
[//]: # (We highly appreciate you sending us a postcard from your hometown, mentioning which of our package&#40;s&#41; you are using. You'll find our address on [our contact page]&#40;https://spatie.be/about-us&#41;. We publish all received postcards on [our virtual postcard wall]&#40;https://spatie.be/open-source/postcards&#41;.)

## Installation

You can install the package via composer:

```bash
composer require nafisphp/nafis-utils
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="nafis-utils-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="nafis-utils-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="nafis-utils-views"
```

## Usage

```php
$nafisUtils = new Nafisphp\NafisUtils();
echo $nafisUtils->echoPhrase('Hello, Nafisphp!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [nafisphp](https://github.com/nafisphp)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
