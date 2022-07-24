# toplogger-php-sdk
PHP SDK for the TopLogger API

## Quick examples

```php
use RubenVanErk\TopLoggerPhpSdk\SDK;
$sdk = new SDK();

// find a gym
$sdk->gyms()->get('8');

// find a user
$sdk->users()->get('104045');
```
