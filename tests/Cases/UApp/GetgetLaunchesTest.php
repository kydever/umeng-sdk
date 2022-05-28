<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace HyperfTest\Cases\UTrack;

use HyperfTest\Cases\AbstractTestCase;
use KY\UMeng\Client\APIId;
use KY\UMeng\Client\APIRequest;
use KY\UMeng\Client\Policy\ClientPolicy;
use KY\UMeng\Client\Policy\RequestPolicy;
use KY\UMeng\Client\SyncAPIClient;
use KY\UMeng\UApp\UMengUAppGetLaunchesParam;
use KY\UMeng\UApp\UMengUAppGetLaunchesResult;

/**
 * 获取App启动次数.
 * @see https://developer.umeng.com/open-api/docs/com.umeng.uapp/umeng.uapp.getLaunches/1
 * @internal
 * @coversNothing
 */
class GetgetLaunchesTest extends AbstractTestCase
{
    public $namespace = 'com.umeng.uapp';

    public $name = 'umeng.uapp.getLaunches';

    public $version = 1;

    public function testGetLaunches()
    {
        $this->markTestSkipped();

        $syncAPIClient = new SyncAPIClient(new ClientPolicy(
            '******',
            '******',
            'gateway.open.umeng.com'
        ));

        $reqPolicy = new RequestPolicy(useHttps: true);

        $param = new UMengUAppGetLaunchesParam();
        $param->key = '******';
        $param->startDate = '2022-05-01';
        $param->endDate = '2022-05-10';

        $request = new APIRequest(
            new APIId($this->namespace, $this->name, $this->version),
            $param,
        );

        $res = $syncAPIClient->send($request, UMengUAppGetLaunchesResult::class, $reqPolicy);

        var_dump($res);
    }
}
