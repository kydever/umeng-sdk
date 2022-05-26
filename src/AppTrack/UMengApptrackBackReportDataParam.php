<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\AppTrack;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengApptrackBackReportDataParam extends APIParam
{
    /**
     * @var array 报表数据信息
     */
    #[Param]
    protected array $reportList;
}
