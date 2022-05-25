<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappEventInfo.class.php';

class UmengUappEventListResult
{
    private $eventInfo;

    private $page;

    private $totalPage;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getEventInfo()
    {
        return $this->eventInfo;
    }

    /**
     * 设置.
     * @param array include @see UmengUappEventInfo[] $eventInfo
     *
     * 此参数必填     */
    public function setEventInfo(UmengUappEventInfo $eventInfo)
    {
        $this->eventInfo = $eventInfo;
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
        if (array_key_exists('eventInfo', $this->stdResult)) {
            $eventInfoResult = $this->stdResult->{'eventInfo'};
            $object = json_decode(json_encode($eventInfoResult), true);
            $this->eventInfo = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappEventInfoResult = new UmengUappEventInfo();
                $UmengUappEventInfoResult->setArrayResult($arrayobject);
                $this->eventInfo[$i] = $UmengUappEventInfoResult;
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
        if (array_key_exists('eventInfo', $this->arrayResult)) {
            $eventInfoResult = $arrayResult['eventInfo'];
            $this->eventInfo = new UmengUappEventInfo();
            $this->eventInfo->setStdResult($eventInfoResult);
        }
        if (array_key_exists('page', $this->arrayResult)) {
            $this->page = $arrayResult['page'];
        }
        if (array_key_exists('totalPage', $this->arrayResult)) {
            $this->totalPage = $arrayResult['totalPage'];
        }
    }
}
