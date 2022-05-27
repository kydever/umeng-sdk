<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniGetAllPropertyValueCountParam extends APIParam
{
    /**
     * @var string 时间颗粒度(可选day)
     */
    public string $timeUnit;

    /**
     * @var string 开始时间 2022-01-01
     */
    public string $fromDate;

    /**
     * @var string 结束时间 2022-01-01
     */
    public string $toDate;

    /**
     * @var string 属性名
     */
    public string $propertyName;

    /**
     * @var int 页码
     */
    public int $pageIndex = 1;

    /**
     * @var int 每页记录数
     */
    public int $pageSize = 30;

    /**
     * @var string 事件名
     */
    public string $eventName;

    /**
     * @var string 数据源id（AppKey）
     */
    public string $dataSourceId;
}
