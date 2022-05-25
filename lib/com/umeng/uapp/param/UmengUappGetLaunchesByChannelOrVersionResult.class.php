<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappCountData.class.php';

class UmengUappGetLaunchesByChannelOrVersionResult
{
    private $launchInfo;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getLaunchInfo()
    {
        return $this->launchInfo;
    }

    /**
     * 设置.
     * @param array include @see UmengUappCountData[] $launchInfo
     *
     * 此参数必填     */
    public function setLaunchInfo(UmengUappCountData $launchInfo)
    {
        $this->launchInfo = $launchInfo;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('launchInfo', $this->stdResult)) {
            $launchInfoResult = $this->stdResult->{'launchInfo'};
            $object = json_decode(json_encode($launchInfoResult), true);
            $this->launchInfo = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappCountDataResult = new UmengUappCountData();
                $UmengUappCountDataResult->setArrayResult($arrayobject);
                $this->launchInfo[$i] = $UmengUappCountDataResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('launchInfo', $this->arrayResult)) {
            $launchInfoResult = $arrayResult['launchInfo'];
            $this->launchInfo = new UmengUappCountData();
            $this->launchInfo->setStdResult($launchInfoResult);
        }
    }
}
