<?php

namespace RubenVanErk\TopLoggerPhpSdk\Data;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\DataTransferObject\Attributes\MapTo;
use Spatie\DataTransferObject\Casters\ArrayCaster;
use Spatie\DataTransferObject\DataTransferObject;

class Gym extends DataTransferObject
{
    public string $id;

    #[MapFrom('id_name')]
    #[MapTo('id_name')]
    public string $idName;

    public string $name;

    public ?string $city;

    #[CastWith(ArrayCaster::class, itemType: GymResource::class), MapFrom('gym_resources')]
    public ?array $resources;
}
