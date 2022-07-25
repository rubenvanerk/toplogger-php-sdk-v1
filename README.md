# toplogger-php-sdk
PHP SDK for the TopLogger API

## Quick examples

```php
use RubenVanErk\TopLoggerPhpSdk\SDK;
$sdk = new SDK();

// get a gym
$sdk->gyms()->get(gymId: 8);

// get all gyms
$sdk->gyms()->all()

// find a user
$sdk->users()->get(userId: 104045);

// get ascends by user and gym
$sdk->ascends()->all(userUid: 7163205870, gymId: 8)
```
