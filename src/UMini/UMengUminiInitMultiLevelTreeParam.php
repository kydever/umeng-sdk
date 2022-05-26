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

class UMengUminiInitMultiLevelTreeParam extends APIParam
{
    /**
     * @var array ['dataSourceId'=>'数据源id（AppKey）.','treeJson' => 'JSON层级分组结构（最多五级）']
     */
    #[Param]
    public array $sdkStdResult;

    /**
     * @var string 数据源id（AppKey）
     */
    #[Param]
    public string $dataSourceId;

    /**
     * 参数示例：<pre>{"head":["国家","省","城市","门店"],
     * "rows":[["中国","北京","朝阳区","金辉大厦店"],
     * ["中国","北京","朝阳区","绿地中心店"]]}
     * </pre>.
     * @var string JSON层级分组结构（最多五级）；
     */
    #[Param]
    public string $treeJson;
}
