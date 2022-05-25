<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/umini/param/UmengUminiVisitPageDTO.class.php';

class UmengUminiVisitPageListDTO extends SDKDomain
{
    private $currentPage;

    private $data;

    private $totalCount;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 当前页码
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * 设置当前页码
     * @param int $currentPage
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;
    }

    /**
     * @return
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 设置.
     * @param array include @see UmengUminiVisitPageDTO[] $data
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setData(UmengUminiVisitPageDTO $data)
    {
        $this->data = $data;
    }

    /**
     * @return 总条数
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * 设置总条数.
     * @param int $totalCount
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('currentPage', $this->stdResult)) {
            $this->currentPage = $this->stdResult->{'currentPage'};
        }
        if (array_key_exists('data', $this->stdResult)) {
            $dataResult = $this->stdResult->{'data'};
            $object = json_decode(json_encode($dataResult), true);
            $this->data = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUminiVisitPageDTOResult = new UmengUminiVisitPageDTO();
                $UmengUminiVisitPageDTOResult->setArrayResult($arrayobject);
                $this->data[$i] = $UmengUminiVisitPageDTOResult;
            }
        }
        if (array_key_exists('totalCount', $this->stdResult)) {
            $this->totalCount = $this->stdResult->{'totalCount'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('currentPage', $this->arrayResult)) {
            $this->currentPage = $arrayResult['currentPage'];
        }
        if (array_key_exists('data', $this->arrayResult)) {
            $dataResult = $arrayResult['data'];
            $this->data = new UmengUminiVisitPageDTO();
            $this->data->setStdResult($dataResult);
        }
        if (array_key_exists('totalCount', $this->arrayResult)) {
            $this->totalCount = $arrayResult['totalCount'];
        }
    }
}
