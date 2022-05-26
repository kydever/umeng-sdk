<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengUMiniGetShareUserListParam extends APIParam
{
    /**
     * @var array [
     *            'dataSourceId'=>'string 数据源id（AppKey）',
     *            'timeUnit' => 'string 时间颗粒度（可选参数：day,7day,30day）',
     *            'fromDate'=>'string 开始时间',
     *            'toDate'=>'string 结束时间',
     *            'orderBy'=>'string 排序指标(count：分享次数；reflow：分享回流量；newUser：分享新增)'
     *            'direction' => 'string 排序方向（desc：降序,asc：正序）',
     *            'pageIndex'=>'int 页码',
     *            'pageSize'=>'int 每页记录数',
     *            ]
     */
    #[Param]
    public array $sdkStdResult = [];
}
