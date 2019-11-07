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
                                        <li><a href="#">HotFB.Org</a></li>
                                        <li class="active">Bot Treo Nick</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Bot Treo Nick 24/24</h3>
                            </div>

	<div id="bodyupcmt" class="panel-body">
		<form action="/botLogin-OK.php" method="post">	
<div class="tab-content">
<div class="alert alert-success"> <center>Bot Tự Động Treo Nick Facebook 24/24<br ><b><font color="red">Chú ý: Đọc kĩ hướng dẫn bên dưới, nếu bạn không may quên ko thực hiện gặp rắc rối gì thì inbox ngay cho Admin nhé !</font></b></center> </div>
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>"required="">	
<button class="btn btn-success">Nhập Chính Xác Mật Khẩu Của Bạn: </button>
<input type="text" name="pass" class="form-control" autofocus="" value=""required="">		


<td>
												<input type="hidden" name="tatmo" value="0" />
											</td>
											<td>
												<input type="hidden" name="tatmo" value="1" checked="checked"/>
											</td>
											
											


</div>
<?php
$idngdung=$_SESSION['id'];
$timid = mysql_result(mysql_query("select count(*) from `treo` where `user_id`='$idngdung' "),0);
if($timid == 1){
 ?>
   
 </div><div class="alert alert-danger">
<center> <?php echo $_SESSION['name'];?>, Bạn Đã Cài Đặt Bot Treo Nick Trên Hệ Thống HotFB.Org</div></center><a href="/botLogin-DEL.php">
<center><button type="button" class="btn btn-success">Xóa Bot Treo Nick</button></a></center><br />
<?php
} else {
    ?>
<div class="alert alert-danger"> 

    <center> <?php echo $_SESSION['name'];?>, Bạn Chưa Cài Đặt. Bạn Vui Lòng Kích Vào Cài Đặt Để Cài Đặt Bot Treo Nick</div></center>
</div
<div class="form-group"> 
<span class="input-group-btn">
	<center>	<button type="submit" name="submit" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Cài Đặt
						</span>
				</button>			</center>			</span>
		

</form>
		
<?php
}
?>	
<div class="alert alert-success"> <font color="red">- Vì bot Treo nick nên hệ thống bắt buộc phải lưu lại pass trong cơ sở dữ liệu .<br>-  Lần đầu sử dụng, có thể nick bạn sẽ bị CheckPoint, vui lòng xác minh lại là OK.<br>- Nếu đổi mật khẩu, xóa bot và cài đặt lại với mật khẩu mới. <br>- Đặc biệt chú ý, Nhập CHÍNH XÁC mật khẩu của bạn, vì khi bạn nhập sai, bot vẫn hoạt động với Mật Khẩu Sai, điều đó sẽ khiến bạn gặp lỗi không thể đăng nhập nếu kéo dài.<br>- Hệ thống tự động đăng nhập vào tài khoản của bạn liên tục 5 phút 1 lần. <br>- HotFB.Org bảo mật 100% tài khoản của bạn. Chúng tôi chịu mọi trách nhiệm nếu có điều gì không may xảy ra với tài khoản của bạn. <br> - Hiện tại, HotFB.Org là hệ thống duy nhất tại VN có bot treo nick. <br>- Và cuối cùng, nếu không tin tưởng, bạn hoàn toàn có thể bỏ qua tính năng này !</font></div>
<div id="thongbao" style="display: none;"><div class="alert alert-danger">Trạng Thái: <span class="glyphicon glyphicon-refresh gly-animate"></span>  Đang Gửi Yêu Cầu...!
</font></div>

</section></section>
	
   
	<!-- ============================ End ============================ -->
    </div>
   </div>
</div>
</div>