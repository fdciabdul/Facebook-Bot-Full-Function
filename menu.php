<?php
error_reporting(0);
if($Lady){
if(
$Lady == 'bomLike' ||
      $Lady == 'unghotk' ||
      $Lady == 'AutoXoaCMT' ||
      $Lady == 'botExCmt' ||
      $Lady == 'ib' ||
      $Lady == 'SexyRate' ||
      $Lady == 'SexyReact' ||
      $Lady == 'token-page' ||
      $Lady == 'ungr' ||
      $Lady == 'botChui' ||
      $Lady == 'botChui1' ||
      $Lady == 'botLogin' ||
      $Lady == 'BotcURL' ||
      $Lady == 'rpToken' ||
      $Lady == 'botExReact' ||
      $Lady == 'AutoXoaLMKB' ||
      $Lady == 'stt'|
      $Lady == 'botUpAnh'||
      $Lady == 'botReact' ||
      $Lady == 'botcmtSV' ||
      $Lady == 'botSimInbox' ||
      $Lady == 'botSV' ||
      $Lady == 'bomReact' ||
      $Lady == 'vipShare' ||
      $Lady == 'vipcmt' ||
      $Lady == 'botReactRandom' ||
      $Lady == 'botSimSimi' ||
      $Lady == 'vipcmtRan' ||
      $Lady == 'bomReact' ||
      $Lady == 'bomCMT' ||
      $Lady == 'bomCMT2' ||
      $Lady == 'SexyFr' ||
      $Lady == 'botLikeGroup' ||
      $Lady == 'bomLike2' ||
      $Lady == 'bomCMT' ||
      $Lady == 'AutoPostFr' ||
      $Lady == 'AutoPoke' ||
      $Lady == 'AutoInbox' ||
      $Lady == 'SexyLike' ||
      $Lady == 'SexyCMT' ||
      $Lady == 'SexySub' ||
      $Lady == 'SexyShare' ||
      $Lady == 'BotCNN' ||
      $Lady == 'chat' ||
      $Lady == 'bomWall' ||
      $Lady == 'botUpdateStatus' ||
      $Lady == 'botSttRandom' ||
      $Lady == 'botExLike' ||
      $Lady == 'DelExLike' ||
      $Lady == 'botInbox' ||
      $Lady == 'bomComment' ||
      $Lady == 'AutoPostGroup' ||
      $Lady == 'AutoConfirm' ||
      $Lady == 'AutoXoaLoiMoi' ||
      $Lady == 'AutoPostPage' ||
      $Lady == 'botSttRandom' ||
      $Lady == 'botInboxRandom' ||
      $Lady == 'AutoXoaStatus' ||
      $Lady == 'botPoke' ||
      $Lady == 'chat' ||
      $Lady == 'AutoInbox' ||
      $Lady == 'AutoPoke' ||
      $Lady == 'unf' ||
      $Lady == 'unpage' ||
      $Lady == 'botCMTRandom' ||
      $Lady == 'botConfirm' ||
      $Lady == 'botLike1' ||
      $Lady == 'botComment' ||
      $Lady == 'botLike' ||
      $Lady == 'botReact' ||
      $Lady == 'vietchunguoc' ){
      include $Lady.'.php';
      }


if($Lady == menu)
{

print '</div>';

botMenu();

}else{


}

}else{
botMenu();

}

