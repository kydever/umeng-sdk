<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengUAppEventInfo extends APIParam
{
    /**
     * @var string 事件名称
     */
    #[Param]
    public string $name;

    /**
     * @var int 统计次数
     */
    #[Param]
    public int $count;

    /**
     * @var string ID
     */
    #[Param]
    public string $id;

    /**
     * @var string 显示名称
     */
    #[Param]
    public string $displayName;
}
