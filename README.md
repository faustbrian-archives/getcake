# GetCake PHP Client

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/getcake-php-client
```

## Usage

``` php
use BrianFaust\Config;

$client = new BrianFaust\GetCake\Client();
$client->setConfig(new Config([
    'domain' => 'http://f5mlogin.com/',
    'affiliateId' => 'AFFILIATE_ID',
    'apiKey' => 'API_KEY',
]));

try {
    $response = $client->api('Offers')->offerFeed([
        'campaign_name' => '',
        'media_type_category_id' => 0,
        'vertical_category_id' => 0,
        'vertical_id' => 0,
        'offer_status_id' => 0,
        'tag_id' => 0,
        'start_at_row' => 1,
        'row_limit' => 25,
    ]);

    dd($response);
} catch (Exception $e) {
    dd($e);
}
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
