<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$access_token =  htmlentities($_POST['access_token']); 
$limit= $_GET['soluong'];

function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}


$stat=json_decode(auto('https://graph.facebook.com/me/likes?limit='.$limit.'&access_token='.$access_token),true);
for($i=1;$i<=count($stat[data]);$i++){
if(!ereg($stat[data][$i-1][id],$log)){

auto('https://graph.beta.facebook.com/'.$stat[data][$i-1][id].'/likes?method=delete&access_token='.$access_token);
echo '<li><font color="red">Fanpage: </font><input style="width:15%" placeholder="By : DuySexy" value="'.$stat[data][$i-1][name].'"></input><font color="blue"> ID : </font><input style="width:10%" placeholder="By : DuySexy" value="'.$stat[data][$i-1][id].'"></input><font color="green"> Tình trạng : </font>Đã Bỏ thích<hr/></li>';
}
}
?>