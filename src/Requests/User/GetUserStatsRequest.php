<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests\User;

use RubenVanErk\TopLoggerPhpSdk\Data\User;
use RubenVanErk\TopLoggerPhpSdk\Data\UserStats;
use RubenVanErk\TopLoggerPhpSdk\Requests\Request;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;

class GetUserStatsRequest extends Request
{
    use CastsToDto;

    protected ?string $method = Saloon::GET;

    public function __construct(
        public int $userId
    )
    {
    }

    public function defineEndpoint(): string
    {
        return '/users/' . $this->userId . '/stats';
    }

    public function castToDto(SaloonResponse $response): UserStats
    {
        return new UserStats($response->json());
    }
}
