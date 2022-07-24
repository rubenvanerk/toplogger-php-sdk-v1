<?php

namespace RubenVanErk\TopLoggerPhpSdk\Data;

use Spatie\DataTransferObject\DataTransferObject;

class UserStats extends DataTransferObject
{
    public string $grade;

    public ?int $sessionCount;
}
