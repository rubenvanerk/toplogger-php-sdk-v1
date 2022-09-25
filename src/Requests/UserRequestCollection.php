<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use RubenVanErk\TopLoggerPhpSdk\Data\User;
use RubenVanErk\TopLoggerPhpSdk\Data\UserStats;
use RubenVanErk\TopLoggerPhpSdk\Requests\User\GetUserRequest;
use RubenVanErk\TopLoggerPhpSdk\Requests\User\GetUserStatsRequest;

class UserRequestCollection extends RequestCollection
{
    public function get(int $userId): User
    {
        return $this->connector->send(new GetUserRequest($userId))->dto();
    }

    public function stats(int $userId): UserStats
    {
        return $this->connector->send(new GetUserStatsRequest($userId))->dto();
    }
}
