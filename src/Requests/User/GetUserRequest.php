<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests\User;

use RubenVanErk\TopLoggerPhpSdk\Data\User;
use RubenVanErk\TopLoggerPhpSdk\Requests\Request;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;

class GetUserRequest extends Request
{
    use CastsToDto;

    protected ?string $method = Saloon::GET;

    public function defineEndpoint(): string
    {
        return '/users/' . $this->userId;
    }

    public function __construct(
        public int $userId
    ){}

    public function castToDto(SaloonResponse $response): User
    {
        return new User($response->json());
    }
}
