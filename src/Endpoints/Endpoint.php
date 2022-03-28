<?php

namespace RubenVanErk\TopLoggerPhpSdk\Endpoints;

use RubenVanErk\TopLoggerPhpSdk\HttpClient\Message\ResponseMediator;
use RubenVanErk\TopLoggerPhpSdk\TopLogger;
use stdClass;

abstract class Endpoint
{
    protected string $currentUri = '';
    protected array $filters = [];

    public function __construct(protected TopLogger $sdk)
    {
    }

    public function filter(array $filter): Endpoint
    {
        foreach ($filter as $key => $value) {
            $this->filters[$key] = $value;
        }
        return $this;
    }

    public function get(): stdClass|array
    {
        $filters = $this->buildFilter();

        return ResponseMediator::getContent($this->sdk->getHttpClient()->get($this->currentUri . '?json_params=' . $filters));
    }

    protected function buildFilter(): string
    {
        if ($this->filters) {
            return json_encode(['filters' => $this->filters]);
        }
        return '';
    }
}