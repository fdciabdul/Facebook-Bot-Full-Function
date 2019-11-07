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
$access_token =  htmlentities($_POST['access_token']); 
$total =  htmlentities($_POST['total']); 
$target =  htmlentities($_POST['target']); 
$type =  htmlentities($_POST['type']);

$stat = json_decode(auto('https://graph.beta.facebook.com/'.$target.'/feed?fields=id&limit='.$total.'&access_token=' . $access_token), true);
for ($i = 1; $i <= count($stat[data]); $i++) {
    if (!ereg($stat[data][$i - 1][id], $log)) {
        auto('https://graph.beta.facebook.com/' . $stat[data][$i - 1][id] . '/reactions?method=post&type='.$type.'&access_token=' . $access_token);
    } else {
        $jembut = json_decode(auto('https://graph.beta.facebook.com/' . $stat[data][$i - 1][id] . '/comments?fields=id&access_token=' . $access_token), true);
        for ($e = 1; $e <= count($jembut[data]); $e++) {
            if (!ereg($jembut[data][$e - 1][id], $log2)) {
                auto('https://graph.beta.facebook.com/' . $jembut[data][$e - 1][id] . '/reactions?method=post&type='.$type.'&access_token=' . $access_token);
            }
        }
    }
}

mbalek('/DuySexy.php?Lady=bomReact&i='.urlencode('Th脿nh C么ng !!!'));

function mbalek($x){
print '<meta http-equiv="refresh" content="0;url='.$x.'"/>';
}
?>