<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniGetChannelOverviewParam extends APIParam
{
    /**
     * @var string 开始时间
     */
    public string $fromDate;

    /**
     * @var string 结束时间
     */
    public string $toDate;

    /**
     * @var string 渠道
     */
    public string $channel;

    /**
     * @var string 时间颗粒度(可选时间颗粒度：5min,hour,day,7day,30day)
     */
    public string $timeUnit;

    /**
     * @var string 多个指标时，以逗号分隔（newUser,activeUser,launch,visitTimes,onceDuration）
     */
    public string $indicators;

    /**
     * @var int 页码
     */
    public int $pageIndex = 1;

    /**
     * @var int 每页记录数
     */
    public int $pageSize = 30;
}
