<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\Param;

class UmengUappEventGetDataResult
{
    /**
     * @var array 事件数据
     */
    #[Param]
    public array $eventData;
}