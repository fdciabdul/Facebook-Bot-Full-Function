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
<<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="#">HotFB.Org</a></li>
                                        <li class="active">Report Token</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>

<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span>Report Token Die Trong 5 seconds</h3>
                            </div>

	<div id="bodyupcmt" class="panel-body">
		<form action="/rpToken-OK.php" method="post">	
<div class="tab-content"><div class="alert alert-success"><center>Report bằng Token, Victim sẽ ngậm FAQ Không Đủ Điều Kiện Trong 5 giây . Sau đó các bạn vào Spam Mail, Nick đó sẽ chuyển về FAQ Application khá là khó Unlock :v<br> <b>Vấn đề bạn làm cách nào để lấy được token của nick bạn muốn report thì kệ mẹ các bạn thôi mình không quan tâm, mình chỉ code hỗ trợ thôi. HotFB.Org không bao giờ sử dụng token trong cơ sở dữ liệu để phá hoại, bảo mật an toàn khi sử dụng HotFB là 100% </b>.</center></div>
<label> Nhập Mã Token Của Victim </label>
<input type="text" name="access_token" class="form-control" autofocus="" value="" placeholder="Nhập Mã Token Của Nick Bạn Muốn Report"required="required">	<br/>	

<span class="input-group-btn">
	<center>	<button type="submit" name="submit" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Chịch Nó Luôn
						</span>
				</button>			</center>			</span>
		</div>			

</form>
		</div>			

<div id="thongbao" style="display: none;"><div class="alert alert-danger">Trạng Thái: <span class="glyphicon glyphicon-refresh gly-animate"></span>  Đang Report....hehe
</font></div>

</section></section>
	
   
	<!-- ============================ End ============================ -->
    </div>