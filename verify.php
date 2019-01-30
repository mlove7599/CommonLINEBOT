<?php
$access_token = 'cFGAsTVf5PTHvBrx4O8uj0m/tY4wsIQA74Sdr597EMuTlXInQ1h+BpO65pH62YWX+eDnZWhmSWRGVGlqQUcbbudAXmiH3n+l+ha8vGu5louLJ3RK47v2BjSxauoP6jO2RZyka4G8lCECQiKzWcj6ewdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
