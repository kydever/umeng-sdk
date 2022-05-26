<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengUMiniGetMultiLevelTreeParam extends APIParam
{
    /**
     * @var array [
     *            'dataSourceId'=>' string 数据源id（AppKey）',
     *            ]
     */
    #[Param]
    public array $sdkStdResult;
}
