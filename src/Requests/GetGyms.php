<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use RubenVanErk\TopLoggerPhpSdk\Data\Gym;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;

class GetGyms extends Request
{
    use CastsToDto;

    protected ?string $method = Saloon::GET;

    public function defineEndpoint(): string
    {
        return '/gyms';
    }

    public function castToDto(SaloonResponse $response): array
    {
        return array_map(
            fn(array $gym) => new Gym($gym),
            $response->json()
        );
    }
}
