<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/apptrack/param/UmengApptrackAppRecPlan.class.php';

class UmengApptrackGetPlanListResult
{
    private $data;

    private $total;

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
     * @param array include @see UmengApptrackAppRecPlan[] $data
     *
     * 此参数必填     */
    public function setData(UmengApptrackAppRecPlan $data)
    {
        $this->data = $data;
    }

    /**
     * @return 总记录数
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * 设置总记录数.
     * @param int $total
     *
     * 此参数必填     */
    public function setTotal($total)
    {
        $this->total = $total;
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
                $UmengApptrackAppRecPlanResult = new UmengApptrackAppRecPlan();
                $UmengApptrackAppRecPlanResult->setArrayResult($arrayobject);
                $this->data[$i] = $UmengApptrackAppRecPlanResult;
            }
        }
        if (array_key_exists('total', $this->stdResult)) {
            $this->total = $this->stdResult->{'total'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('data', $this->arrayResult)) {
            $dataResult = $arrayResult['data'];
            $this->data = new UmengApptrackAppRecPlan();
            $this->data->setStdResult($dataResult);
        }
        if (array_key_exists('total', $this->arrayResult)) {
            $this->total = $arrayResult['total'];
        }
    }
}
