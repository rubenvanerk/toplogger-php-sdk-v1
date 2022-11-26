<?php

namespace RubenVanErk\TopLoggerPhpSdk\Data;

class UserStats
{
    public function __construct(
        public readonly string $grade,
        public readonly int $gradeCount,
        public readonly int $count,
        public readonly array $topTen,
        public readonly array $user,
    )
    {

    }

    public static function makeFromResponse(array $data): UserStats
    {
        $topTen = array_map(fn (array $climb): UserStatsAscend => UserStatsAscend::makeFromResponse($climb),$data['top_ten']);

        return new UserStats(
            $data['grade'],
            $data['grade_count'],
            $data['count'],
            $topTen,
            $data['user'],
        );
    }
}
