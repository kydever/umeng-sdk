<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappAllAppData.class.php';

class UmengUappGetAllAppDataResult
{
    private $allAppData;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getAllAppData()
    {
        return $this->allAppData;
    }

    /**
     * 设置.
     * @param array include @see UmengUappAllAppData[] $allAppData
     *
     * 此参数必填     */
    public function setAllAppData(UmengUappAllAppData $allAppData)
    {
        $this->allAppData = $allAppData;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('allAppData', $this->stdResult)) {
            $allAppDataResult = $this->stdResult->{'allAppData'};
            $object = json_decode(json_encode($allAppDataResult), true);
            $this->allAppData = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappAllAppDataResult = new UmengUappAllAppData();
                $UmengUappAllAppDataResult->setArrayResult($arrayobject);
                $this->allAppData[$i] = $UmengUappAllAppDataResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('allAppData', $this->arrayResult)) {
            $allAppDataResult = $arrayResult['allAppData'];
            $this->allAppData = new UmengUappAllAppData();
            $this->allAppData->setStdResult($allAppDataResult);
        }
    }
}
