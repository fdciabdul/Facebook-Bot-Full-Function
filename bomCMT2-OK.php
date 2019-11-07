<?php

function auto($url)
{
    $data = curl_init();
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
}
$access_token = $_POST['access_token']; 
$limit =  $_POST['limit']; 
$id =  $_POST['idpost']; 
$noidung =  $_POST['noidung']; 
for($a=0; $a<$limit; $a++){
        auto('https://graph.beta.facebook.com/'.$id.'/comments?method=post&message='.urlencode(($noidung.'')).'&access_token='.$access_token);
    } 
mbalek('/DuySexy.php?Lady=bomCMT2&i='.urlencode('Th脿nh C么ng !!!'));

function mbalek($x){
print '<meta http-equiv="refresh" content="0;url='.$x.'"/>';
}
?>