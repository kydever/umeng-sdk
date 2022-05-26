<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\AppTrack;

use KY\UMeng\Client\Annotation\Param;

class UMengApptrackGetClickActiveDataResult
{
    /**
     * @var int 点击 pv
     */
    #[Param]
    public int $clickPv;

    /**
     * @var int 点击 uv
     */
    #[Param]
    public int $clickUv;

    /**
     * @var int 激活真人数
     */
    #[Param]
    public int $activateUv;

    /**
     * @var float 点击激活比率
     */
    #[Param]
    public float $activateRate;

    /**
     * @var int 总激活
     */
    public int $totalActivateUv;

    /**
     * @var int 点击激活
     */
    #[Param]
    public int $activateDevice;
}
