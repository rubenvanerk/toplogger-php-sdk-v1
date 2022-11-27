<?php

namespace RubenVanErk\TopLoggerPhpSdk\Data;

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
        public ?Climb $climb = null,
        public readonly ?string $zone = null,
        public readonly ?string $topType = null,
    )
    {

    }

    public static function makeFromResponse(array $data)
    {
        $data = self::cleanData($data);

        if (isset($data['climb'])) {
            $data['climb'] = Climb::makeFromResponse($data['climb']);
        }

        return new Ascend(...$data);
    }
}
