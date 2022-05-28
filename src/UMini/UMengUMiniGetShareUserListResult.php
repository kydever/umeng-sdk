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

class UMengUMiniGetShareUserListResult extends APIParam
{
    /**
     * @var UMengUMiniShareUserListDTO[]
     */
    #[Param]
    public array $data;

    /**
     * @var string 消息
     */
    #[Param]
    public string $msg;

    /**
     * @var int 状态码
     */
    #[Param]
    public int $code;

    /**
     * @var bool 执行状态
     */
    #[Param]
    public bool $success;
}
