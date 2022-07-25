# toplogger-php-sdk
PHP SDK for the TopLogger API

## Quick examples

```php
use RubenVanErk\TopLoggerPhpSdk\SDK;
$sdk = new SDK();

// get a gym
$sdk->gyms()->get('8');

// get all gyms
$sdk->gyms()->all()

// find a user
$sdk->users()->get('104045');
```
