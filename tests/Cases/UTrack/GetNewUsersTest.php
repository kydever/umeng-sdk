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
use KY\UMeng\UApp\UMengUAppGetNewUsersParam;
use KY\UMeng\UApp\UMengUAppGetNewUsersResult;

/**
 * 获取App新增用户数.
 * @see https://developer.umeng.com/open-api/docs/com.umeng.uapp/umeng.uapp.getNewUsers/1
 * @internal
 * @coversNothing
 */
class GetNewUsersTest extends AbstractTestCase
{
    public $namespace = 'com.umeng.uapp';

    public $name = 'umeng.uapp.getNewUsers';

    public $version = 1;

    /*
     * 这个方法有问题、一直提示 appkey 类型错误
     * Required argument appkey : expect [type: String]
     * 需要从这里 testGetAppList 获取 appkey
     */
    public function testGetNewUsers()
    {
        $this->markTestSkipped();

        $syncAPIClient = new SyncAPIClient(new ClientPolicy(
            '123456',
            '******',
            'gateway.open.umeng.com'
        ));

        $reqPolicy = new RequestPolicy(useHttps: true);

        $param = new UMengUAppGetNewUsersParam();
        $param->sdkStdResult['appkey'] = '******';
        $param->sdkStdResult['startDate'] = '2022-05-01';
        $param->sdkStdResult['endDate'] = '2022-05-10';
        $param->sdkStdResult['periodType'] = 'daily';

        $request = new APIRequest(
            new APIId($this->namespace, $this->name, $this->version),
            $param,
        );

        $res = $syncAPIClient->send($request, UMengUAppGetNewUsersResult::class, $reqPolicy);

        var_dump($res);
    }
}