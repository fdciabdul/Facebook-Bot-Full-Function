<?php
echo'<meta http-equiv="content-type" content="text/html; charset=UTF-8">';
include'123config/configg.php';
   mysql_query("CREATE TABLE IF NOT EXISTS `cnn` (
      `stt` int(32) NOT NULL AUTO_INCREMENT,
      `id` varchar(32) NOT NULL,
      `idcnn` varchar(32) NOT NULL,
      `ten` varchar(255) NOT NULL,
      `noidung` varchar(255) NOT NULL,
      `token` varchar(255) NOT NULL,
      `thoigian` varchar(255) NOT NULL,
      `tatmo` INT( 11 ) NOT NULL DEFAULT '1',
      PRIMARY KEY (`stt`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");
function auto($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
   function mbalek($x){
print '<meta http-equiv="refresh" content="0;url='.$x.'"/>';
}

   
$token = $_POST['access_token'];
$id = $_POST['id'];
$idcnn = $_POST['idcnn'];
$noidung = $_POST['noidung'];
$thoigian = $_POST['thoigian'];
$tatmo = $_POST['tatmo'];

$show = auto('https://graph.facebook.com/'.$idcnn.'?access_token='.$token);
$showid = json_decode($show, true);
if (!isset($showid['id'])){
mbalek('/DuySexy.php?Lady=BotCNN&i='.urlencode('ID ko hợp lệ hoặc token đã hết hạn'));
exit;}

if(empty($noidung))
{
$noidung = 'Chúc '.htmlspecialchars($showid['name'], ENT_QUOTES).' ngủ ngon :) và mơ siu đẹp nhé :) <3';
}

$data = mysql_query("SELECT * FROM cnn WHERE id = '".$id."' AND idcnn = '".$idcnn."' ");
if(mysql_num_rows($data) >= 2){
mbalek('/DuySexy.php?Lady=BotCNN&i='.urlencode('1 ID chỉ chúc 2 lần hoy'));
exit;}

 mysql_query(
         "INSERT INTO
         cnn
         SET
         `id` = '".$id."',
         `idcnn` = '".$idcnn."',
         `ten` = '".htmlspecialchars($showid['name'], ENT_QUOTES)."',
         `noidung` = '".$noidung."',
         `token`= '".$token."',
         `thoigian` = '".$thoigian."',
         `tatmo` = '".$tatmo."' ");
         
mbalek('/DuySexy.php?Lady=BotCNN&i='.urlencode('Thêm thành Công !!!'));
         
         
         
         
         


?>