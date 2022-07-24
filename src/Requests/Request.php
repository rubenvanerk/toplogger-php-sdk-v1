<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use RubenVanErk\TopLoggerPhpSdk\SDK;
use Sammyjo20\Saloon\Http\SaloonRequest;

class Request extends SaloonRequest
{
    protected ?string $connector = SDK::class;
}
