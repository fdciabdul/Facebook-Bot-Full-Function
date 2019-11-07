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
	$("#vip").hide();
	$("#thongbao").show();
	}
</script>
<div class="col-sm-12 blog-main">

<div id="page-wrapper">
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Bot Exchange Liker </h3>
                            </div>

	<div id="vip" class="panel-body">
		<form action="/botExReact-OK.php" method="post">	
<div class="tab-content">
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>" required="required">	
<input type="hidden" name="name" class="form-control" autofocus="" value="<?php echo $_SESSION['name'];?>"required="">
<button type="button" class="btn btn-success">Chọn Cảm Xúc</button> 
<select name="type" class="btn btn-primary">  
   <option value="LOVE" class="btn btn-primary">LOVE ( YÊU )</option>
   <option value="WOW" class="btn btn-primary">WOW ( NGẠC NHIÊN )</option>
   <option value="HAHA" class="btn btn-primary">HAHA ( CƯỜI )</option>
   <option value="ANGRY" class="btn btn-primary">ANGRY ( PHẪN NỘ )</option>
   <option value="SAD" class="btn btn-primary">SAD ( BUỒN )</option>
</select>



	</div>
	

                                            



<div class="input-group">
<input type="hidden" name="id" class="form-control" autofocus="" value="<?php echo $_SESSION['id'];?>"required="">
			
</div>
<div class="tab-content"><div class="alert alert-success"><center>Bot Exchange Reactions  - Reactions Chéo Giữa Những Người Dùng HotFB.Org. Reactions Sẽ Được Gửi Từ 5-10 Phút Sau Khi Bạn Đăng Tus và Tăng Lên Từ Từ, Giới Hạn 200-300 .</center></div>
<?php
$idngdung=$_SESSION['id'];
$timid = mysql_result(mysql_query("select count(*) from `exreact` where `idfb`='$idngdung' "),0);
if($timid == 1){
 ?>
   
 </div><div class="alert alert-info">
<center> <?php echo $_SESSION['name'];?>, Bạn Đã Cài Đặt Bot Ex Reactions Trên Hệ Thống HotFB.Org</div></center><a href="botExLike-DEL.php">
<center><button type="button" class="btn btn-success">Xóa Bot Ex Reactions</button></a></center><br />
<?php
} else {
    ?>
</div><div class="form-group"> 

    <center> <?php echo $_SESSION['name'];?>, Bạn Chưa Cài Đặt. Bạn Vui Lòng Kích Vào Cài Đặt Để Cài Đặt Bot Ex Reactions</div></center>
<br/>


<span class="input-group-btn">
	<center>	<button type="submit" name="submit" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Cài Đặt Bot Ex Reactions
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