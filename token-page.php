<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
error_reporting(0);
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
<div id="bodyupcmt" class="panel-body">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span>Token Page Của Bạn </h3>
                            </div>
</div>
<section class="feed">
<?php
$feed=json_decode(file_get_contents('https://graph.fb.me/me/accounts?access_token='.$_SESSION['access_token'].''),true);
for($u=0;$u<count($feed[data]);$u++){ 
$idstt = $feed[data][$u][id];  
?>
<li class="list-group-item clearfix">
<section class="status">
<div class="media"><span class="media-left"><section class="image">
<b>Tên Page: <font color="red"><b><?php echo $feed[data][$u][name]; ?></b></font>
</section></span><br>
<section class="message"><div class="media-body">
Mã Token: <textarea cols="200" rows="2"><?php echo $feed[data][$u][access_token]; ?></textarea>
</section>
</div>
</section></li>
<?php
}
?></div></div>
		
		


	
   
	<!-- ============================ End ============================ -->
    </div>
   </div>
</div>
</div>
</div>
</div>
