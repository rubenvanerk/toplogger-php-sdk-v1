<?php

namespace RubenVanErk\TopLoggerPhpSdk\Data;


use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class Ascend extends DataObject
{
    public function __construct(
        public int $id,
        public int $userId,
        public int $climbId,
        public bool $topped,
        public string $dateLogged,
        public bool $used,
        public int $checks,
        public Climb $climb,
    )
    {

    }

    public static function makeFromResponse(array $data)
    {
        $data = self::cleanData($data);

        $data['climb'] = Climb::makeFromResponse($data['climb']);

        return new Ascend(...$data);
    }
}
