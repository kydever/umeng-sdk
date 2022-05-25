<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/umini/param/UmengUminiEventProvertyDTO.class.php';

class UmengUminiGetEventProvertyListResult
{
    private $data;

    private $msg;

    private $code;

    private $success;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 设置.
     * @param array include @see UmengUminiEventProvertyDTO[] $data
     *
     * 此参数必填     */
    public function setData(UmengUminiEventProvertyDTO $data)
    {
        $this->data = $data;
    }

    /**
     * @return
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * 设置.
     * @param string $msg
     *
     * 此参数必填     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    /**
     * @return
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 设置.
     * @param Long $code
     *
     * 此参数必填     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * 设置.
     * @param bool $success
     *
     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('data', $this->stdResult)) {
            $dataResult = $this->stdResult->{'data'};
            $object = json_decode(json_encode($dataResult), true);
            $this->data = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUminiEventProvertyDTOResult = new UmengUminiEventProvertyDTO();
                $UmengUminiEventProvertyDTOResult->setArrayResult($arrayobject);
                $this->data[$i] = $UmengUminiEventProvertyDTOResult;
            }
        }
        if (array_key_exists('msg', $this->stdResult)) {
            $this->msg = $this->stdResult->{'msg'};
        }
        if (array_key_exists('code', $this->stdResult)) {
            $this->code = $this->stdResult->{'code'};
        }
        if (array_key_exists('success', $this->stdResult)) {
            $this->success = $this->stdResult->{'success'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('data', $this->arrayResult)) {
            $dataResult = $arrayResult['data'];
            $this->data = new UmengUminiEventProvertyDTO();
            $this->data->setStdResult($dataResult);
        }
        if (array_key_exists('msg', $this->arrayResult)) {
            $this->msg = $arrayResult['msg'];
        }
        if (array_key_exists('code', $this->arrayResult)) {
            $this->code = $arrayResult['code'];
        }
        if (array_key_exists('success', $this->arrayResult)) {
            $this->success = $arrayResult['success'];
        }
    }
}
