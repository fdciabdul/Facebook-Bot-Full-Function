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
                                        <li class="active">BotLike</li>
                                    </ol>
                                    <h4 class="page-title">Welcome !</h4>
                                </div>
                            </div>
                        </div>
		<div class="col-md-12 animated fadeInRight">
	<div class="inqbox float-e-margins">

	<div id="bodyupcmt" class="panel-body">
		<form action="/AutoPostPage-OK.php" method="post">	
<div class="tab-content">
 <div class="alert alert-success"> <center> Auto Đăng Hàng Loạt Lên Page </center></div>
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>"required="">	<br/>



	</div>

 
	

                                            <label>Nội Dung Cần Post</label>



<div class="input-group">
<span class="input-group-addon"><i class="fa fa-child" aria-hidden="true"></i></span><textarea rows="5" type="text" name="noidung" class="form-control" value="" placeholder="Nhập Nội Dung Vào Đây...!!!" autofocus="" required=""></textarea>

</div>

<label>        Số Lượng Cần Post</label>



<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span><textarea rows="1" type="text" name="soluong" class="form-control" value="" placeholder="Nhập Số Lượng Cần Post Vào Đây...!!!" autofocus="" required=""></textarea>
			
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

<div id="thongbao" style="display: none;"><div class="alert alert-danger">Trạng Thái: <span class="glyphicon glyphicon-refresh gly-animate"></span>  Đang Auto Post Page...!
</font></div>

</section></section>
	
   
	<!-- ============================ End ============================ -->
    </div>
   </div>
</div>
</div>