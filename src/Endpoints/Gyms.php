<?php

namespace RubenVanErk\TopLoggerPhpSdk\Endpoints;

use RubenVanErk\TopLoggerPhpSdk\HttpClient\Message\ResponseMediator;
use stdClass;

final class Gyms extends Endpoint
{
    /**
     * @throws \Http\Client\Exception
     */
    public function all(): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/gyms'));
    }

    public function find(int|string $id): stdClass
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/gyms/' . $id));
    }

    public function climbs(int|string $gymId): Endpoint
    {
        $this->currentUri = '/gyms/' . $gymId . '/climbs';
        return $this;
    }
}