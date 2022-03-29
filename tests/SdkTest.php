<?php

use RubenVanErk\TopLoggerPhpSdk\TopLogger;

it('actually works', function () {
    $sdk = new TopLogger();
    expect($sdk->gyms()->include(['holds', 'walls', 'setters'])->find('8'))->dd();
});
