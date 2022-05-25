<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/apptrack/param/UmengApptrackReport.class.php';

class UmengApptrackBackReportDataParam
{
    private $sdkStdResult = [];

    /**
     * @return 报表数据信息
     */
    public function getReportList()
    {
        return $this->sdkStdResult['reportList'];
    }

    /**
     * 设置报表数据信息.
     * @param array include @see UmengApptrackReport[] $reportList
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setReportList(UmengApptrackReport $reportList)
    {
        $this->sdkStdResult['reportList'] = $reportList;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
