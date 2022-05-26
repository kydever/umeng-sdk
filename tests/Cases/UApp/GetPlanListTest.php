<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace HyperfTest\Cases\UTrack;

use HyperfTest\Cases\AbstractTestCase;
use KY\UMeng\AppTrack\UMengApptrackGetPlanListParam;
use KY\UMeng\AppTrack\UMengApptrackGetPlanListResult;
use KY\UMeng\Client\APIId;
use KY\UMeng\Client\APIRequest;
use KY\UMeng\Client\Policy\ClientPolicy;
use KY\UMeng\Client\Policy\RequestPolicy;
use KY\UMeng\Client\SyncAPIClient;

/**
 * @internal
 * @coversNothing
 */
class GetPlanListTest extends AbstractTestCase
{
    /**
     * 获得用户计划列表.
     * @see https://developer.umeng.com/open-api/docs/com.umeng.apptrack/umeng.apptrack.getPlanList/1
     */
    public function testGetPlanList()
    {
        $this->markTestSkipped();

        $syncAPIClient = new SyncAPIClient(new ClientPolicy(
            '123456',
            '******',
            'gateway.open.umeng.com'
        ));

        $reqPolicy = new RequestPolicy(useHttps: true);

        $param = new UMengApptrackGetPlanListParam();
        $param->appKey = '';
        $param->pageSize = 20;

        $request = new APIRequest(
            new APIId('com.umeng.apptrack', 'umeng.apptrack.getPlanList', 1),
            $param,
        );

        $res = $syncAPIClient->send($request, UMengApptrackGetPlanListResult::class, $reqPolicy);

        var_dump($res);
    }
}
