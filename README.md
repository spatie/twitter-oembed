# Retrieve tweets with the Twitter oEmbed API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/twitter-oembed.svg?style=flat-square)](https://packagist.org/packages/spatie/twitter-oembed)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/twitter-oembed/run-tests?label=tests)](https://github.com/spatie/twitter-oembed/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/spatie/twitter-oembed/Check%20&%20fix%20styling?label=code%20style)](https://github.com/spatie/twitter-oembed/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/twitter-oembed.svg?style=flat-square)](https://packagist.org/packages/spatie/twitter-oembed)

This is a utility package to retrieve tweets with Twitter's [oEmbed API](https://developer.twitter.com/en/docs/twitter-for-websites/oembed-api). You don't need to set up an account for Twitter's oEmbed API, but it's only able to retrieve a stripped down version of a tweet and its data.

This could be useful to set up a package that embeds Tweets in markdown or emails without using a JavaScript embedder.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/twitter-oembed.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/twitter-oembed)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require spatie/twitter-oembed
```

## Usage

```php
$twitterOEmbed = new Spatie\TwitterOEmbed\TwitterOEmbed();

$url = 'https://twitter.com/AoDespair/status/1173718972103090177';

$tweet = $twitterOEmbed->embed($url);

echo $tweet->url;
// "https://twitter.com/AoDespair/status/1173718972103090177"

echo $tweet->name;
// "David Simon"

echo $tweet->username;
// "@AoDespair"

echo $tweet->html;
// "<p>Have I seen The Wire?</p>"

echo $tweet->date;
// 2019-09-16
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sebastian De Deyne](https://github.com/sebastiandedeyne)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
