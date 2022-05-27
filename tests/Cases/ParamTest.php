<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace HyperfTest\Cases;

use KY\UMeng\AppTrack\UMengAppTrackAppDownload;
use KY\UMeng\Client\APIId;
use KY\UMeng\Client\APIRequest;
use KY\UMeng\Client\Policy\ClientPolicy;
use KY\UMeng\Client\Policy\RequestPolicy;
use KY\UMeng\Client\SyncAPIClient;
use KY\UMeng\UApp\UMengUAppGetDailyDataParam;
use KY\UMeng\UApp\UMengUAppGetDailyDataResult;

/**
 * @internal
 * @coversNothing
 */
class ParamTest extends AbstractTestCase
{
    public function testMakeFromArray()
    {
        $param = UMengAppTrackAppDownload::makeFromArray([
            'unitId' => 1,
        ]);

        $this->assertSame(1, $param->unitId);
    }
}
