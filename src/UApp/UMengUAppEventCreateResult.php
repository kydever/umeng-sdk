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

class UMengUAppEventCreateResult extends APIParam
{
    /**
     * @var int 响应码
     */
    #[Param]
    public int $status;

    /**
     * @var string 响应信息
     */
    #[Param]
    public string $msg;
}
