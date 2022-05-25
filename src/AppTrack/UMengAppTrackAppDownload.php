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

class UMengAppTrackAppDownload extends APIParam
{
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
     * @var int 激活类型
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

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('unitId', $this->arrayResult)) {
            $this->unitId = $arrayResult['unitId'];
        }
        if (array_key_exists('mName', $this->arrayResult)) {
            $this->mName = $arrayResult['mName'];
        }
        if (array_key_exists('planName', $this->arrayResult)) {
            $this->planName = $arrayResult['planName'];
        }
        if (array_key_exists('chanName', $this->arrayResult)) {
            $this->chanName = $arrayResult['chanName'];
        }
        if (array_key_exists('type', $this->arrayResult)) {
            $this->type = $arrayResult['type'];
        }
        if (array_key_exists('deviceId', $this->arrayResult)) {
            $this->deviceId = $arrayResult['deviceId'];
        }
        if (array_key_exists('clickDate', $this->arrayResult)) {
            $this->clickDate = $arrayResult['clickDate'];
        }
        if (array_key_exists('activeDate', $this->arrayResult)) {
            $this->activeDate = $arrayResult['activeDate'];
        }
    }
}
