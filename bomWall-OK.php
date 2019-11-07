<?php
header( 'Content-Type: text/html; charset=UTF-8' );
$access_token= $_POST['access_token'];
$limit= $_POST['soluong'];
$id= $_POST['id'];
$message= $_POST['noidung'];
auto('https://graph.facebook.com/'.$id.'/feed?message='.urlencode($message).'&access_token='.$access_token.'&method=post');
mbalek('/DuySexy.php?Lady=bomWall&i='.urlencode('Boom Wall Thành Công !!!'));


function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
function mbalek($x){
print '<meta http-equiv="refresh" content="0;url='.$x.'"/>';
}
?>