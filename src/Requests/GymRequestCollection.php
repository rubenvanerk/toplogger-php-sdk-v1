<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use RubenVanErk\TopLoggerPhpSdk\Data\Gym;
use RubenVanErk\TopLoggerPhpSdk\Requests\Gym\GetGymRequest;
use RubenVanErk\TopLoggerPhpSdk\Requests\Gym\ListGymsRequest;
use RubenVanErk\TopLoggerPhpSdk\Requests\Gym\ListRankedUsersRequest;
use Sammyjo20\Saloon\Http\SaloonRequest;

class GymRequestCollection extends RequestCollection
{
    public function get(int $gymId): Gym
    {
        return $this->connector->send(new GetGymRequest($gymId))->dto();
    }

    public function all(): ?array
    {
        return $this->connector->send(new ListGymsRequest())->dto();
    }

    public function rankedUsers(int $gymId): SaloonRequest
    {
        return $this->connector->request(new ListRankedUsersRequest($gymId));
    }
}
