<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniGetSceneInfoListParam extends APIParam
{
    /**
     * @var string 数据源id（AppKey）
     */
    public string $dataSourceId;

    /**
     * @var string 场景值类型,活动campaign 渠道channel
     */
    public string $sourceType;
}
