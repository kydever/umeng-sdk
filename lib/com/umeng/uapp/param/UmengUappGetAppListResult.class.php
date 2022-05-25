<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappAppInfoData.class.php';

class UmengUappGetAppListResult
{
    private $appInfos;

    private $totalPage;

    private $page;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getAppInfos()
    {
        return $this->appInfos;
    }

    /**
     * 设置.
     * @param array include @see UmengUappAppInfoData[] $appInfos
     *
     * 此参数必填     */
    public function setAppInfos(UmengUappAppInfoData $appInfos)
    {
        $this->appInfos = $appInfos;
    }

    /**
     * @return 总页数
     */
    public function getTotalPage()
    {
        return $this->totalPage;
    }

    /**
     * 设置总页数.
     * @param int $totalPage
     *
     * 此参数必填     */
    public function setTotalPage($totalPage)
    {
        $this->totalPage = $totalPage;
    }

    /**
     * @return 页数
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * 设置页数.
     * @param int $page
     *
     * 此参数必填     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('appInfos', $this->stdResult)) {
            $appInfosResult = $this->stdResult->{'appInfos'};
            $object = json_decode(json_encode($appInfosResult), true);
            $this->appInfos = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappAppInfoDataResult = new UmengUappAppInfoData();
                $UmengUappAppInfoDataResult->setArrayResult($arrayobject);
                $this->appInfos[$i] = $UmengUappAppInfoDataResult;
            }
        }
        if (array_key_exists('totalPage', $this->stdResult)) {
            $this->totalPage = $this->stdResult->{'totalPage'};
        }
        if (array_key_exists('page', $this->stdResult)) {
            $this->page = $this->stdResult->{'page'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('appInfos', $this->arrayResult)) {
            $appInfosResult = $arrayResult['appInfos'];
            $this->appInfos = new UmengUappAppInfoData();
            $this->appInfos->setStdResult($appInfosResult);
        }
        if (array_key_exists('totalPage', $this->arrayResult)) {
            $this->totalPage = $arrayResult['totalPage'];
        }
        if (array_key_exists('page', $this->arrayResult)) {
            $this->page = $arrayResult['page'];
        }
    }
}
