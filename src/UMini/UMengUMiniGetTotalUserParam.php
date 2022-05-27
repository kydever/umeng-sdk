<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniGetTotalUserParam extends APIParam
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
     * @var int 页码
     */
    public int $pageIndex = 1;

    /**
     * @var int 每页条数
     */
    public int $pageSize = 30;
}
