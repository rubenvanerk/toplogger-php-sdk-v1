<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use RubenVanErk\TopLoggerPhpSdk\Data\Gym;
use Sammyjo20\Saloon\Http\RequestCollection;

class GymCollection extends RequestCollection
{
    public function get(int $gymId): Gym
    {
        return $this->connector->send(new GetGym($gymId))->dto();
    }
}
