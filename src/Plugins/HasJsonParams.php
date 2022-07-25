<?php

namespace RubenVanErk\TopLoggerPhpSdk\Plugins;

use Sammyjo20\Saloon\Http\SaloonRequest;

trait HasJsonParams
{
    protected array $jsonParams = [];

    public function bootHasJsonParams(SaloonRequest $request): void
    {
        if ($this->jsonParams) {
            $request->addQuery('json_params', json_encode($this->jsonParams));
        }
    }

    public function setIncludes(array $includes): static
    {
        $this->jsonParams['includes'] = $includes;

        return $this;
    }

    public function mergeIncludes(array $includes): static
    {
        $this->jsonParams['includes'] = array_merge($this->jsonParams['includes'], $includes);

        return $this;
    }

    public function addInclude(string $include): static
    {
        $this->jsonParams['includes'][] = $include;

        return $this;
    }

    public function getIncludes(): array
    {
        return $this->jsonParams['includes'];
    }

    public function setFilters(array $filters): static
    {
        $this->jsonParams['filters'] = $filters;

        return $this;
    }

    public function mergeFilters(array $filters): static
    {
        $this->jsonParams['filters'] = array_merge($this->jsonParams['filters'], $filters);

        return $this;
    }

    public function addFilter(string $key, array|string $value): static
    {
        $this->jsonParams['filters'][$key] = $value;

        return $this;
    }

    public function getFilters(): array
    {
        return $this->jsonParams['filters'];
    }
}
