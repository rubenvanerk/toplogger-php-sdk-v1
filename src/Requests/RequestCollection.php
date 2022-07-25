<?php

namespace RubenVanErk\TopLoggerPhpSdk\Requests;

use Sammyjo20\Saloon\Http\SaloonConnector;

class RequestCollection extends \Sammyjo20\Saloon\Http\RequestCollection
{
    public SaloonConnector $connector;

    public function setIncludes(array $includes): static
    {
        $this->connector->setIncludes($includes);

        return $this;
    }

    public function mergeIncludes(array $includes): static
    {
        $this->connector->mergeIncludes($includes);

        return $this;
    }

    public function addInclude(string $include): static
    {
        $this->connector->addInclude($include);

        return $this;
    }

    public function getIncludes(): array
    {
        return $this->connector->getIncludes();
    }

    public function setFilters(array $filters): static
    {
        $this->connector->setFilters($filters);

        return $this;
    }

    public function mergeFilters(array $filters): static
    {
        $this->connector->mergeFilters($filters);

        return $this;
    }

    public function addFilter(string $key, string $value): static
    {
        $this->connector->addFilter($key, $value);

        return $this;
    }

    public function getFilters(): array
    {
        return $this->connector->getFilters();
    }
}
