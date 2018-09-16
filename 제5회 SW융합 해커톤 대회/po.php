<?php
 $data = array('center' => "$center",'admin' => "$admin",'code' => "$code",'pay' => "$pay",'member' => "$member");
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "http://api.system32.kr:5000/create-block");
 curl_setopt($ch, CURLOPT_POST, 1);
 //curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
 curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonArray)); 
 $result = curl_exec($ch);
 $result_array = json_decode($result, true);
 echo print_r($result_array);
?>
<?
$data = file_get_contents('php://input'); 
if($data == '"{\"HDR\":{\"VER\":\"1.0\"}, \"BODY\":[{\"APP_ID\":\"TEST\", \"APP_NM\":\"TESST\"}]}"'){
 echo "OK";
}else{
 echo "NO";
}

?>