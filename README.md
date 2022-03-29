# toplogger-php-sdk
PHP SDK for the TopLogger API

## Quick examples

```php
use RubenVanErk\TopLoggerPhpSdk\TopLogger;
$sdk = new TopLogger();

// get all gyms
$sdk->gyms()->all();

// find a gym
$sdk->gyms()->find('8');

// get climbs in a gym
$sdk->gyms()->climbs('8')->get();

// filter a request
$sdk->gyms()->climbs('8')->filter(['deleted' => false, 'live' => true])->get();

// find a user
$sdk->users()->find('104045');

// get a user's stats
$sdk->users()->stats('104045');

// get a users's ascends in a certain gym
$sdk->ascends()->filter(['used' => true, 'user' => ['uid' => '7163205870'], 'climb' => ['gym_id' => 8, 'deleted' => false, 'live' => true]])->get();

// include data
$sdk->gyms()->include(['climbs', 'walls'])->find('8');

```