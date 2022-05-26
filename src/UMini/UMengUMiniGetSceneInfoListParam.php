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

class UMengUMiniGetSceneInfoListParam extends APIParam
{
    /**
     * @var array [
     *            'dataSourceId'=>'数据源id（AppKey）',
     *            'sourceType' => '场景值类型,活动campaign 渠道channel'
     *            ]
     */
    #[Param]
    public array $sdkStdResult = [];
}
