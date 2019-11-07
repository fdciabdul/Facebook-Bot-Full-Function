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
$target =  $_POST['target']; 
$noidung =  $_POST['noidung']; 
$stat = json_decode(auto('https://graph.beta.facebook.com/'.$target.'/feed?fields=id&limit='.$limit.'&access_token='.$access_token),true);
for ($i = 1; $i <= count($stat[data]); $i++) {
    if (!ereg($stat[data][$i - 1][id], $log)) {
        auto('https://graph.beta.facebook.com/'.$stat[data][$i-1][id].'/comments?method=post&message='.urlencode(($noidung.'')).'&access_token='.$access_token);
    } 
}
mbalek('/DuySexy.php?Lady=bomCMT&i='.urlencode('Thành Công !!!'));

function mbalek($x){
print '<meta http-equiv="refresh" content="0;url='.$x.'"/>';
}
?>