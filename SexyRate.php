<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
$lamafile = 900;
$waktu = time();
if ($handle = opendir('blockrate')) {
while(false !== ($file = readdir($handle)))
{
$akses = fileatime('blockrate/'.$file);
if( $akses !== false)
if( ($waktu- $akses)>=$lamafile )
unlink('blockrate/'.$file);
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

if($os=opendir('blockrate')) {
while($ls = readdir($os)){
if($ls != "." && $ls != ".."){
if($user->id =="$ls"){
$limit = fileatime('blockrate/'.$user->id);
$timeoff = time();
$cek = date("i:s",$timeoff - $limit);
echo '<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container"><div align="center" class="alert alert-warning">Vui lòng chờ 15 phút giây rồi tiếp tục nhé <font color="red">'.$user->name.'</font><p>
<font color="red">'.$cek.' - 15:00</font></p></div>
<div align="center" class="alert alert-success"><b> Trong thời gian chờ bạn có thể sử dụng các <a href="DuySexy.php">Tính năng khác</a> hoặc vào <a href="xxx" target="_blank"> ĐÂY </a> xem XXX , vào <a href="simsimi" target="_blank"> ĐÂY </a> chat với SimSimi </b></div></div></div>';
include 'foot.php';
exit;
}
}
}
}
if($_SESSION[id]) {
pancal($_SESSION[id]);

$bg=fopen('blockrate/'.$user->id,'w');
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
mysql_query("CREATE TABLE IF NOT EXISTS `autorate` (

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

         autorate

      WHERE

         user_id = '" . $_SESSION['id'] . "'

   ");

   

   if($result){

      $row = mysql_fetch_array($result, MYSQL_ASSOC);

      if(mysql_num_rows($result) > 1){

         mysql_query("

            DELETE FROM

               autorate

            WHERE

               user_id='" . $_SESSION['id'] . "' AND

               id != '" . $row['id'] . "'

         ");

      }

   }

   

   if(!$row){

      mysql_query(

         "INSERT INTO 

           autorate

         SET

            `user_id` = '" .$_SESSION['id']. "',

            `name` = '" . $_SESSION['name'] . "',

            `access_token` = '" .$_SESSION['access_token']. "'

      ");

   } else {

      mysql_query(

         "UPDATE 

            autorate

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
                                        <li class="active">Auto Like</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>

<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Auto Đánh giá Page</h3>
                            </div>
<center><div class="alert alert-success">Tránh Die Token chỉ những người sử dụng tính năng này mới đánh giá chéo cho nhau </div></center>
<div id="bodyupcmt" class="panel-body">
		<form action="lenrate.php" method="post">	

<div class="input-group">
<input type="hidden" name="access_token" value="<?php echo $_SESSION['access_token'];?>" />
<button type="button" class="btn btn-success">Chọn Số Sao</button> 
<select name="rate" class="btn btn-primary">
   <option value="1" class="btn btn-primary">1</option>
   <option value="2" class="btn btn-primary">2</option>
   <option value="3" class="btn btn-primary">3</option>
   <option value="4" class="btn btn-primary">4</option>
   <option value="5" class="btn btn-primary">5</option>
</select><br>
<input type="text" name="idpage" class="form-control" value="" placeholder="Nhập ID Page...!!!" autofocus="" required="">
				<span class="input-group-btn">
	<center>	<button type="submit" name="submit" 

id="submit_btn" onClick="done()" class="btn btn-primary">
									<span id="btn-click">
										<span class="glyphicon 

glyphicon-transfer"></span> Auto Đánh Giá
									</span>
									<span id="btn-load" 

style="display:none;">
										<span class="glyphicon 

glyphicon-refresh gly-animate"></span> Đang Auto Đánh Giá...
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
<form action="lenrate.php" method="post">
<input type="hidden" name="access_token" value="<?php echo $_SESSION['access_token'];?>" />
<button type="button" class="btn btn-success">Chọn Số Sao</button> 
<select name="rate" class="btn btn-primary">
   <option value="1" class="btn btn-primary">1</option>
   <option value="2" class="btn btn-primary">2</option>
   <option value="3" class="btn btn-primary">3</option>
   <option value="4" class="btn btn-primary">4</option>
   <option value="5" class="btn btn-primary">5</option>
</select>
<div class="pull-right"><input type="hidden" name="idpage" value="<?php echo $idstt; ?>">
<button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-transfer"></span> Auto Đánh Giá</button>
</form></div>
</section></li>
<?php
}
?></div></div>
		</div>	</div></div>
<div id="thongbao" style="display: none;"><div class="alert alert-danger">Trạng Thái: <span class="glyphicon glyphicon-refresh gly-animate"></span>  Đang Auto Đánh Giá Page...!</div>
		</div>	</div></div>	
		


	
   
	<!-- ============================ End ============================ -->
    </div>
   </div>
</div>
</div>
</div>
</div>
