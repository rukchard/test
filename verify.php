<?php
$access_token = 'J73lgXSGNFbuWW/4K6sbssWqnDgRaW3Oyf2ygrOWciqLTfsMRLZm982PmiR9zKrEbWXVMd8zNkwSFXsaGeATLPPib36fjtFAVFn5rs2XMN0DbpP9eeRbxjjOpV/7RQgwyedjNvJG178j7cWxKvCV+QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;