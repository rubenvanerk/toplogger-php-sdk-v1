<?php

namespace RubenVanErk\TopLoggerPhpSdk\Data;

use Illuminate\Support\Str;

abstract class DataObject
{
    public static function cleanData(array $data): array
    {
        return collect($data)
            ->mapWithKeys(fn ($item, $key) => [Str::camel($key) => $item])
            ->toArray();
    }
}