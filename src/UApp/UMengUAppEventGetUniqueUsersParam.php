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

class UMengUAppEventGetUniqueUsersParam extends APIParam
{
    /**
     * @var string 应用ID
     */
    #[Param(name: 'appkey')]
    public string $key;

    /**
     * @var string 查询起始日期 2022-01-01
     */
    #[Param]
    public string $startDate;

    /**
     * @var string 查询截止日期 2022-01-01
     */
    #[Param]
    public string $endDate;

    /**
     * @var string 自定义事件名称（通过umeng.uapp.event.list获取）
     */
    #[Param]
    public string $eventName;
}
