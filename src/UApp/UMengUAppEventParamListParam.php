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

class UMengUAppEventParamListParam extends APIParam
{
    /**
     * @var string 应用ID
     */
    #[Param(name: 'appkey')]
    public string $key;

    /**
     * @var string 事件ID（通过umeng.uapp.event.list接口查询得到的ID）
     */
    #[Param]
    public string $eventId;

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
}
