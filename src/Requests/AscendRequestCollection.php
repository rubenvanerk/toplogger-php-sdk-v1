<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use RubenVanErk\TopLoggerPhpSdk\Data\User;
use RubenVanErk\TopLoggerPhpSdk\Requests\Ascend\ListAscends;
use RubenVanErk\TopLoggerPhpSdk\Requests\User\GetUserRequest;

class AscendRequestCollection extends RequestCollection
{
    public function all(int $userUid, int $gymId): array
    {
        return $this->connector->send(new ListAscends($userUid, $gymId))->dto();
    }
}
