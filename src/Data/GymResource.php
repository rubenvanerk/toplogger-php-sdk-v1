<?php

namespace RubenVanErk\TopLoggerPhpSdk\Data;

use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\DataTransferObject\DataTransferObject;

class GymResource extends DataTransferObject
{
    public int $id;

    #[MapFrom('resource_type')]
    public string $resourceType;

    public string $url;
}
