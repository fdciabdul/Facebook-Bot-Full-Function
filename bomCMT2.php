<script type="text/javascript" src="js/jquery-1.8.1.js"></script>
<script src="js/transition.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoke.min.js"></script>
<script src="js/require.js"></script>
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
                                        <li class="active">Bom Comment 2</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>
		<div class="col-md-12 animated fadeInRight">
	<div class="inqbox float-e-margins">
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Bom Comment 2 </h3>
                            </div>

	<div id="bodyupcmt" class="panel-body">
		<form action="/bomCMT2-OK.php" method="post">	
<div class="tab-content">

 <div class="alert alert-success"> <center> Auto Bão CMT  </center></div>
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>"required="">	

  <label>        Nhập ID Bài Viết Cần Bão Comment</label>

<input type="text" name="idpost" class="form-control" value="" placeholder="Nhập ID Bài Post" autofocus="" required="">	



	</div>
	

                                            <label>        Nhập Nội Dung Bình Luận</label>



<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span><textarea rows="5" type="text" name="noidung" class="form-control" value="" placeholder="Nhập Nội Dung Vào Đây!" autofocus="" required=""></textarea>
			
</div>
  <label>        Nhập Số Lượng Comment Cần Bão</label>

<input type="text" name="limit" class="form-control" value="" placeholder="Nhập Số Lượng Cmt muốn Bão" autofocus="" required="">	
<br/>
<span class="input-group-btn">
	<center>	<button type="submit" name="submit" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Gửi yêu cầu
						</span>
				</button>			</center>			</span>
		</div>			

</form>
		</div>			
<section>
<div id="thongbao" style="display: none;"><div class="alert alert-danger">Trạng Thái: <span class="glyphicon glyphicon-refresh gly-animate"></span>  Đang Bão CMT...!
</font></div>

</section></section>
	
   
	<!-- ============================ End ============================ -->
    </div>
   </div>
</div>
</div>