<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $host = '13.67.107.10:3306';
    $user = 'root';
    $pw = '1qaz2wsx#EDC';
    $dbName = 'hk';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    extract($_POST);
    
    $q = "INSERT INTO data ( center, admin, code, pay, member ) VALUES ( '$center', '$admin', '$code', '$pay', '$member' )";
    $mysqli->query( $q);
    
    $mysqli->close();
    $data = array('center' => "$center",'admin' => "$admin",'code' => "$code",'pay' => "$pay",'member' => "$member");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.system32.kr:5000/create-block");
    curl_setopt($ch, CURLOPT_POST, 1);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonArray)); 
    echo ("<script>alert('Successful Your Process');location.href='/8C6976E5B5410415BDE908BD4DEE15DFB167A9C873FC4BB8A81F6F2AB448A918.php';</script>")
?>