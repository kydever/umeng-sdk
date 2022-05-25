<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\AppTrack;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\Annotation\ParamArray;
use KY\UMeng\Client\APIParam;
use KY\UMeng\UApp\UMengUAppAllAppData;

class UMengAppTrackAppDownload extends APIParam
{
    #[ParamArray(name: UMengUAppAllAppData::class)]
    public array $iist;

    /**
     * @var int 监测单元id
     */
    #[Param]
    public int $unitId;

    /**
     * @var string 监测单元名称
     */
    #[Param]
    public string $mName;

    /**
     * @var string 推广计划名称
     */
    #[Param]
    public string $planName;

    /**
     * @var string 渠道名称
     */
    #[Param]
    public string $chanName;

    /**
     * iOS：IDFA、CAID、IDFV等
     * Android：IMEI、OAID、ANDROID_ID等.
     *
     * @var string 激活类型
     */
    #[Param]
    public string $type;

    /**
     * @var string 设置激活设备id，其中IDFA、IMEI基于原值做md5加密，其他为原值
     */
    #[Param]
    public string $deviceId;

    /**
     * @var string 点击日期：20200116
     */
    #[Param]
    public string $clickDate;

    /**
     * @var string 激活日期：20200116
     */
    #[Param]
    public string $activeDate;
}
