<?php

namespace RubenVanErk\TopLoggerPhpSdk\Classes;

use RubenVanErk\TopLoggerPhpSdk\Data\UserStatsAscend;
use RubenVanErk\TopLoggerPhpSdk\Data\Gym;

class GradeConverter
{
    public readonly string $grade;
    public readonly UserStatsAscend $climb;
    public readonly ?Gym $gym;

    public static function fromGrade(string $grade): GradeConverter
    {
        $converter = new self();
        $converter->grade = $grade;

        return $converter;
    }

    public static function fromClimb(UserStatsAscend $climb, ?Gym $gym = null)
    {
        // TODO: implement
    }

    public function toFont(): string
    {
        $fontGrades = include __DIR__ . '../../../resources/grades_font.php';

//        if ($customGrades) {
//            $customGrade = collect($customGrades)->firstWhere(fn ($customGrade) => $grade == $customGrade->value)?->name;
//            if ($customGrade) {
//                return $customGrade;
//            }
//        }

//        if ($rounded && isset(config('grades.rounded')[$grade])) {
//            return config('grades.rounded')[$grade];
//        }

        if (isset($fontGrades[$this->grade])) {
            return $fontGrades[$this->grade];
        }

        $gradeAsNumber = round((float) $this->grade * 100) / 100;

        $mainGrade = floor($gradeAsNumber);
        $subGrade = $fontGrades['sub_grades'][floor(($gradeAsNumber - $mainGrade) / (1 / 6))] ?? '?';

        return $mainGrade.$subGrade;
    }

    public function getProgress(): int
    {
        $grade = (round((float)$this->grade * 100) / 100);

        $mainGrade = floor($grade);
        $subGradeScore = $grade - $mainGrade;

        return (int) round(fmod($subGradeScore, 1 / 6) / (1 / 6) * 100);
    }
}