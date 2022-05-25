<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappChannelInfo.class.php';

class UmengUappGetChannelDataResult
{
    private $channelInfos;

    private $page;

    private $totalPage;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getChannelInfos()
    {
        return $this->channelInfos;
    }

    /**
     * 设置.
     * @param array include @see UmengUappChannelInfo[] $channelInfos
     *
     * 此参数必填     */
    public function setChannelInfos(UmengUappChannelInfo $channelInfos)
    {
        $this->channelInfos = $channelInfos;
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

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('channelInfos', $this->stdResult)) {
            $channelInfosResult = $this->stdResult->{'channelInfos'};
            $object = json_decode(json_encode($channelInfosResult), true);
            $this->channelInfos = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappChannelInfoResult = new UmengUappChannelInfo();
                $UmengUappChannelInfoResult->setArrayResult($arrayobject);
                $this->channelInfos[$i] = $UmengUappChannelInfoResult;
            }
        }
        if (array_key_exists('page', $this->stdResult)) {
            $this->page = $this->stdResult->{'page'};
        }
        if (array_key_exists('totalPage', $this->stdResult)) {
            $this->totalPage = $this->stdResult->{'totalPage'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('channelInfos', $this->arrayResult)) {
            $channelInfosResult = $arrayResult['channelInfos'];
            $this->channelInfos = new UmengUappChannelInfo();
            $this->channelInfos->setStdResult($channelInfosResult);
        }
        if (array_key_exists('page', $this->arrayResult)) {
            $this->page = $arrayResult['page'];
        }
        if (array_key_exists('totalPage', $this->arrayResult)) {
            $this->totalPage = $arrayResult['totalPage'];
        }
    }
}
