<?php

namespace RubenVanErk\TopLoggerPhpSdk\Endpoints;

use RubenVanErk\TopLoggerPhpSdk\HttpClient\Message\ResponseMediator;
use RubenVanErk\TopLoggerPhpSdk\TopLogger;
use stdClass;

final class Ascends extends Endpoint
{
    public function __construct(TopLogger $sdk)
    {
        $this->currentUri = '/ascends';
        parent::__construct($sdk);
    }

    public function all(): array
    {
        return $this->getJson('/ascends');
    }
}