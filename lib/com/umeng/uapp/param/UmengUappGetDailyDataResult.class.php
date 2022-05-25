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

class UmengUappGetDailyDataResult
{
    private $dailyData;

    private $stdResult;

    private $arrayResult;

    /**
     * @return UmengUappDailyDataInfo
     */
    public function getDailyData()
    {
        return $this->dailyData;
    }

    /**
     * 设置UmengUappDailyDataInfo.
     * @param UmengUappDailyDataInfo $dailyData
     *
     * 此参数必填     */
    public function setDailyData(UmengUappDailyDataInfo $dailyData)
    {
        $this->dailyData = $dailyData;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('dailyData', $this->stdResult)) {
            $dailyDataResult = $this->stdResult->{'dailyData'};
            $this->dailyData = new UmengUappDailyDataInfo();
            $this->dailyData->setStdResult($dailyDataResult);
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('dailyData', $this->arrayResult)) {
            $dailyDataResult = $arrayResult['dailyData'];
            $this->dailyData = new UmengUappDailyDataInfo();
            $this->dailyData->setStdResult($dailyDataResult);
        }
    }
}
