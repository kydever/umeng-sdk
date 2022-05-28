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
use KY\UMeng\UApp\UMengUAppGetAppListParam;
use KY\UMeng\UApp\UMengUAppGetAppListResult;

/**
 * 获取App列表.
 * @see https://developer.umeng.com/open-api/docs/com.umeng.uapp/umeng.uapp.getAppList/1
 * @internal
 * @coversNothing
 */
class GetAppListTest extends AbstractTestCase
{
    public $namespace = 'com.umeng.uapp';

    public $name = 'umeng.uapp.getAppList';

    public $version = 1;

    public function testGetAppList()
    {
        $this->markTestSkipped();

        $syncAPIClient = new SyncAPIClient(new ClientPolicy(
            '******',
            '******',
            'gateway.open.umeng.com'
        ));

        $reqPolicy = new RequestPolicy(useHttps: true);

        $param = new UMengUAppGetAppListParam();
        $param->page = 1;
        $param->perPage = 20;
        $param->token = '';

        $request = new APIRequest(
            new APIId($this->namespace, $this->name, $this->version),
            $param,
        );

        $res = $syncAPIClient->send($request, UMengUAppGetAppListResult::class, $reqPolicy);

        var_dump($res);
    }
}
