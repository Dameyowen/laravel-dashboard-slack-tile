# Slack messages tile

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor/:package_name)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:vendor/:package_name/run-tests?label=tests)](https://github.com/:vendor/:package_name/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor/:package_name)

This tile can be used on [the Laravel Dashboard]https://docs.spatie.be/laravel-dashboard).

It uses the slack messages webhook to listen for new messages 

## Installation

You can install the package via composer:

```bash
composer require enflow/spatie-dashboard-slack-tile
```

## Usage

In your dashboard view you use the `livewire:slack` component.

```html
<x-dashboard>
    <livewire:slack position="d5:d12" />
</x-dashboard>
```

Add or append the following in ```config\dashboard.php``` 
```
'tiles' => [
    'slack' => [
        'user' => 'ABCDEFGH',
        'channels' => [
            'C1234ABCD' => 'channel-name',
        ],
    ],
],
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.