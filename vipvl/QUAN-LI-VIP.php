<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>ID VIP</title>
<?php
include 'laytoken.php';
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
echo '<center> Tên: '.$post['name'].' </br>ID: '.$post['idfb'].' </br> Ngày Đã Mua: '.$post['time'].'</br>Hạn Mua: '.$post['han'].'  </center>';
if(isset($_GET['active'])) { 
mysql_query("DELETE FROM `viptt` WHERE `id` = $_GET[id] ");}

echo'<center><b><a href="?id='.$post['id'].'&amp;active"> ---> Xóa <---</a></b></br></br></center> ';

}

?>