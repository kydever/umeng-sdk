<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappDailyDataInfo.class.php';

class UmengUappGetTodayDataResult
{
    private $todayData;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getTodayData()
    {
        return $this->todayData;
    }

    /**
     * 设置.
     * @param UmengUappDailyDataInfo $todayData
     *
     * 此参数必填     */
    public function setTodayData(UmengUappDailyDataInfo $todayData)
    {
        $this->todayData = $todayData;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('todayData', $this->stdResult)) {
            $todayDataResult = $this->stdResult->{'todayData'};
            $this->todayData = new UmengUappDailyDataInfo();
            $this->todayData->setStdResult($todayDataResult);
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('todayData', $this->arrayResult)) {
            $todayDataResult = $arrayResult['todayData'];
            $this->todayData = new UmengUappDailyDataInfo();
            $this->todayData->setStdResult($todayDataResult);
        }
    }
}
