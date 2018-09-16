<?php
extract($_POST);

$url = 'http://api.system32.kr:5000/create-block';

$ch = curl_init($url);

$jsonData = array(
    'center' => "$center",
    'admin' => "$admin",
    'code' => "$code",
    'pay' => "$pay",
    'member' => "$member"
);

$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

$response= curl_getinfo($ch);
#
print "$result";
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header = substr($response, 0, $header_size);
$body = substr($response, $header_size);

$array = json_decode($body);
print "$array";
#$json = file_get_contents('api.system32.kr:5001/create-block');
#$info = curl_getinfo($ch);
#print_r( $info );
#$array = json_decode($json);

#$urlPoster=array();
#foreach ($array as $value) { 
#    $urlPoster[]=$value->urlPoster;
#}

#print_r($urlPoster);
#?>