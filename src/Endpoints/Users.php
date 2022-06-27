<?php

namespace RubenVanErk\TopLoggerPhpSdk\Endpoints;

use stdClass;

class Users extends Endpoint
{
    public function all(): array
    {
        return $this->get('/users');
    }

    public function find(int|string $id): stdClass
    {
        return $this->get('/users/' . $id);
    }

    public function stats(int|string $id): stdClass
    {
        return $this->get('/users/' . $id . '/stats');
    }

    public function strengthHistory(int|string $id): stdClass
    {
        return $this->get('/users/' . $id . '/strength_history');
    }
}
