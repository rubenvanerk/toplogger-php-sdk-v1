<?php

namespace RubenVanErk\TopLoggerPhpSdk;

use RubenVanErk\TopLoggerPhpSdk\Plugins\HasJsonParams;
use Sammyjo20\Saloon\Http\SaloonConnector;

class SDK extends SaloonConnector
{
    use HasJsonParams;

    public function defineBaseUrl(): string
    {
        return 'https://api.toplogger.nu/v1';
    }

    public function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
        ];
    }

    public function defaultConfig(): array
    {
        return [
            'timeout' => 120,
        ];
    }
}
