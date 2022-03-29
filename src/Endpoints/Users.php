<?php

namespace RubenVanErk\TopLoggerPhpSdk\Endpoints;

use RubenVanErk\TopLoggerPhpSdk\HttpClient\Message\ResponseMediator;
use stdClass;

class Users extends Endpoint
{
    public function all(): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/users' . $this->buildQuery()));
    }

    public function find(int|string $id): stdClass
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/users/' . $id . $this->buildQuery()));
    }

    public function stats(int|string $id): stdClass
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/users/' . $id . '/stats' . $this->buildQuery()));
    }
}