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

class UMengAppTrackAppEvent extends APIParam
{
    /**
     * @var string 自定义事件名称
     */
    #[Param]
    public string $eventName;

    /**
     * @var int 自定义事件值
     */
    #[Param]
    public int $eventNumber;
}
