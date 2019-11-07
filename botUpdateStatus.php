ư<?php
session_start();
include('#DS/configg.php');
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
                                        <li class="active">Bot Đăng Status Tùy Nội Dung</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Bot Auto Đăng Status Tùy Nội Dung </h3>
                            </div>

	<div id="bodyupcmt" class="panel-body">
		<form action="botUpdateStatus-OK.php" method="post">	
<div class="tab-content">
<div class="alert alert-success"> <center>Bot Tự Động Đăng Status Theo Thời Gian Đặt Trước<br>Hướng dẫn để tus Công khai ki sử dụng Token tại HotFB.Org<br>Vào Cài đặt > Ứng Dụng > Những phiên bản cũ của Facebook cho di động > Chọn Công khai. Xong ! <br> Chú ý nick phải bật chế độ theo dõi , năm sinh trên 18t rồi mới có Công khai nhé !</center> </div>
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>"required="">	

  

<td>
												<input type="hidden" name="tatmo" value="0" />
											<td>
												<input type="hidden" name="tatmo" value="1" checked="checked"/> 
											</td>
											
											</br>
<button type="button" class="btn btn-primary">Thời Gian </button>

 <select name="gio">
   <option value="00">00</option>
   <option value="01">01</option>
   <option value="02">02</option>
   <option value="03">03</option>
   <option value="04">04</option>
   <option value="05">05</option>
   <option value="06">06</option>
   <option value="07">07</option>
   <option value="08">08</option>
   <option value="09">09</option>
   <option value="10">10</option>
   <option value="11">11</option>
   <option value="12">12</option>
   <option value="13">13</option>
   <option value="14">14</option>
   <option value="15">15</option>
   <option value="16">16</option>
   <option value="17">17</option>
   <option value="18">18</option>
   <option value="19">19</option>
   <option value="20">20</option>
   <option value="21">21</option>
   <option value="22">22</option>
   <option value="23">23</option>
</select> <label> :</label><select name="phut">
   <option value="00">00</option>
   
   <option value="05">05</option>
   
   <option value="10">10</option>
   
   <option value="15">15</option>
   
   <option value="20">20</option>
   
   <option value="25">25</option>
   
   <option value="30">30</option>
   
   <option value="35">35</option>
   
   <option value="40">40</option>
   
   <option value="45">45</option>
   
   <option value="50">50</option>
   
   <option value="55">55</option>
   
</select>

</div>


	
	

                                            <button type="button" class="btn btn-success">Nội Dung Status </button>



<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span><textarea rows="5" type="text" name="noidungstt" class="form-control" value="Hay" placeholder="Nhập Nội Dung Vào Đây!" autofocus="" required=""></textarea>
			
</div>
<?php
$idngdung=$_SESSION['id'];
$timid = mysql_result(mysql_query("select count(*) from `stt` where `user_id`='$idngdung' "),0);
if($timid == 1){
 ?>
   
 </div><div class="alert alert-danger">
<center> <?php echo $_SESSION['name'];?>, Bạn Đã Cài Đặt Bot Update Status Trên Hệ Thống HotFB.Org</div></center><a href="botSTT-DEL.php">
<center><button type="button" class="btn btn-success">Xóa Bot Update STT</button></a></center><br />
<?php
} else {
    ?>
<div class="alert alert-danger"> 

    <center> <?php echo $_SESSION['name'];?>, Bạn Chưa Cài Đặt. Bạn Vui Lòng Kích Vào Cài Đặt Để Cài Đặt Bot Update Stt</div></center>
</div>
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