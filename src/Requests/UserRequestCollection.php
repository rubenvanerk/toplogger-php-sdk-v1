<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use RubenVanErk\TopLoggerPhpSdk\Data\User;
use RubenVanErk\TopLoggerPhpSdk\Requests\User\GetUserRequest;

class UserRequestCollection extends RequestCollection
{
    public function get(int $userId): User
    {
        return $this->connector->send(new GetUserRequest($userId))->dto();
    }
}
