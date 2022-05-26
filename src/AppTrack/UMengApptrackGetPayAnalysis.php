<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\AppTrack;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengApptrackGetPayAnalysis extends APIParam
{
    /**
     * @var string 付费(拍下) ID
     */
    #[Param]
    public string $payId;

    /**
     * @var string 付费(拍下)商品
     */
    #[Param]
    public string $payItem;

    /**
     * @var string 订单号
     */
    #[Param]
    public string $orderId;

    /**
     * @var float 付费(拍下)金额
     */
    #[Param]
    public float $amount;

    /**
     * @var string 激活日期
     */
    #[Param]
    public string $activateDs;

    /**
     * @var string 事件日期
     */
    #[Param]
    public string $eventDs;

    /**
     * @var string 点击日期
     */
    #[Param]
    public string $clickDs;
}
