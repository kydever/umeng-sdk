<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengUMiniEditPathDisplayNameResult extends APIParam
{
    /**
     * @var int 状态码
     */
    #[Param]
    public int $code;

    /**
     * @var bool 状态
     */
    #[Param]
    public bool $success;

    /**
     * @var string
     */
    #[Param]
    public string $data;

    /**
     * @var string 返回消息
     */
    #[Param]
    public string $msg;
}
