<?php

use RubenVanErk\TopLoggerPhpSdk\TopLogger;

it('actually works', function () {
    $sdk = new TopLogger();

    var_dump($sdk->ascends()->filter(['used' => true, 'user' => ['uid' => '7163205870'], 'climb' => ['gym_id' => 8, 'deleted' => false, 'live' => true]])->get());
});
