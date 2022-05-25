<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Util;

use Closure;

class Caller
{
    public static function call(Closure $closure): mixed
    {
        return $closure();
    }
}
