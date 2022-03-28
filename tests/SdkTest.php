<?php

use RubenVanErk\TopLoggerPhpSdk\TopLogger;

it('actually works', function () {
    $sdk = new TopLogger();

    var_dump(count($sdk->gyms()->climbs(8)->filter(['deleted' => false, 'live' => true])->get()));
});
