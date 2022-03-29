<?php

namespace RubenVanErk\TopLoggerPhpSdk\Endpoints;

use stdClass;

class Users extends Endpoint
{
    public function all(): array
    {
        return $this->getJson('/users');
    }

    public function find(int|string $id): stdClass
    {
        return $this->getJson('/users/' . $id);
    }

    public function stats(int|string $id): stdClass
    {
        return $this->getJson('/users/' . $id . '/stats');
    }
}