<?php

namespace RubenVanErk\TopLoggerPhpSdk\Data;

use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\DataTransferObject\DataTransferObject;

class Ascend extends DataTransferObject
{
    public int $id;

    #[MapFrom('user_id')]
    public int $userId;

    #[MapFrom('climb_id')]
    public int $climbId;

    public bool $topped;

    #[MapFrom('date_logged')]
    public string $dateLogged;

    public bool $used;

    public int $checks;

    public Climb $climb;
}
