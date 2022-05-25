<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappDateCountInfo.class.php';

class UmengUappEventGetDataResult
{
    private $eventData;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getEventData()
    {
        return $this->eventData;
    }

    /**
     * 设置.
     * @param array include @see UmengUappDateCountInfo[] $eventData
     *
     * 此参数必填     */
    public function setEventData(UmengUappDateCountInfo $eventData)
    {
        $this->eventData = $eventData;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('eventData', $this->stdResult)) {
            $eventDataResult = $this->stdResult->{'eventData'};
            $object = json_decode(json_encode($eventDataResult), true);
            $this->eventData = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappDateCountInfoResult = new UmengUappDateCountInfo();
                $UmengUappDateCountInfoResult->setArrayResult($arrayobject);
                $this->eventData[$i] = $UmengUappDateCountInfoResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('eventData', $this->arrayResult)) {
            $eventDataResult = $arrayResult['eventData'];
            $this->eventData = new UmengUappDateCountInfo();
            $this->eventData->setStdResult($eventDataResult);
        }
    }
}
