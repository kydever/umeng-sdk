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

class UmengUappGetYesterdayDataResult
{
    private $yesterdayData;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getYesterdayData()
    {
        return $this->yesterdayData;
    }

    /**
     * 设置.
     * @param UmengUappDailyDataInfo $yesterdayData
     *
     * 此参数必填     */
    public function setYesterdayData(UmengUappDailyDataInfo $yesterdayData)
    {
        $this->yesterdayData = $yesterdayData;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('yesterdayData', $this->stdResult)) {
            $yesterdayDataResult = $this->stdResult->{'yesterdayData'};
            $this->yesterdayData = new UmengUappDailyDataInfo();
            $this->yesterdayData->setStdResult($yesterdayDataResult);
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('yesterdayData', $this->arrayResult)) {
            $yesterdayDataResult = $arrayResult['yesterdayData'];
            $this->yesterdayData = new UmengUappDailyDataInfo();
            $this->yesterdayData->setStdResult($yesterdayDataResult);
        }
    }
}
