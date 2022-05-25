<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappDateCountInfo extends SDKDomain
{
    private $dates;

    private $data;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 统计日期数组
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * 设置统计日期数组.
     * @param array include @see String[] $dates
     * 参数示例：<pre>"2018-01-01","2018-01-02"</pre>
     * 此参数必填     */
    public function setDates($dates)
    {
        $this->dates = $dates;
    }

    /**
     * @return 统计数据数组
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 设置统计数据数组.
     * @param array include @see Integer[] $data
     * 参数示例：<pre>1234,5678</pre>
     * 此参数必填     */
    public function setData($data)
    {
        $this->data = $data;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('dates', $this->stdResult)) {
            $this->dates = $this->stdResult->{'dates'};
        }
        if (array_key_exists('data', $this->stdResult)) {
            $this->data = $this->stdResult->{'data'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('dates', $this->arrayResult)) {
            $this->dates = $arrayResult['dates'];
        }
        if (array_key_exists('data', $this->arrayResult)) {
            $this->data = $arrayResult['data'];
        }
    }
}
