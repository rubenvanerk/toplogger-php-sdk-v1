<?php

namespace RubenVanErk\TopLoggerPhpSdk;

use RubenVanErk\TopLoggerPhpSdk\Plugins\HasJsonParams;
use RubenVanErk\TopLoggerPhpSdk\Requests\GymRequestCollection;
use RubenVanErk\TopLoggerPhpSdk\Requests\UserRequestCollection;
use Sammyjo20\Saloon\Http\SaloonConnector;

/**
 * @method UserRequestCollection users
 * @method GymRequestCollection gyms
 */
class SDK extends SaloonConnector
{
    use HasJsonParams;

    protected array $requests = [
        'users' => UserRequestCollection::class,
        'gyms' => GymRequestCollection::class,
    ];

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
            'timeout' => 30,
        ];
    }
}
