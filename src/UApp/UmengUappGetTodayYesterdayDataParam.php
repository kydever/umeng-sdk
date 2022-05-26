<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\Param;

class UmengUappGetTodayYesterdayDataParam
{
    /**
     * @var array SDK结果集
     */
    #[Param]
    public array $sdkStdResult;
}