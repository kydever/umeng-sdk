<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\Param;

class UmengUappCreateAppResult
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
     * @var string 成功时返回新建应用key
     */
    #[Param]
    public string $data;

    /**
     * @var string 返回消息
     */
    #[Param]
    public string $msg;
}
