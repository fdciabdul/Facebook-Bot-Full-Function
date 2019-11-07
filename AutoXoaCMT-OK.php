<?php
$access_token= $_POST['access_token'];
$limit = $_POST['soluong'];
$postid = $_POST['postid'];


function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}


$ds=json_decode(auto('https://graph.facebook.com/'.$postid.'/comments?limit='.$limit.'&access_token='.$access_token);
for($i=1;$i<=count($ds[data]);$i++){
auto('https://graph.facebook.com/'.$ds[data][$i][id].'?method=delete&access_token='.$access_token);
}

mbalek('/DuySexy.php?Lady=AutoXoaCMT&i='.urlencode('Xóa Status thành công!!!'));

function mbalek($x){
print '<meta http-equiv="refresh" content="0;url='.$x.'"/>';
}

?>
