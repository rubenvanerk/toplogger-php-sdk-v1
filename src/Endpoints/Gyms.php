<?php

namespace RubenVanErk\TopLoggerPhpSdk\Endpoints;

use RubenVanErk\TopLoggerPhpSdk\HttpClient\Message\ResponseMediator;
use stdClass;

final class Gyms extends Endpoint
{
    public function all(): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/gyms' . $this->buildQuery()));
    }

    public function find(int|string $id): stdClass
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/gyms/' . $id . $this->buildQuery()));
    }

    public function climbs(int|string $gymId): Endpoint
    {
        $this->currentUri = '/gyms/' . $gymId . '/climbs';
        return $this;
    }
}