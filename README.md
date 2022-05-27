# 友盟SDK

## 文档

[open-api](https://developer.umeng.com/open-api/guide)

## 安装

```
composer require kydev/umeng-sdk
```

## 使用

```php
use KY\UMeng\AppTrack\UMengAppTrackAppDownload;
use KY\UMeng\Client\APIId;
use KY\UMeng\Client\APIRequest;
use KY\UMeng\Client\Policy\ClientPolicy;
use KY\UMeng\Client\Policy\RequestPolicy;
use KY\UMeng\Client\SyncAPIClient;
use KY\UMeng\UApp\UMengUAppGetDailyDataParam;
use KY\UMeng\UApp\UMengUAppGetDailyDataResult;

$syncAPIClient = new SyncAPIClient(new ClientPolicy(
    '123',
    'xxx',
    'gateway.open.umeng.com'
));

$reqPolicy = new RequestPolicy(useHttps: true);

$param = new UMengUAppGetDailyDataParam();
$param->key = 'xxx';
$param->date = '2022-05-01';

$request = new APIRequest(
    new APIId('com.umeng.uapp', 'umeng.uapp.getDailyData', 1),
    $param
);

$res = $syncAPIClient->send($request, UMengUAppGetDailyDataResult::class, $reqPolicy);

var_dump($res);
```
