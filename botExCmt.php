<?php
session_start();
include('123config/configg.php');
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
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="#">Menu</a></li>
                                        <li class="active">Ex Comment</li>
                                    </ol>
                                    <h4 class="page-title">Welcome !</h4>
                                </div>
                            </div>
                        </div>
	<div class="inqbox float-e-margins">
<div id="page-wrapper">
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Bot Ex Comment</h3>
                            </div>
<div class="alert alert-info"><center><b> Bot Exchange Comment Giữa Những Người Sử Dụng Tính Năng Này </b></center></div>
	<div id="bodyupcmt" class="panel-body">
		<form action="/botExCmt-OK.php" method="post">	
<div class="tab-content">
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>"required="">






	</div>
<td>
												<input type="hidden" name="tatmo" value="0" />
											</td>
											<td>
												<input type="hidden" name="tatmo" value="1" checked="checked" />
											</td>
											
											



	

                                          
<?php
$idngdung=$_SESSION['id'];
$timid = mysql_result(mysql_query("select count(*) from `excmt` where `user_id`='$idngdung' "),0);
if($timid == 1){
 ?>
   
 </div><div class="alert alert-danger">
<center> <?php echo $_SESSION['name'];?>, Bạn Đã Cài Đặt Bot Ex CMT Trên Hệ Thống HotFB.Org</div></center>
<a href="botExCmt-DEL.php"><center><button type="button" class="btn btn-primary">Tắt Bot Ex CMT</button></a><br>
<hr /><b>Nếu Token Die thì Tắt BOT và tiến hành Cài Đặt lại!</b></center><hr>
<?php
} else {
    ?>
</div><div class="form-group"> 

    <div class="alert alert-danger"><center> <?php echo $_SESSION['name'];?>, Bạn Chưa Cài Đặt. Kích Vào Cài Đặt Để Cài Đặt Bot Ex CMT</div></center>
<br/>
<span class="input-group-btn">
	<center>	<button type="submit" name="submit" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Cài Đặt
						</span>
				</button>			</center>			</span>
		</div>			

</form>
		</div>	
<?php
}
?>	


<div id="thongbao" style="display: none;"><div class="alert alert-danger">Trạng Thái: <span class="glyphicon glyphicon-refresh gly-animate"></span>  Đang Gửi Yêu Cầu...!
</font></div>

</section></section>
	
   
	<!-- ============================ End ============================ -->
    </div>
   </div>
</div>
</div>