<?php

namespace RubenVanErk\TopLoggerPhpSdk\Endpoints;

use RubenVanErk\TopLoggerPhpSdk\HttpClient\Message\ResponseMediator;
use RubenVanErk\TopLoggerPhpSdk\TopLogger;
use stdClass;

abstract class Endpoint
{
    protected string $currentUri = '';
    protected array $filters = [];
    protected array $includes = [];

    public function __construct(protected TopLogger $sdk)
    {
    }

    protected function getJson(string $uri): array|stdClass
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get($uri . $this->buildQuery()));
    }

    public function get(): stdClass|array
    {
        $query = $this->buildQuery();

        return $this->getJson($this->currentUri . $query);
    }

    public function filter(array $filter): Endpoint
    {
        foreach ($filter as $key => $value) {
            $this->filters[$key] = $value;
        }
        return $this;
    }

    public function include(array $include): Endpoint
    {
        foreach ($include as $key => $value) {
            if (!is_numeric($key)) {
                $this->includes[][$key] = $value;
            } else {
                $this->includes[] = $value;
            }
        }
        return $this;
    }

    protected function buildQuery(): string
    {
        if (!$this->filters && !$this->includes) {
            return '';
        }

        return '?json_params=' . $this->buildJsonParams();
    }

    protected function buildJsonParams(): string
    {
        $jsonParams = [];

        if ($this->filters) {
            $jsonParams['filters'] = $this->filters;
        }
        if ($this->includes) {
            $jsonParams['includes'] = $this->includes;
        }

        return json_encode($jsonParams);
    }
}