<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\AppTrack;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengAppTrackAppMonitors extends APIParam
{
    /**
     * @var int 单元 ID
     */
    #[Param]
    public int $mid;

    /**
     * @var string 单元名称
     */
    #[Param]
    public string $mName;

    /**
     * @var string 渠道名称
     */
    #[Param]
    public string $chanName;

    /**
     * @var string 下载地址
     */
    #[Param]
    public string $downloadUrl;

    /**
     * @var string 短链地址
     */
    #[Param]
    public string $shortUrl;
}
