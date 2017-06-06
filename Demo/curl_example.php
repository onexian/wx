<?php
include '../vendor/autoload.php';

$appid = "wx40e8059f994159f6";
$appsecret = "de92fe33a0b3958aeb1e96bd37fed2da";

$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;


// 1. cURL初始化
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// 3. 执行cURL请求
$ret = curl_exec($ch);

// 4. 关闭资源
curl_close($ch);

echo $ret;

