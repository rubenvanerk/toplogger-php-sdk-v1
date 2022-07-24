<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use RubenVanErk\TopLoggerPhpSdk\Data\Gym;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;

class GetGym extends Request
{
    use CastsToDto;

    protected ?string $method = Saloon::GET;

    public function defineEndpoint(): string
    {
        return '/gyms/' . $this->gymId;
    }

    public function __construct(
        public int $gymId
    ){}

    public function castToDto(SaloonResponse $response): Gym
    {
        return new Gym($response->json());
    }
}