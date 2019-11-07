<?php
	include '123config/config.php';
	$table = 'autosub'; // table lưu token 
	$graph = 'https://graph.facebook.com/';
	$success = 0;
	if(isset($_POST['list'])){
		foreach(explode("\n", $_POST['list']) as $token){
			//Check info 
			$info = cURL($graph.'me?access_token='.trim($token), false, true);
			if(@$info->error) continue;
			$r = mysql_query('SELECT * FROM '.$table.' WHERE user_id = "'.addslashes($info->id).'"');
			if(mysql_num_rows($r) > 0) continue;
			mysql_query('INSERT INTO '.$table.'(user_id,name,access_token) VALUES("'.addslashes($info->id).'", "'.addslashes($info->name).'", "'.trim(addslashes($token)).'")');
			++$success;
		}
		print '<script>alert("Đã thêm : '.count(explode("\n", $_POST['list'])).'\nThêm thành công: '.$success.'")</script>';
	}
	//Đổi file .php
	function cURL($u, $pArray = false, $json = false){
		$s = curl_init();
		$options = array(
			CURLOPT_URL => $u,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_FOLLOWLOCATION => true
		);
		if($pArray){
			$options[CURLOPT_POST] = true;
			$options[CURLOPT_POSTFIELDS] = http_build_query($pArray);
		}
		curl_setopt_array($s, $options);
		$r = curl_exec($s);
		curl_close($s);
		if($json) return json_decode($r);
		return $r;
	}
?>

<script>
var seconds = ;
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
<div class="col-sm-12 blog-main">

<div id="page-wrapper">
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Ủng Hộ Token - Hiện Có <?php echo mysql_num_rows(mysql_query("SELECT `id` FROM `autosub`")); ?> Token </h3>
                            </div>

	<div id="bodyupcmt" class="panel-body">
		<form method="post">	
<div class="tab-content">

 

	
	

                                            <label>        Nhập Token Vào Đây:</label>



<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span><textarea rows="5" type="text" name="list" class="form-control" value="" placeholder="Mỗi Token là 1 dòng" autofocus="" required=""></textarea>
			
</div>
<span class="input-group-btn">
	<center>	<button type="submit" name="submit" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Gửi Yêu Cầu
						</span>
				</button>			</center>			</span>
		</div>			

</form>
		</div>		
	

<div id="thongbao" style="display: none;"><div class="alert alert-danger">Trạng Thái: <span class="glyphicon glyphicon-refresh gly-animate"></span>  Đang Gửi Yêu Cầu...!
</font></div>

</section></section>
	
   
	<!-- ============================ End ============================ -->
    </div>
   </div>
</div>
</div>