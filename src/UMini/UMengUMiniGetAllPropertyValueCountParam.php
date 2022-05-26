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

class UMengUMiniGetAllPropertyValueCountParam extends APIParam
{
    /**
     * @var array [
     *            'timeUnit'=>' string 时间颗粒度(可选day)',
     *            'fromDate'=>' string 开始时间',
     *            'toDate'=>' string 结束时间',
     *            'propertyName'=>' string 属性名',
     *            'pageIndex'=>' int 页码',
     *            'pageSize'=>' int 每页记录数',
     *            'eventName'=>' string 事件名',
     *            'dataSourceId'=>' string 数据源id（AppKey）',
     *            ]
     */
    #[Param]
    public array $sdkStdResult;
}
