<?php

namespace RubenVanErk\TopLoggerPhpSdk\Data;

use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\DataTransferObject\DataTransferObject;

class Climb extends DataTransferObject
{
    public int $id;

    public string $grade;

    #[MapFrom('wall_id')]
    public ?int $wallId;

    #[MapFrom('position_y')]
    public string $positionY;

    #[MapFrom('position_x')]
    public string $positionX;

    #[MapFrom('climb_type')]
    public string $climbType;

    #[MapFrom('gym_id')]
    public int $gymId;

    #[MapFrom('hold_id')]
    public int $holdId;

    public bool $live;

    public bool $lived;

    public bool $deleted;

    #[MapFrom('date_live_start')]
    public string $dateLiveStart;

    #[MapFrom('date_live_end')]
    public ?string $dateLiveEnd;

    #[MapFrom('date_deleted')]
    public ?string $dateLiveDeleted;

    #[MapFrom('date_set')]
    public ?string $dateSet;

    #[MapFrom('date_removed')]
    public ?string $dateRemoved;

    #[MapFrom('created_at')]
    public string $createdAt;

    #[MapFrom('nr_of_ascends')]
    public int $nrOfAscends;

    #[MapFrom('average_opinion')]
    public string $averageOpinion;

    #[MapFrom('auto_grade')]
    public bool $autoGrade;

    #[MapFrom('grade_stability')]
    public string $gradeStability;

    #[MapFrom('grade_stability_admin')]
    public string $gradeStabilityAdmin;

    public ?int $zones;

    public bool $renew;
}