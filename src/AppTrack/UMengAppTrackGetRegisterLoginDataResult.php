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

class UMengAppTrackGetRegisterLoginDataResult extends APIParam
{
    /**
     * @var int 注册数量
     */
    #[Param]
    public int $register;

    /**
     * @var int 登录数量
     */
    #[Param]
    public int $login;

    /**
     * @var int 创建角色数量
     */
    #[Param]
    public int $roleDevice;

    /**
     * @var int 拍下订单设备数量
     */
    #[Param]
    public int $orderDevice;

    /**
     * @var float 拍下订单金额
     */
    #[Param]
    public float $orderAmount;

    /**
     * @var int 付费设备数
     */
    #[Param]
    public int $payDevice;

    /**
     * @var float 付费金额
     */
    #[Param]
    public float $amount;
}
