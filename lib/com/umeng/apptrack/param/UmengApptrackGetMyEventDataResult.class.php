<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/apptrack/param/UmengApptrackAppEvent.class.php';

class UmengApptrackGetMyEventDataResult
{
    private $data;

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
     * @param array include @see UmengApptrackAppEvent[] $data
     *
     * 此参数必填     */
    public function setData(UmengApptrackAppEvent $data)
    {
        $this->data = $data;
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
                $UmengApptrackAppEventResult = new UmengApptrackAppEvent();
                $UmengApptrackAppEventResult->setArrayResult($arrayobject);
                $this->data[$i] = $UmengApptrackAppEventResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('data', $this->arrayResult)) {
            $dataResult = $arrayResult['data'];
            $this->data = new UmengApptrackAppEvent();
            $this->data->setStdResult($dataResult);
        }
    }
}
