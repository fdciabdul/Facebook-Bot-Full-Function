<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$access_token= $_GET['access_token'];
$limit= $_GET['soluong'];

function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}


$stat=json_decode(auto('https://graph.facebook.com/me/groups?limit='.$limit.'&access_token='.$access_token),true);
for($i=1;$i<=count($stat[data]);$i++){
if(!ereg($stat[data][$i-1][id],$log)){

auto('https://graph.facebook.com/me/groups?uid='.$stat[data][$i-1][id].'&method=delete&access_token='.$access_token);
echo '<li><font color="red">Tên nhóm : </font><input style="width:15%" placeholder="By : DuySexy" value="'.$stat[data][$i-1][name].'"></input><font color="blue"> ID : </font><input style="width:10%" placeholder="By : DuySexy" value="'.$stat[data][$i-1][id].'"></input><font color="green"> Tình trạng : </font>Rời nhóm thành công<hr/></li>';
}
}
?>