<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Util;

class Json
{
    public static function encode(array $data)
    {
        return json_encode($data, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);
    }

    public static function decode(string $json): array
    {
        return json_decode($json, true, flags: JSON_THROW_ON_ERROR);
    }
}
