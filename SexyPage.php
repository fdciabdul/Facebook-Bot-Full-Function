<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
$lamafile = 369;
$waktu = time();
if ($handle = opendir('blockpage')) {
while(false !== ($file = readdir($handle)))
{
$akses = fileatime('blockpage/'.$file);
if( $akses !== false)
if( ($waktu- $akses)>=$lamafile )
unlink('blockpage/'.$file);
}
closedir($handle);
}
function get_html($url) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}
$token = $_SESSION['access_token'];
if($token){
$graph_url ="https://graph.facebook.com/me?fields=id,name&access_token=" . $token;
$user = json_decode(get_html($graph_url));
if ($user->error) {
if ($user->error->type== "OAuthException") {
session_destroy();
header('Location: DuySexy.php?i=Token hết hạn. Vui lòng lấy lại !');
}
}
}
else{
header('Location: DuySexy.php');
}

if($os=opendir('blockpage')) {
while($ls = readdir($os)){
if($ls != "." && $ls != ".."){
if($user->id =="$ls"){
$limit = fileatime('blockpage/'.$user->id);
$timeoff = time();
$cek = date("i:s",$timeoff - $limit);
echo '<div class="content-page">
                <!-- Start content -->
                <div class="content"><div class="container"<div align="center" class="alert alert-warning">Vui lòng chờ 6 phút 9 giây rồi tiếp tục nhé <font color="red">'.$user->name.'</font><p>
<font color="red">'.$cek.' - 06:09</font></p></div> 
<div align="center" class="alert alert-success"><b> Trong thời gian chờ bạn có thể sử dụng các <a href="DuySexy.php">Tính năng khác</a> hoặc vào <a href="xxx" target="_blank"> ĐÂY </a> xem XXX , vào <a href="simsimi" target="_blank"> ĐÂY </a> chat với SimSimi </b></div></div></div></div>';
include 'footer.php';
exit;
}
}
}
}
if($_SESSION[id]) {
pancal($_SESSION[id]);

$bg=fopen('blockpage/'.$user->id,'w');
fwrite($bg,1);
fclose($bg);

}
function pancal($id) { for($i=1;$i<4;$i++){
_req('http://'.$_SERVER[HTTP_HOST].'/lenlike.php?DS='.$id);

}

print '';
}

function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
)
);
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
mysql_query("CREATE TABLE IF NOT EXISTS `autopage` (

      `id` int(11) NOT NULL AUTO_INCREMENT,

      `user_id` varchar(32) NOT NULL,

      `name` varchar(32) NOT NULL,

      `access_token` varchar(255) NOT NULL,

      PRIMARY KEY (`id`)

      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

   ");
$row = null;

   $result = mysql_query("

      SELECT

         *

      FROM

         autopage

      WHERE

         user_id = '" . $_SESSION['id'] . "'

   ");

   

   if($result){

      $row = mysql_fetch_array($result, MYSQL_ASSOC);

      if(mysql_num_rows($result) > 1){

         mysql_query("

            DELETE FROM

               autopage

            WHERE

               user_id='" . $_SESSION['id'] . "' AND

               id != '" . $row['id'] . "'

         ");

      }

   }

   

   if(!$row){

      mysql_query(

         "INSERT INTO 

           autopage

         SET

            `user_id` = '" .$_SESSION['id']. "',

            `name` = '" . $_SESSION['name'] . "',

            `access_token` = '" .$_SESSION['access_token']. "'

      ");

   } else {

      mysql_query(

         "UPDATE 

            autopage

         SET

            `access_token` = '" . $_SESSION['access_token'] . "'

         WHERE

            `id` = " . $row['id'] . "

      ");

}
?>
<script type="text/javascript" src="js/jquery-1.8.1.js"></script>
<script src="js/transition.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoke.min.js"></script>
<script src="js/require.js"></script>
<script>
var seconds = <?php
echo $countdown;?>;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = "<h3>--> Next Submit: Wait  " + minutes + ":" + remainingSeconds + "  Seconds <--</h3>";
    if (seconds <= 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "<h3>--> Next Submit: READY....! <--</h3>";
    } else {
        seconds--;
    }
}
 
var countdownTimer = setInterval('secondPassed()', 1000);
</script>
<script type="text/javascript">
function done()
	{
	$("#bodyupcmt").hide();
	$("#thongbao").show();
	}
</script>

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="#">HotFB.Org</a></li>
                                        <li class="active">Auto Like Page</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>

<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Auto Like Page</h3>
                            </div>
<div id="bodyupcmt" class="panel-body">
		<form action="lenlike.php" method="post">	

<div class="input-group">
<input type="hidden" name="access_token" value="<?php echo $_SESSION['access_token'];?>" />
<input type="text" name="postid" class="form-control" value="" placeholder="Nhập ID Page...!!!" autofocus="" required="">
				<span class="input-group-btn">
	<center>	<button type="submit" name="submit" 

id="submit_btn" onClick="done()" class="btn btn-primary">
									<span id="btn-click">
										<span class="glyphicon 

glyphicon-transfer"></span> Auto Like
									</span>
									<span id="btn-load" 

style="display:none;">
										<span class="glyphicon 

glyphicon-refresh gly-animate"></span> Đang Auto Like..
									</span>


									</button>			</center>			</span>
		</div>			

</form>
</div>
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span>Page Của Bạn </h3>
                            </div>
	</div>
<section class="feed">
<?php
$feed=json_decode(file_get_contents('https://graph.fb.me/me/accounts?access_token='.$_SESSION['access_token'].''),true);
for($u=0;$u<count($feed[data]);$u++){ 
$idstt = $feed[data][$u][id];  
?>
<li class="list-group-item clearfix"><section class="status">
<div class="media"><span class="media-left"><section class="image">
<b>Page:</b>
</section></span><div class="media-body">
<section class="message"><font color="red"><b><?php echo $feed[data][$u][name]; ?></b></font></section></div></div>
<form action="lenlike.php" method="post">
<input type="hidden" name="access_token" value="<?php echo $_SESSION['access_token'];?>" />
<div class="pull-right"><input type="hidden" name="postid" value="<?php echo $idstt; ?>">
<button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-transfer"></span> Auto Like</button>
</form></div>
</section></li>
<?php
}
?></div></div>
		</div>	</div></div>
<div id="thongbao" style="display: none;"><div class="alert alert-danger">Trạng Thái: <span class="glyphicon glyphicon-refresh gly-animate"></span>  Đang Auto Like Page...!</div>
		</div>	</div></div>
		


	
   
	<!-- ============================ End ============================ -->
    </div>
   </div>
</div>
</div>
</div>
</div>
