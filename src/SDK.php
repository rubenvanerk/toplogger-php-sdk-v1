<?php

namespace RubenVanErk\TopLoggerPhpSdk;

use RubenVanErk\TopLoggerPhpSdk\Requests\GymCollection;
use RubenVanErk\TopLoggerPhpSdk\Requests\UserCollection;
use Sammyjo20\Saloon\Http\SaloonConnector;

/**
 * @method UserCollection users
 * @method GymCollection gyms
 */
class SDK extends SaloonConnector
{
    protected array $requests = [
        'users' => UserCollection::class,
        'gyms' => GymCollection::class,
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
