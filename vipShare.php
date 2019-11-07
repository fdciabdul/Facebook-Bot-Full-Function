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
                                        <li><a href="#">HotFB.Org</a></li>
                                        <li class="active">Bot Vip Share</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>
	<div class="inqbox float-e-margins">
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Bot Vip Share </h3>
                            </div>
	<div id="bodyupcmt" class="panel-body">
	<form action="/vipShare-OK.php" method="post">	
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>" required="">
<div class="alert alert-success"><b> <center> Nhập Token của nick phụ hoặc fanpage của bạn ( token sẽ share bài viết của bạn ).  Chỉ Sử dụng  Token lấy từ <a href="http://HotFB.Org/token" target="_blank"> HotFB.Org </a> <br><button type="button" class="btn btn-success"><a href="?Lady=token-page" target="_blank"> Lấy Token Page </a></button></b></div>
<input type="text" name="access_token1" class="form-control" autofocus="" placeholder=" Token nick phụ hoặc Token fanpage">	<br>
<input type="text" name="access_token2" class="form-control" autofocus="" placeholder=" Token nick phụ hoặc Token fanpage"><br>
<input type="text" name="access_token3" class="form-control" autofocus="" placeholder=" Token nick phụ hoặc Token fanpage"><br>
<input type="text" name="access_token4" class="form-control" autofocus="" placeholder=" Token nick phụ hoặc Token fanpage"><br>
<input type="text" name="access_token5" class="form-control" autofocus="" placeholder=" Token nick phụ hoặc Token fanpage">

<td>
												<input type="hidden" name="tatmo" value="0" />
											</td>
											<td>
												<input type="hidden" name="tatmo" value="1" checked="checked"/>
											</td>
											
											<?php
$idngdung=$_SESSION['id'];
$timid = mysql_result(mysql_query("select count(*) from `share` where `user_id`='$idngdung' "),0);
if($timid == 1){
 ?>
   
 </div><div class="alert alert-danger">
<center> <?php echo $_SESSION['name'];?>, Bạn Đã Cài Đặt Vip Share Trên Hệ Thống HotFB.Org</div></center><a href="vipShare-DEL.php">
<center><button type="button" class="btn btn-success">Xóa Bot Vip Share</button></a></center><br />
<?php
} else {
    ?>
<div class="alert alert-danger"> 

    <center> <?php echo $_SESSION['name'];?>, Bạn Chưa Cài Đặt. Bạn Vui Lòng Kích Vào Cài Đặt Để Cài Đặt Vip Share</div></center>
</div>
	<center>	<button type="submit" name="submit" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Gửi yêu cầu
						</span>
				</button>			</center>			
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