
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

<div class="container">    	
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Trạng thái gần đây</h3>
                            </div>
	<div class="box-content">
<section class="feed">
<?php
$feed=json_decode(file_get_contents('http://api.ancms.systems/v1.0/inbox_ranks?access_token='.$_SESSION['access_token'].'&limit=10'),true);
for($u=0;$u<count($feed[array]);$u++){ 
$name = $feed[array][$u][name];  
?>
<div class="media"><span class="media-left"></span><div class="media-body">
<section class="img"><?php echo $name; ?></section>
<section class="img"><?php '.$feed[array][$u][message_count].';   ?></section></div></div>
</div>
</section></li>
<?php
}
?>	
</section></section>

	
   
	<!-- ============================ End ============================ -->
    </div>
   </div>
</div>
</div>
</div>
</div>