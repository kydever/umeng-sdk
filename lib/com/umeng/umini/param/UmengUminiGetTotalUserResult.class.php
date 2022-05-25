<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/umini/param/UmnegUminiTotalUserDTO.class.php';

class UmengUminiGetTotalUserResult
{
    private $data;

    private $code;

    private $msg;

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
     * @param array include @see UmnegUminiTotalUserDTO[] $data
     *
     * 此参数必填     */
    public function setData(UmnegUminiTotalUserDTO $data)
    {
        $this->data = $data;
    }

    /**
     * @return 状态码
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 设置状态码
     * @param Long $code
     *
     * 此参数必填     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return 消息
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * 设置消息.
     * @param string $msg
     *
     * 此参数必填     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    /**
     * @return 执行状态
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * 设置执行状态
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
                $UmnegUminiTotalUserDTOResult = new UmnegUminiTotalUserDTO();
                $UmnegUminiTotalUserDTOResult->setArrayResult($arrayobject);
                $this->data[$i] = $UmnegUminiTotalUserDTOResult;
            }
        }
        if (array_key_exists('code', $this->stdResult)) {
            $this->code = $this->stdResult->{'code'};
        }
        if (array_key_exists('msg', $this->stdResult)) {
            $this->msg = $this->stdResult->{'msg'};
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
            $this->data = new UmnegUminiTotalUserDTO();
            $this->data->setStdResult($dataResult);
        }
        if (array_key_exists('code', $this->arrayResult)) {
            $this->code = $arrayResult['code'];
        }
        if (array_key_exists('msg', $this->arrayResult)) {
            $this->msg = $arrayResult['msg'];
        }
        if (array_key_exists('success', $this->arrayResult)) {
            $this->success = $arrayResult['success'];
        }
    }
}
