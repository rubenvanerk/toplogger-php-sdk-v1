<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use RubenVanErk\TopLoggerPhpSdk\Data\User;
use Sammyjo20\Saloon\Http\RequestCollection;

class UserCollection extends RequestCollection
{
    public function get(int $userId): User
    {
        return $this->connector->send(new GetUser($userId))->dto();
    }
}
