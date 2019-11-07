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
                                        <li class="active">Bot Đăng Lên Tường bạn Bè</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Bot Auto Post Wall Friend</h3>
                            </div>

	<div id="bodyupcmt" class="panel-body">
		<form action="/BotCNN-OK.php" method="POST">	
<div class="tab-content">
<div class="alert alert-success"> <center>Bot Tự Động Đăng Lên Tường Bạn Bè, Có Thể Dùng Để Auto CMSN, CNN</center> </div>
<input type="hidden" name="access_token" class="form-control" autofocus="" value="<?php echo $_SESSION['access_token'];?>"required="">	
<input type="hidden" name="id" class="form-control" autofocus="" value="<?php echo $_SESSION['id'];?>"required="">		

  <label>        Nhập ID Nick FB Bạn Muốn Đăng ( có dạng 10000xxxxxxxxxx )</label>
<i>Nếu không bik lấy thì  <a href="http://findmyfbid.com/" target ="bank">Lấy ID Tại đây</a></i>
<input type="text" name="idcnn" class="form-control" value="" placeholder="100004828144416" autofocus="" required="">	



	</div>
	

                                            <label>        Nhập Nội Dung</label>



<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span><textarea rows="5" type="text" name="noidung" class="form-control" value="" placeholder="Nội dung của bạn đăng lên wall friend" autofocus=""></textarea>
			
</div>
  <label>        Thời Gian Đăng ( kiểu giờ 24h, định dạng giờ giờ:phút phút , ví dụ muốn đăng lúc 7 giờ 5 phút sáng thì nhập 07:05, 7 giờ 5 phút tối thì nhập 19:05)</label>

<input type="text" name="thoigian" class="form-control" value="" placeholder="21:00" autofocus="" required="">
 <label>        Tắt / Bật Dịch Vụ </label></br>

<td>
												<input type="radio" name="tatmo" value="0" /> <label>        Tắt </label>
											</td>
											<td>
												<input type="radio" name="tatmo" value="1" /> <label>        Bật</label>
											</td>	
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
		
		    <div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Danh sách đã cài</h3>
                            </div>	<table border= "1" width ="100%">
<tr align ="center">
<td>Stt</td>
<td>IDcnn</td>
<td>Tên</td>
<td>Nội Dung</td>
<td>Thời Gian</td>
<td>Trạng Thái</td>
<td>Xóa</td>
</tr>
<?php $dt = mysql_query("SELECT * FROM cnn WHERE id = '".$_SESSION['id']."' ");
$i = 0;
while ($dts = mysql_fetch_array($dt)){
echo '
<tr align ="center">
<td>'.++$i.'</td>
<td>'.$dts['idcnn'].'</td>
<td>'.$dts['ten'].'</td>
<td>'.$dts['noidung'].'</td>
<td>'.$dts['thoigian'].'</td>
<td>'.$dts['tatmo'].'</td>
<td><form action="/BotCNN-Update.php" method="POST">
<input type ="hidden" name ="idcnn" value ="'.$dts['idcnn'].'">
<button type="submit" name="xoa" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Xóa
						</span>
				</button>
				</form></td>
</tr>';
}

?></table></div>
<form action="/BotCNN-Update.php" method="POST">
<input type="hidden" name ="id" value="<? echo $_SESSION['id'];?>">
<input type="hidden" name ="token" value="<? echo $_SESSION['access_token'];?>">

<button type="submit" name="update" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Update Token
						</span>
				</button>
				</form>

		
				

<div id="thongbao" style="display: none;"><div class="alert alert-danger">Trạng Thái: <span class="glyphicon glyphicon-refresh gly-animate"></span>  Đang Thực Hiện....
</font></div>

</section></section>
	
   
	<!-- ============================ End ============================ -->
    </div>