function botMenu()
{
?>
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
 <div class="row">
<div class="row">
<div class="col-md-6 animated fadeInRight" >
	<div class="panel panel-success">
		<div class="panel-heading">
			<h4><i class="fa fa-angellist"></i> Welcome to HotFB.Org</h4>
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
<div class="col-sm-6 hidden-xs">
		<div class="panel panel-primary">
		<div class="panel panel-heading">
			<h4><i class="fa fa-bullhorn"></i> Thông báo  - <a href="thong-bao" target="_blank"><font color="white">Xem Tiếp</font></a></h4>
		</div>
		<div class="panel-body">
						<b><font color="red">Sử dụng Token cài đặt Bot riêng cực lâu Die Tại HotFB.Org ! </font></b><hr>
						<b><font color="red">Mọi Thắc Mắc, Báo Lỗi & Góp Ý Gửi Về <a href="//fb.com/duysexyy" target="_blank"> Admin </a></font></b><hr>
						<b><font color="red">Giới thiệu HotFB.Org đến nhiều người để tăng số lượng Like, Sub, Share, CMT..</font></b>
					</div>
				</div>
			</div>
	
 <div class="load">
			<div class="col-md-12">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h4><i class="fa fa-book"></i>Menu HotFB.Org</h4>
		</div>
<div class="tabs-container">
				<ul class="nav nav-tabs tab-border-top-success">
					<li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-reddit"></i> Thông Tin & Hỗ Trợ</a></li>
					<li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-yelp"></i> Hệ Thống Bot TT</a></li>
					<li class=""><a data-toggle="tab" href="#tab-3"><i class="fa fa-yelp"></i> Hệ Thống Bot Vip </a></li>
					<li class=""><a data-toggle="tab" href="#tab-4"><i class="fa fa-bomb"></i> Hệ Thống Auto</a></li>
					<li class=""><a data-toggle="tab" href="#tab-5"><i class="fa fa-money"></i> Hệ Thống Nhạy Cảm</a></li>
					<li class=""><a data-toggle="tab" href="#tab-6"><i class="fa fa-money"></i> Hệ Thống Phá Hoại</a></li>
				</ul>
				<div class="tab-content">
					<div id="tab-1" class="tab-pane active">
						<div class="panel-body">
						<center><h2><p class="text-danger"><strong>Hỗ Trợ & Thông Tin</strong></p></h2></center><hr>
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Lấy Token Full Quyền</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Token Full Quyền</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="token" target=_blank">HotFB.Org/token</a>
									</div>
								</div>
							</div>
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Lấy Token Page</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Access Token Page</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="?Lady=token-page" target="_blank">Lấy Token Page</a>
									</div>
								</div>
							</div>
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">ĐĂNG XUẤT</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="logout.php">Đăng xuất ngay</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Liên Hệ Admin</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Góp Ý / Báo Lỗi</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="http://fb.com/duysexyy" target="_blank">Facebook.Com/DuySexyy</a>
									</div>
								</div>
							</div>
	<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Special Thank</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Nhà Tài Trợ</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="thong-bao/special-thank.php" target="_blank">Xem Ngay</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Group HotFB.Org Trên Facebook</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">HotFB Support Group</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="https://facebook.com/groups/1785814001653861" target="_blank">Join Now</a>
									</div>
								</div>
							</div>
							
							</div>
							</div>
<div id="tab-2" class="tab-pane">
						<div class="panel-body">
						<center><h2><p class="text-danger"><strong>Khu Vực BOT Tương Tác</strong></p></h2></center><hr>
						
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">  BOT Ex Like</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt động</button>
										<a href="?Lady=botExLike" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
</div>
		
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">  BOT Ex CMT</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt động</button>
										<a href="?Lady=botExCmt" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
</div>
		
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">BOT Cảm Xúc Cho Bạn Thân</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=botSV" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;"> BOT CMT Cho Bạn Thân</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=botcmtSV" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">BOT Cảm Xúc</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt động</button>
										<a href="?Lady=botReact" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">BOT Comment</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt động</button>
										<a href="?Lady=botComment" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">BOT CMT Tùy Nội Dung</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=botCMTRandom" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">BOT Trả Lời Tin Nhắn</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=botInbox" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">BOT Trả Lời Tin Nhắn Tùy ND</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=botInboxRandom" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">BOT Đăng Status Tâm Trạng</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=stt" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">BOT Đăng Status</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=botSttRandom" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>

						
						</div>
					</div>
					<div id="tab-3" class="tab-pane">
						<div class="panel-body">
						<center><h2><p class="text-danger"><strong>Khu Vực BOT Vip HotFB.Org</strong></p></h2></center><hr>
							
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;"> BOT Treo Nick Online</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt động</button>
										<a href="?Lady=botLogin" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
                               </div>
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;"> BOT VIP Share</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt động</button>
										<a href="?Lady=vipShare" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;"> BOT SimSimi CMT </center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt động</button>
										<a href="?Lady=botSimSimi" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;"> BOT SimSimi Inbox</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=botSimInbox" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">  BOT Vip Comment</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=vipcmt" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;"> BOT Vip CMT Tùy ND</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=vipcmtRan" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;"> Bot Auto CMT Chửi v1</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=botChui" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;"> Bot Auto CMT Chửi v2</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt động</button>
										<a href="?Lady=botChui1" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
</div></div>
					<div id="tab-4" class="tab-pane">
						<div class="panel-body">
						<center><h2><p class="text-danger"><strong>Khu Vực AUTO</strong></p></h2></center><hr>

						<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Cảm Xúc</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=SexyReact" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>	
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Đánh Giá Page</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=SexyRate" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>	
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Kết Bạn</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=SexyFr" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO LIKE </center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=SexyLike" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO COMMENT</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="?Lady=SexyCMT">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO SHARE</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="?Lady=SexyShare">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO SUB</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="?Lady=SexySub">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO XÓA STATUS</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="?Lady=AutoXoaStatus">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Đăng Trang</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=AutoPostPage" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Đăng Nhóm</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=AutoPostGroup" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Đăng Wall Bạn Bè</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=AutoPostFr" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Xác Nhận Bạn Bè</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="?Lady=AutoConfirm">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Hủy Kết Bạn</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="?Lady=unf">Sử Dụng</a>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Chọc </center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=AutoPoke" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Gửi Tin Nhắn</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=AutoInbox" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Bão Cảm Xúc</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=bomReact" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
														<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Bão Like</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=bomLike" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
														
														<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Bão CMT</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=bomCMT" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
														<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Bão CMT 2</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=bomCMT2" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
														<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Bão Wall</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=bomWall" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
														<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">AUTO Hủy Thích Trang</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=unpage" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
						</div>
					</div>
<div id="tab-5" class="tab-pane">
						<div class="panel-body">
						<center><h2><p class="text-danger"><strong>Khu Vực Nhạy  Cảm</strong></p></h2></center><hr>
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Chat và Dạy SimSimi</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="simsimi" target="_blank">Sử Dụng</a>
									</div>
								</div>
							</div>
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Hacker Type</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="hacker" target="_blank">Sử Dụng</a>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">XXX HotFB.Org</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="xxx" target="_blank">Sử Dụng</a>
									</div>
								</div>
							</div>
<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Google Fuck</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="google" target="_blank">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Đọc Inbox Qua Token</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="ibx" target="_blank">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Tool Facebook Cổ</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="tool" target="_blank">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Lọc Account</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="tool/loc-acc.html" target="_blank">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Lọc Token</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="tool/loc-token.html" target="_blank">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Check Token</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="DS_CheckToken" target="_blank">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Check Token 2</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="CheckToken" target="_blank">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Check Clone</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="CheckClone" target="_blank">Sử Dụng</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Tạo FanSign</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a type="button" class="btn btn-block btn-outline btn-success" href="http://duydaik.0fees.net" target="_blank">Sử Dụng</a>
										</div>
						</div>
					</div>
					</div>
					</div>
<div id="tab-6" class="tab-pane">
						<div class="panel-body">
						<center><h2><p class="text-danger"><strong>Khu Vực Phá Hoại</strong></p></h2></center><hr>
							
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center style="font-size: 20px;">Report Token Die 5s</center>
									</div>
									<div class="panel-body">
										<button type="button" class="btn btn-block btn-outline btn-warning">Hoạt Động</button>
										<a href="?Lady=rpToken" class="btn btn-block btn-outline btn-success">Sử Dụng</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


 



  
<?php


 }


?>
