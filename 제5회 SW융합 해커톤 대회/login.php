<?php
include "dbconfig.php";
session_start();
if(isset($_POST["loginID"])&&isset($_POST["loginPASS"]))
{
    if($id=signin($_POST["loginID"],$_POST["loginPASS"])){
        $_SESSION["id"]=$id;
        die("<script>alert('Welcome Admin');location.href='/8C6976E5B5410415BDE908BD4DEE15DFB167A9C873FC4BB8A81F6F2AB448A918.php';</script>");
    }else{
        //echo signin($_POST["loginID"],$_POST["loginPASS"]);
        die("<script>alert('Login Failed');history.go(-1);</script>");
    }
}else{
    die("<script>alert('Invailed Parameter');history.go(-1);</script>");
}
echo "WTF";
?>