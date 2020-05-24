# Slack messages tile

[![Latest Version on Packagist](https://img.shields.io/packagist/v/enflow/laravel-dashboard-slack-tile.svg?style=flat-square)](https://packagist.org/packages/enflow/laravel-dashboard-slack-tile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/enflow/laravel-dashboard-slack-tile/run-tests?label=tests)](https://github.com/enflow/laravel-dashboard-slack-tile/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/enflow/laravel-dashboard-slack-tile.svg?style=flat-square)](https://packagist.org/packages/enflow/laravel-dashboard-slack-tile)

This tile can be used on [the Laravel Dashboard](https://docs.spatie.be/laravel-dashboard).

It uses the Slack messages webhook to listen for new messages and present them on the dashboard.

## Installation

You can install the package via composer:

```bash
composer require enflow/laravel-dashboard-slack-tile
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
$ composer test
```

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security
If you discover any security related issues, please email michel@enflow.nl instead of using the issue tracker.

## Credits
- [Bart Noordsij](https://github.com/abartn)
- [Michel Bardelmeijer](https://github.com/mbardelmeijer)
- [All Contributors](../../contributors)

## About Enflow
Enflow is a digital creative agency based in Alphen aan den Rijn, Netherlands. We specialize in developing web applications, mobile applications and websites. You can find more info [on our website](https://enflow.nl/en).

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
