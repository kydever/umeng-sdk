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

class UMengUAppGetAppListParam extends APIParam
{
    /**
     * @var string 应用ID
     */
    #[Param(name: 'accessToken')]
    public string $token = '';

    /**
     * @var int 页号，从1开始
     */
    #[Param]
    public int $page = 1;

    /**
     * @var int 每页显示数量（最大100）
     */
    #[Param]
    public int $perPage = 10;
}
