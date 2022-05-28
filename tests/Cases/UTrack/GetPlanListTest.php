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
 * 获得用户计划列表.
 * @see https://developer.umeng.com/open-api/docs/com.umeng.apptrack/umeng.apptrack.getPlanList/1
 * @internal
 * @coversNothing
 */
class GetPlanListTest extends AbstractTestCase
{
    public $namespace = 'com.umeng.apptrack';

    public $name = 'umeng.apptrack.getPlanList';

    public $version = 1;

    public function testGetPlanList()
    {
        $this->markTestSkipped();

        $syncAPIClient = new SyncAPIClient(new ClientPolicy(
            '******',
            '******',
            'gateway.open.umeng.com'
        ));

        $reqPolicy = new RequestPolicy(useHttps: true);

        $param = new UMengApptrackGetPlanListParam();
        $param->appKey = '******';
        $param->pageNum = 1;
        $param->pageSize = 20;

        $request = new APIRequest(
            new APIId($this->namespace, $this->name, $this->version),
            $param,
        );

        $res = $syncAPIClient->send($request, UMengApptrackGetPlanListResult::class, $reqPolicy);

        var_dump($res);
    }
}
