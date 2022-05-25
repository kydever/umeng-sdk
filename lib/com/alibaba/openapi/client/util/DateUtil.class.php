<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
class DateUtil
{
    public static function getDateFormatInServer()
    {
        return 'yyyyMMddHHmmssSSSZ';
    }

    public static function getDateFormat()
    {
        return 'YmdHisu';
    }

    public static function parseToString($dateTime)
    {
        if ($dateTime == null) {
            return null;
        }
        return date(DateUtil::getDateFormat(), $dateTime);
    }
}
