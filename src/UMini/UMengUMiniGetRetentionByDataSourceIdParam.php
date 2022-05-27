<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniGetRetentionByDataSourceIdParam extends APIParam
{
    /**
     * @var string 数据源id（AppKey）
     */
    public string $dataSourceId;

    /**
     * @var string 开始时间（yyyy-MM-dd)
     */
    public string $fromDate;

    /**
     * @var string 结束时间（yyyy-MM-dd)
     */
    public string $toDate;

    /**
     * @var string 时间颗粒度(可选时间颗粒度：5min,hour,day,7day,30day)
     */
    public string $timeUnit;

    /**
     * @var int 页码
     */
    public int $pageIndex = 1;

    /**
     * @var int 每页条数
     */
    public int $pageSize = 30;

    /**
     * @var string 指标：新增用户（newuser） 活跃用户 activeUser
     */
    public string $indicator;

    /**
     * @var string 数据类型：留存率（rate) 留存数（num)
     */
    public string $valueType;
}
