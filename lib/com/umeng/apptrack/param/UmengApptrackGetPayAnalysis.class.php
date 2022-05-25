<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengApptrackGetPayAnalysis extends SDKDomain
{
    private $payId;

    private $payItem;

    private $orderId;

    private $amount;

    private $activateDs;

    private $eventDs;

    private $clickDs;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 付费(拍下)ID
     */
    public function getPayId()
    {
        return $this->payId;
    }

    /**
     * 设置付费(拍下)ID.
     * @param string $payId
     *                      参数示例：<pre></pre>
     * 此参数必填     */
    public function setPayId($payId)
    {
        $this->payId = $payId;
    }

    /**
     * @return 付费(拍下)商品
     */
    public function getPayItem()
    {
        return $this->payItem;
    }

    /**
     * 设置付费(拍下)商品
     * @param string $payItem
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setPayItem($payItem)
    {
        $this->payItem = $payItem;
    }

    /**
     * @return 订单号
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 设置订单号.
     * @param string $orderId
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return 付费(拍下)金额
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 设置付费(拍下)金额.
     * @param BigDecimal $amount
     *                           参数示例：<pre></pre>
     * 此参数必填     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return 激活日期
     */
    public function getActivateDs()
    {
        return $this->activateDs;
    }

    /**
     * 设置激活日期
     * @param string $activateDs
     *                           参数示例：<pre></pre>
     * 此参数必填     */
    public function setActivateDs($activateDs)
    {
        $this->activateDs = $activateDs;
    }

    /**
     * @return 事件日期
     */
    public function getEventDs()
    {
        return $this->eventDs;
    }

    /**
     * 设置事件日期
     * @param string $eventDs
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventDs($eventDs)
    {
        $this->eventDs = $eventDs;
    }

    /**
     * @return 点击日期
     */
    public function getClickDs()
    {
        return $this->clickDs;
    }

    /**
     * 设置点击日期
     * @param string $clickDs
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setClickDs($clickDs)
    {
        $this->clickDs = $clickDs;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('payId', $this->stdResult)) {
            $this->payId = $this->stdResult->{'payId'};
        }
        if (array_key_exists('payItem', $this->stdResult)) {
            $this->payItem = $this->stdResult->{'payItem'};
        }
        if (array_key_exists('orderId', $this->stdResult)) {
            $this->orderId = $this->stdResult->{'orderId'};
        }
        if (array_key_exists('amount', $this->stdResult)) {
            $this->amount = $this->stdResult->{'amount'};
        }
        if (array_key_exists('activateDs', $this->stdResult)) {
            $this->activateDs = $this->stdResult->{'activateDs'};
        }
        if (array_key_exists('eventDs', $this->stdResult)) {
            $this->eventDs = $this->stdResult->{'eventDs'};
        }
        if (array_key_exists('clickDs', $this->stdResult)) {
            $this->clickDs = $this->stdResult->{'clickDs'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('payId', $this->arrayResult)) {
            $this->payId = $arrayResult['payId'];
        }
        if (array_key_exists('payItem', $this->arrayResult)) {
            $this->payItem = $arrayResult['payItem'];
        }
        if (array_key_exists('orderId', $this->arrayResult)) {
            $this->orderId = $arrayResult['orderId'];
        }
        if (array_key_exists('amount', $this->arrayResult)) {
            $this->amount = $arrayResult['amount'];
        }
        if (array_key_exists('activateDs', $this->arrayResult)) {
            $this->activateDs = $arrayResult['activateDs'];
        }
        if (array_key_exists('eventDs', $this->arrayResult)) {
            $this->eventDs = $arrayResult['eventDs'];
        }
        if (array_key_exists('clickDs', $this->arrayResult)) {
            $this->clickDs = $arrayResult['clickDs'];
        }
    }
}
