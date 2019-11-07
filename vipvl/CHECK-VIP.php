<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>ID VIP</title>
<?php
include'laytoken.php';
?>

<?
$int=intval($_GET['id']);
$sql=mysql_query("SELECT `id` FROM `viptt` WHERE `id`='$int' ");
$row=mysql_fetch_assoc($sql);
$post = mysql_fetch_array(mysql_query("select * from `viptt` WHERE  `id` = '$int' LIMIT 1"));
$tong = mysql_result(mysql_query("SELECT COUNT(*) FROM `viptt`"), 0);
$res = mysql_query("SELECT * FROM `viptt` LIMIT $tong");
echo'<center><font size="4" color="red">Số ID : '.$tong.'</font></center>';
while ($post = mysql_fetch_array($res)){
$postpuaru = 'https://graph.facebook.com/'.$post['idfb'].'';
$puaru = auto($postpuaru);
$arraypuaru = json_decode($puaru, true);
$puaruid = $arraypuaru[name];
$getstt = 'https://graph.facebook.com/'.$post['idfb'].'/feed?limit=1&access_token='.$access_token;
$infopuaru = auto($getstt);
$arraystt = json_decode($infopuaru, true);
$demlike = $arraystt[data][0][likes][count];
$noidung = $arraystt[data][0][message];
echo '<center> <b>Thông tin của '.$puaruid.': </b> </br><img src="https://graph.facebook.com/'.$post['idfb'].'/picture" alt="'.$post['idfb'].'"/></br>Tên: '.$post['name'].' <br>ID: '.$post['idfb'].' </br> Ngày Đã Mua: '.$post['time'].'</br>Hạn Mua: '.$post['han'].' </br><b>STT Mới Nhất</b>: '.$noidung.' </br> <b>Like STT Đó: '.$demlike.' </b> </center>';
if(isset($_GET['active'])) { 
mysql_query("DELETE FROM `viptt` WHERE `id` = $_GET[id] ");}

echo'<center> </br><b><a href="?id='.$post['id'].'&amp;active"> ---> Xóa VIP <--- </a></b><br></center> ';

echo'<center> <b>Kết Thúc Thông Tin Của : '.$post['name'].'</b><hr></br></center> ';
}
function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER,1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>