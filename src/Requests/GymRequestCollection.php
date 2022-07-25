<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use RubenVanErk\TopLoggerPhpSdk\Data\Gym;
use RubenVanErk\TopLoggerPhpSdk\Requests\Gym\GetGymRequest;
use RubenVanErk\TopLoggerPhpSdk\Requests\Gym\ListGymsRequest;

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
}
