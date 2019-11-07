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
                                        <li class="active">Bot Auto Trả Lời Tin Nhắn Tùy ND</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Auto Reply Inbox Tùy Nội Dung</h3>
                            </div>

	<div id="bodyupcmt" class="panel-body">
		<form action="/botInboxRandom-OK.php" method="post">	
<div class="tab-content"><div class="alert alert-success"> <center>Bot Tự Động Trả Lời Tin Nhắn Nội Dung Tùy Bạn Đặt, Hoàn Toàn Không Spam như các trang web khác</center> </div>
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>"required="">	


<td>
												<input type="hidden" name="tatmo" value="0" />
											</td>
											<td>
												<input type="hidden" name="tatmo" value="1" checked="checked"/>
											</td>
											
											


</div>


	
	

                                            <label>        Nhập Nội Dung Inbox</label>



<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span><textarea rows="5" type="text" name="noidung" class="form-control" value="Hay" placeholder="Nhập Nội Dung Vào Đây!" autofocus="" required=""></textarea>
			
</div>
<?php
$idngdung=$_SESSION['id'];
$timid = mysql_result(mysql_query("select count(*) from `inbox` where `user_id`='$idngdung' "),0);
if($timid == 1){
 ?>
   
 </div><div class="alert alert-danger">
<center> <?php echo $_SESSION['name'];?>, Bạn Đã Cài Đặt Bot Inbox Random Trên Hệ Thống HotFB.Org</div></center><a href="botIBRandom-DEL.php">
<center><button type="button" class="btn btn-success">Xóa Bot Inbox Random</button></a></center><br />
<?php
} else {
    ?>
<div class="alert alert-danger"> 

    <center> <?php echo $_SESSION['name'];?>, Bạn Chưa Cài Đặt. Bạn Vui Lòng Kích Vào Cài Đặt Để Cài Đặt Bot Inbox</div></center>
</div>
<span class="input-group-btn">
	<center>	<button type="submit" name="submit" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Gửi yêu cầu
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