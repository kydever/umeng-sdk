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

class UMengUAppGetChannelDataParam extends APIParam
{
    /**
     * @var string 应用ID
     */
    #[Param(name: 'appkey')]
    public string $key;

    /**
     * @var string 查询日期 2022-01-01
     */
    #[Param]
    public string $date;

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
