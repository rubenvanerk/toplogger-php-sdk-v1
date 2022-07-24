<?php



it('actually works', function () {
    $sdk = new \RubenVanErk\TopLoggerPhpSdk\SDK();
    var_dump($sdk->gyms()->get(8));die;
});
