<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use RubenVanErk\TopLoggerPhpSdk\Plugins\HasJsonParams;
use RubenVanErk\TopLoggerPhpSdk\SDK;
use Sammyjo20\Saloon\Http\SaloonRequest;

class Request extends SaloonRequest
{
    use HasJsonParams;

    protected ?string $connector = SDK::class;
}
