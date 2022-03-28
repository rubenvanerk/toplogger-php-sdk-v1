<?php

namespace RubenVanErk\TopLoggerPhpSdk\HttpClient\Message;


use Psr\Http\Message\ResponseInterface;
use stdClass;

final class ResponseMediator
{
    public static function getContent(ResponseInterface $response): array|stdClass
    {
        return json_decode($response->getBody()->getContents(), false);
    }
}