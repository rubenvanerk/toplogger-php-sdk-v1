<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests\Gym;

use RubenVanErk\TopLoggerPhpSdk\Data\Gym;
use RubenVanErk\TopLoggerPhpSdk\Data\User;
use RubenVanErk\TopLoggerPhpSdk\Plugins\HasJsonParams;
use RubenVanErk\TopLoggerPhpSdk\Requests\Request;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;

class ListRankedUsersRequest extends Request
{
    use CastsToDto;

    protected ?string $method = Saloon::GET;

    public function __construct(
        public int $gymId
    ){}

    public function defineEndpoint(): string
    {
        return '/gyms/' . $this->gymId . '/ranked_users';
    }

    public function castToDto(SaloonResponse $response): array
    {
        return array_map(
            fn(array $gym) => new User($gym),
            $response->json()
        );
    }
}
