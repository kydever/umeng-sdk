<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniGetVisitPageListParam extends APIParam
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
     * @var string 排序指标(count：分享次数；reflow：分享回流量；newUser：分享新增)
     */
    public string $orderBy = 'count';

    /**
     * @var string 排序方向（desc：降序,asc：正序）
     */
    public string $direction = 'desc';

    /**
     * @var int 页码
     */
    public int $pageIndex = 1;

    /**
     * @var int 每页条数
     */
    public int $pageSize = 30;
}
