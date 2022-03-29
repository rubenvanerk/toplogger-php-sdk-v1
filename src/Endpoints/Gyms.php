<?php

namespace RubenVanErk\TopLoggerPhpSdk\Endpoints;

use stdClass;

final class Gyms extends Endpoint
{
    public function all(): array
    {
        return $this->getJson('/gyms');
    }

    public function find(int|string $id): stdClass
    {
        return $this->getJson('/gyms/' . $id);
    }

    public function climbs(int|string $gymId): Endpoint
    {
        $this->currentUri = '/gyms/' . $gymId . '/climbs';
        return $this;
    }
}