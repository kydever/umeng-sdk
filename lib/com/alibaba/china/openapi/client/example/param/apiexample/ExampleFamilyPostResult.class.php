<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/alibaba/china/openapi/client/example/param/apiexample/ExampleFamily.class.php';
class ExampleFamilyPostResult
{
    private $result;

    private $resultDesc;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 返回的接听信息
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * 设置返回的接听信息.
     *
     * @param ExampleFamily $result
     *                              此参数必填
     */
    public function setResult(ExampleFamily $result)
    {
        $this->result = $result;
    }

    /**
     * @return 返回结果描述
     */
    public function getResultDesc()
    {
        return $this->resultDesc;
    }

    /**
     * 设置返回结果描述.
     *
     * @param string $resultDesc
     *                           此参数必填
     */
    public function setResultDesc($resultDesc)
    {
        $this->resultDesc = $resultDesc;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('result', $this->stdResult)) {
            $resultResult = $this->stdResult->{'result'};
            $this->result = new ExampleFamily();
            $this->result->setStdResult($resultResult);
        }
        if (array_key_exists('resultDesc', $this->stdResult)) {
            $this->resultDesc = $this->stdResult->{'resultDesc'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('result', $this->arrayResult)) {
            $resultResult = $arrayResult['result'];
            $this->result = new ExampleFamily();
            $this->result->{$this}->setStdResult($resultResult);
        }
        if (array_key_exists('resultDesc', $this->arrayResult)) {
            $this->resultDesc = $arrayResult['resultDesc'];
        }
    }
}
