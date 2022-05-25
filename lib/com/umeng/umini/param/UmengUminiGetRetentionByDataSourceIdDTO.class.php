<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiGetRetentionByDataSourceIdDTO extends SDKDomain
{
    private $dateTime;

    private $value;

    private $v1;

    private $v2;

    private $v3;

    private $v4;

    private $v5;

    private $v6;

    private $v7;

    private $v14;

    private $v30;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 日期
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * 设置日期
     * @param string $dateTime
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return 新增/活跃用户数据
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * 设置新增/活跃用户数据.
     * @param Long $value
     *                    参数示例：<pre></pre>
     * 此参数必填     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return 次1日/周
     */
    public function getV1()
    {
        return $this->v1;
    }

    /**
     * 设置次1日/周.
     * @param string $v1
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setV1($v1)
    {
        $this->v1 = $v1;
    }

    /**
     * @return 次2日/周
     */
    public function getV2()
    {
        return $this->v2;
    }

    /**
     * 设置次2日/周.
     * @param string $v2
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setV2($v2)
    {
        $this->v2 = $v2;
    }

    /**
     * @return 次3日/周
     */
    public function getV3()
    {
        return $this->v3;
    }

    /**
     * 设置次3日/周.
     * @param string $v3
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setV3($v3)
    {
        $this->v3 = $v3;
    }

    /**
     * @return 次4日/周
     */
    public function getV4()
    {
        return $this->v4;
    }

    /**
     * 设置次4日/周.
     * @param string $v4
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setV4($v4)
    {
        $this->v4 = $v4;
    }

    /**
     * @return 次5日/周
     */
    public function getV5()
    {
        return $this->v5;
    }

    /**
     * 设置次5日/周.
     * @param string $v5
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setV5($v5)
    {
        $this->v5 = $v5;
    }

    /**
     * @return 次6日/周
     */
    public function getV6()
    {
        return $this->v6;
    }

    /**
     * 设置次6日/周.
     * @param string $v6
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setV6($v6)
    {
        $this->v6 = $v6;
    }

    /**
     * @return 次7日/周
     */
    public function getV7()
    {
        return $this->v7;
    }

    /**
     * 设置次7日/周.
     * @param string $v7
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setV7($v7)
    {
        $this->v7 = $v7;
    }

    /**
     * @return 次14日/周
     */
    public function getV14()
    {
        return $this->v14;
    }

    /**
     * 设置次14日/周.
     * @param string $v14
     *                    参数示例：<pre></pre>
     * 此参数必填     */
    public function setV14($v14)
    {
        $this->v14 = $v14;
    }

    /**
     * @return 次30日/周
     */
    public function getV30()
    {
        return $this->v30;
    }

    /**
     * 设置次30日/周.
     * @param string $v30
     *                    参数示例：<pre></pre>
     * 此参数必填     */
    public function setV30($v30)
    {
        $this->v30 = $v30;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('dateTime', $this->stdResult)) {
            $this->dateTime = $this->stdResult->{'dateTime'};
        }
        if (array_key_exists('value', $this->stdResult)) {
            $this->value = $this->stdResult->{'value'};
        }
        if (array_key_exists('v1', $this->stdResult)) {
            $this->v1 = $this->stdResult->{'v1'};
        }
        if (array_key_exists('v2', $this->stdResult)) {
            $this->v2 = $this->stdResult->{'v2'};
        }
        if (array_key_exists('v3', $this->stdResult)) {
            $this->v3 = $this->stdResult->{'v3'};
        }
        if (array_key_exists('v4', $this->stdResult)) {
            $this->v4 = $this->stdResult->{'v4'};
        }
        if (array_key_exists('v5', $this->stdResult)) {
            $this->v5 = $this->stdResult->{'v5'};
        }
        if (array_key_exists('v6', $this->stdResult)) {
            $this->v6 = $this->stdResult->{'v6'};
        }
        if (array_key_exists('v7', $this->stdResult)) {
            $this->v7 = $this->stdResult->{'v7'};
        }
        if (array_key_exists('v14', $this->stdResult)) {
            $this->v14 = $this->stdResult->{'v14'};
        }
        if (array_key_exists('v30', $this->stdResult)) {
            $this->v30 = $this->stdResult->{'v30'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('dateTime', $this->arrayResult)) {
            $this->dateTime = $arrayResult['dateTime'];
        }
        if (array_key_exists('value', $this->arrayResult)) {
            $this->value = $arrayResult['value'];
        }
        if (array_key_exists('v1', $this->arrayResult)) {
            $this->v1 = $arrayResult['v1'];
        }
        if (array_key_exists('v2', $this->arrayResult)) {
            $this->v2 = $arrayResult['v2'];
        }
        if (array_key_exists('v3', $this->arrayResult)) {
            $this->v3 = $arrayResult['v3'];
        }
        if (array_key_exists('v4', $this->arrayResult)) {
            $this->v4 = $arrayResult['v4'];
        }
        if (array_key_exists('v5', $this->arrayResult)) {
            $this->v5 = $arrayResult['v5'];
        }
        if (array_key_exists('v6', $this->arrayResult)) {
            $this->v6 = $arrayResult['v6'];
        }
        if (array_key_exists('v7', $this->arrayResult)) {
            $this->v7 = $arrayResult['v7'];
        }
        if (array_key_exists('v14', $this->arrayResult)) {
            $this->v14 = $arrayResult['v14'];
        }
        if (array_key_exists('v30', $this->arrayResult)) {
            $this->v30 = $arrayResult['v30'];
        }
    }
}
