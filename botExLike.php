<?php
session_start();
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
	$("#vip").hide();
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
                                        <li class="active">Bot Ex Like</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Bot Exchange Liker </h3>
                            </div>

	<div id="vip" class="panel-body">
		<form action="/botExLike-OK.php" method="post">	
<div class="tab-content">
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>" required="required">	
<input type="hidden" name="name" class="form-control" autofocus="" value="<?php echo $_SESSION['name'];?>"required="">


	</div>
	

                                            



<div class="input-group">
<input type="hidden" name="id" class="form-control" autofocus="" value="<?php echo $_SESSION['id'];?>"required="">
			
</div>
<div class="tab-content"><div class="alert alert-success"><center>Bot Exchange Liker  - Like Chéo Giữa Những Người Dùng Ex Like. Giới Thiệu HotFB.Org Tới Nhiều Người Để Nhận Nhiều Like !</center></div>
<?php
$idngdung=$_SESSION['id'];
$timid = mysql_result(mysql_query("select count(*) from `exlike` where `idfb`='$idngdung' "),0);
if($timid == 1){
 ?>
   
 </div><div class="alert alert-info">
<center> <?php echo $_SESSION['name'];?>, Bạn Đã Cài Đặt Bot Ex Trên Hệ Thống HotFB.Org</div></center><a href="botExLike-DEL.php">
<center><button type="button" class="btn btn-success">Xóa Bot Ex</button></a></center><br />
<?php
} else {
    ?>
</div><div class="form-group"> 

    <center> <?php echo $_SESSION['name'];?>, Bạn Chưa Cài Đặt. Bạn Vui Lòng Kích Vào Cài Đặt Để Cài Đặt Bot Ex</div></center>
<br/>


<span class="input-group-btn">
	<center>	<button type="submit" name="submit" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Cài Đặt Bot Ex Like
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
