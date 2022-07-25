<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests\Ascend;

use RubenVanErk\TopLoggerPhpSdk\Data\Ascend;
use RubenVanErk\TopLoggerPhpSdk\Data\Gym;
use RubenVanErk\TopLoggerPhpSdk\Requests\Request;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;

class ListAscends extends Request
{
    use CastsToDto;

    protected ?string $method = Saloon::GET;

    public function defineEndpoint(): string
    {
        return '/ascends';
    }

    public function __construct(
        public int $userUid,
        public int $gymId
    ){
        $this->addFilter('user', ['uid' => $this->userUid]);
        $this->addFilter('climb', ['gym_id' => $this->gymId]);
    }

    public function castToDto(SaloonResponse $response): array
    {
        return array_map(
            fn(array $gym) => new Ascend($gym),
            $response->json()
        );
    }
}
