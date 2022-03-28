<?php

namespace RubenVanErk\TopLoggerPhpSdk\Endpoints;

use RubenVanErk\TopLoggerPhpSdk\HttpClient\Message\ResponseMediator;
use stdClass;

class Users extends Endpoint
{
    /**
     * @throws \Http\Client\Exception
     */
    public function all(): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/users'));
    }

    public function find(int|string $id): stdClass
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/users/' . $id));
    }

    public function stats(int|string $id): stdClass
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/users/' . $id . '/stats'));
    }
}