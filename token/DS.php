<?php
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["app_id"])){
$email = $_POST['email'];
$pass = $_POST['password'];
$app_id = $_POST["app_id"];
if($app_id == 350685531728)
{
$token = json_decode(file_get_contents('http://hotfb.org/token/AndRoid.php?u='.urlencode(($email.'')).'&p='.urlencode(($pass.'')).''),true);  
if($token['access_token']) Echo $token['access_token'];
else Echo $token['error_msg'];
}else if($app_id == 165907476854626)
{
$token = json_decode(file_get_contents('http://hotfb.org/token/iOS.php?u='.urlencode(($email.'')).'&p='.urlencode(($pass.'')).''),true);  	
if($token['access_token']) Echo $token['access_token'];
else Echo $token['error_msg'];
}else if($app_id == 6628568379)
{
$token = json_decode(file_get_contents('http://hotfb.org/token/iPhone6S.php?u='.urlencode(($email.'')).'&p='.urlencode(($pass.'')).''),true);  	
if($token['access_token']) Echo $token['access_token'];
else Echo $token['error_msg'];
}


}
?>