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
                                        <li class="active">Bot Cho Sao Vàng </li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Bot Cho Bạn Thân</h3>
                            </div>

	<div id="bodyupcmt" class="panel-body">
		<form action="/botSV-OK.php" method="post">	
<div class="tab-content"><div class="alert alert-success"><center>Bot Chỉ Like + Bày Tỏ Cảm Xúc Cho Những Ai Bạn Đặt Là Bạn Thân </center><center>Chọn Bạn Thân Để Bot Hoạt Động <br><img src="images/sv.PNG" alt="SV" /></center></div>
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>"required="">	
<button type="button" class="btn btn-success">Chọn Cảm Xúc</button> 
<select name="type" class="btn btn-primary">   <option value="LIKE">BOT LIKE</option>
   <option value="LOVE" class="btn btn-primary">LOVE ( YÊU )</option>
   <option value="WOW" class="btn btn-primary">WOW ( NGẠC NHIÊN )</option>
   <option value="HAHA" class="btn btn-primary">HAHA ( CƯỜI )</option>
   <option value="ANGRY" class="btn btn-primary">ANGRY ( PHẪN NỘ )</option>
   <option value="SAD" class="btn btn-primary">SAD ( BUỒN )</option>
   <option value="THANKFUL" class="btn btn-primary">THANKFUL ( ĐÉO BIẾT )</option>
</select>

<td>
												<input type="hidden" name="tatmo" value="0" />
											</td>
											<td>
												<input type="hidden" name="tatmo" value="1" checked="checked"/>
											</td>
											
											<?php
$idngdung=$_SESSION['id'];
$timid = mysql_result(mysql_query("select count(*) from `botsv` where `user_id`='$idngdung' "),0);
if($timid == 1){
 ?>
   
 </div><div class="alert alert-danger">
<center> <?php echo $_SESSION['name'];?>, Bạn Đã Cài Đặt Bot Cho Bạn Thân Trên Hệ Thống HotFB.Org</div></center><a href="botSV-DEL.php">
<center><button type="button" class="btn btn-success">Xóa Bot </button></a></center><br />
<?php
} else {
    ?>
<div class="alert alert-danger"> 

    <center> <?php echo $_SESSION['name'];?>, Bạn Chưa Cài Đặt. Bạn Vui Lòng Kích Vào Cài Đặt Để Cài Đặt Bot</div></center>
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