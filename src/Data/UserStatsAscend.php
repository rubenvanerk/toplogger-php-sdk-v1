<?php

namespace RubenVanErk\TopLoggerPhpSdk\Data;

use RubenVanErk\TopLoggerPhpSdk\Classes\GradeConverter;

class UserStatsAscend extends DataObject
{
    public readonly string $gradeFont;

    public function __construct(
        public readonly int $id,
        public readonly int $climbId,
        public readonly string $dateLogged,
        public readonly int $checks,
        public readonly string $gradeAdj,
        public readonly string $grade,
        public readonly ?string $number,
        public readonly string $color,
        public readonly ?string $colorSecondary,
        public readonly string $wallName,
        public readonly ?string $name,
        public readonly ?string $setterName,
        public readonly ?int $wallId = null,
    )
    {
        $this->gradeFont = GradeConverter::fromGrade($this->grade)->toFont();
    }

    public static function makeFromResponse(array $data): UserStatsAscend
    {
        $data = self::cleanData($data);

        return new UserStatsAscend(...$data);
    }
}