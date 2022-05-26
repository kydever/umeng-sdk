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

class UMengUMiniGetVisitPageListParam extends APIParam
{
    /**
     * @var array [
     *            'dataSourceId'=>'string 数据源id（AppKey）',
     *            'timeUnit'=>'string 时间颗粒度（可选参数：day,7day,30day）',
     *            'fromDate'=>'string 开始时间',
     *            'toDate'=>'string 结束时间',
     *            'orderBy'=>'string 排序指标（可选：visitTimes：页面访问次数；visitUser：页面访问用户数；pageDuration：平均页面访问时长）',
     *            'direction'=>'string 设置排序方向（desc：降序,asc：正序）.',
     *            'pageIndex'=>'int 页码',
     *            'pageSize'=>'int 每页记录数',
     *            ]
     */
    #[Param]
    public array $sdkStdResult = [];
}
