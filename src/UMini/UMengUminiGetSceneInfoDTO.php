<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUminiGetSceneInfoDTO extends APIParam
{
    /**
     * @var string 推广活动值/渠道值
     */
    public string $code;

    /**
     * @var string 推广活动/渠道中文名称
     */
    public string $name;

    /**
     * @var string 推广活动连接
     */
    public string $url;

    /**
     * @var string 推广活动创建时间
     */
    public string $createDateTime;
}
