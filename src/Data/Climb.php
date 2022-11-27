<?php

namespace RubenVanErk\TopLoggerPhpSdk\Data;

class Climb extends DataObject
{
    public function __construct(
        public readonly int $id,
        public readonly string $grade,
        public readonly string $climbType,
        public readonly bool $suitableForKids,
        public readonly int $gymId,
        public readonly int $holdId,
        public readonly bool $live,
        public readonly bool $lived,
        public readonly bool $deleted,
        public readonly string $dateLiveStart,
        public readonly string $createdAt,
        public readonly int $nrOfAscends,
        public readonly string $averageOpinion,
        public readonly bool $autoGrade,
        public readonly string $gradeStability,
        public readonly string $gradeStabilityAdmin,
        public readonly bool $renew,
        public readonly ?string $positionX = null,
        public readonly ?string $positionY = null,
        public readonly ?int $wallId = null,
        public readonly ?string $name = null,
        public readonly ?string $dateSet = null,
        public readonly ?string $dateLiveEnd = null,
        public readonly ?string $dateRemoved = null,
        public readonly ?string $dateDeleted = null,
        public readonly ?string $number = null,
        public readonly ?int $setterId = null,
        public readonly ?int $ropeNumber = null,
        public readonly ?string $remarks = null,
        public readonly ?int $zones = null,
        public readonly ?int $order = null,
    )
    {

    }

    public static function makeFromResponse(array $data): Climb
    {
        $data = self::cleanData($data);

        return new Climb(...$data);
    }
}