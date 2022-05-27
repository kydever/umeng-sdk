<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniGetLandingPageListParam extends APIParam
{
    /**
     * @var string 数据源id（AppKey）
     */
    public string $dataSourceId;

    /**
     * @var string 时间颗粒度(可选时间颗粒度：5min,hour,day,7day,30day)
     */
    public string $timeUnit;

    /**
     * @var string 开始时间（yyyy-MM-dd)
     */
    public string $fromDate;

    /**
     * @var string 结束时间（yyyy-MM-dd)
     */
    public string $toDate;

    /**
     * @var string 排序指标，默认新增用户（新增用户：newUser；打开次数：launch；活跃用户：activeUser；页面访问次数：visitTimes；次均停留时长：onceDuration；创建时间：createDateTime）
     */
    public string $orderBy = '';

    /**
     * @var string 排序方向，默认倒序（正序：asc；倒序：desc）
     */
    public string $direction = '';

    /**
     * @var int 页码
     */
    public int $pageIndex = 1;

    /**
     * @var int 每页条数
     */
    public int $pageSize = 30;
}
