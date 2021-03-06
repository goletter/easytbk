<?php

require '../vendor/autoload.php';


$client = \Goletter\EasyTBK\Factory::jingdong([
    'app_key' => 'JD_APP_KEY',
    'app_secret' => 'JD_APP_SECRET',
    'format' => 'json'
]);

$request = new \Goletter\EasyTBK\JingDong\Request\JdUnionGoodsJingfenQueryRequest();
$request->setEliteId(1);
$request->setPageIndex(1);
$request->setPageSize(20);
print_r($client->execute($request));