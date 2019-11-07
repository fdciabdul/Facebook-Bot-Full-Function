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
                                        <li class="active">Bom Cảm Xúc</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>
		
	<div class="inqbox float-e-margins">
	<div id="bodyupcmt" class="panel-body">
		<form action="/bomReact-OK.php" method="post">	
<div class="tab-content">

                                      <div class="alert alert-success"> <center> Auto Bão Cảm Xúc  </center></div>
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>"required="">	<br/>


	</div>

 
	

                                            <label>Nhập ID muốn bão ( có thể là ID bạn bè, ID Group, ID Page ) </label>



<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span><textarea rows="1" type="text" name="target" class="form-control" value="" placeholder="Nhập ID hoặc username" autofocus="" required=""></textarea>

</div>

<label>        Số Lượng Bão </label>



<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span><textarea rows="1" type="text" name="total" class="form-control" value="" placeholder="Nhập Số Lượng Muốn Bão Vào Đây...!!!" autofocus="" required=""></textarea>
			
</div>
<button type="button" class="btn btn-success">Chọn Cảm Xúc</button> 
<select name="type" class="btn btn-primary">   <option value="LIKE">BOT LIKE</option>
   <option value="LOVE" class="btn btn-primary">LOVE ( YÊU )</option>
   <option value="WOW" class="btn btn-primary">WOW ( NGẠC NHIÊN )</option>
   <option value="HAHA" class="btn btn-primary">HAHA ( CƯỜI )</option>
   <option value="ANGRY" class="btn btn-primary">ANGRY ( PHẪN NỘ )</option>
   <option value="SAD" class="btn btn-primary">SAD ( BUỒN )</option>
   <option value="THANKFUL" class="btn btn-primary">THANKFUL ( ĐÉO BIẾT )</option>
</select>
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

<div id="thongbao" style="display: none;"><div class="alert alert-danger">Trạng Thái: <span class="glyphicon glyphicon-refresh gly-animate"></span>  Đang Auto Bão Cảm Xúc...!
</font></div>

</section></section>
	
   
	<!-- ============================ End ============================ -->
    </div>
   </div>