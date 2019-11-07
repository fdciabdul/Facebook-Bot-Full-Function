<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<?php
include 'data.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
$name=$_POST['name'];
$id=$_POST['id'];
$han=$_POST['han'];
$cmt=$_POST['likecmt'];
$maxlike=$_POST['maxlike'];
$postnobita = 'https://graph.facebook.com/'.$id.'';
$nobita = auto($postnobita);
$arraynobita = json_decode($nobita, true);
$setid = $arraynobita[id];
$time=date('H:i:s Y-m-d');

mysql_query("CREATE TABLE IF NOT EXISTS `vip` (
      `name` varchar(1024) NOT NULL,

      `id` int(11) NOT NULL AUTO_INCREMENT,

      `idfb` varchar(1024) NOT NULL,

      `time` varchar(1024) NOT NULL,

      `han` varchar(1024) NOT NULL,
`cmt` varchar(1024) NOT NULL,
`maxlike` varchar(1024) NOT NULL,

      PRIMARY KEY (`id`)

      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

   ");
mysql_query("INSERT INTO `vip` (`name`,`idfb`,`time`,`han`,`cmt`,`maxlike`) VALUES
('".$name."','".$id."','".$time."','".$han." - ngày','".$cmt."','".$maxlike."')");
echo' '.$name.' - '.$id.' - '.$time.' - '.$han.' - '.$cmt.' - '.$maxlike.'';

function auto($url) {
   $ch = curl_init();
   curl_setopt_array($ch, array(
      CURLOPT_CONNECTTIMEOUT => 5,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL            => $url,
      )
   );
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
}


?>