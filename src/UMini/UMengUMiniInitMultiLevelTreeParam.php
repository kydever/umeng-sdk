<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniInitMultiLevelTreeParam extends APIParam
{
    /**
     * @var string 数据源id（AppKey）
     */
    public string $dataSourceId;

    /**
     * @var string JSON层级分组结构（最多五级）
     *             {"head":["国家","省","城市","门店"],"rows":[["中国","北京","朝阳区","金辉大厦店"],["中国","北京","朝阳区","绿地中心店"]]}
     */
    public string $treeJson;
}
