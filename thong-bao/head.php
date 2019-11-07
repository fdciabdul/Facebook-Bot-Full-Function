<?php
session_start();
error_reporting(0);
$Lady = $_GET['Lady'];

?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta property="fb:pages" content="733283420042941" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; UTF-8" />
<meta http-equiv="cache-control" content="cache" />
<meta http-equiv="content-language" content="vi" />

<!-- SEO -->
<title>DuySexy.Pro - HotFB.Org - Bot SimSimi, Ex Like, Auto Bot, HotFB.TOP, BotLikeVN.Net</title>

<meta name="description" content="DuySexy.Pro - HotFB.TOP  - BotLikeVN.NET - HotFB.Org là một hệ thống auto bot facebook, auto like facebook,auto sub, auto share, Bot Ex Like - Bot SimSimi công cụ đắc lực giúp bạn quản lí tài khoản Facebook của mình một cách tự động. Đặc biệt HotFB.Org có nhiều tính năng hơn hẳn so với các hệ thống bot trên thế giới" />
<meta name="author" content="DuySexy" />
<meta name="copyright" content="DuySexy" />
<meta name="robots" content="index, follow" />
<meta property="fb:admins" content="HotFB.Org" />
<meta property="og:url" content="http://HotFB.Org" />
<meta property="og:type" content="website" />
<meta property="og:description" content="DuySexy.Pro - HotFB.TOP - HotFB.Org  - BotLikeVN.NET là một hệ thống auto bot facebook, auto like facebook,auto sub, auto share, Bot Ex Like - Bot SimSimi công cụ đắc lực giúp bạn quản lí tài khoản Facebook của mình một cách tự động. Đặc biệt HotFB.Org có nhiều tính năng hơn hẳn so với các hệ thống bot trên thế giới" />
<meta property="og:image" content="images/banner.jpg" />
<meta property="og:locale" content="vi_VN" />
<!-- Bootstrap core CSS -->
<link rel="shortcut icon" href="favicon.ico" /> 
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/smoke.css">
<link rel="stylesheet" href="css/main.css">
<link rel="canonical" href="DuySexy" />
<link rel="stylesheet" href="css/animate.css">

<!-- JavaScript -->

<script type="text/javascript" src="js/jquery-1.8.1.js"></script>

<script src="js/transition.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/smoke.min.js"></script>

<script src="js/require.js"></script>
<!--
  _____               _____                            _    _       _   ______ ____   ____            
 |  __ \             / ____|                          | |  | |     | | |  ____|  _ \ / __ \           
 | |  | |_   _ _   _| (___   _____  ___   _   ______  | |__| | ___ | |_| |__  | |_) | |  | |_ __ __ _ 
 | |  | | | | | | | |\___ \ / _ \ \/ / | | | |______| |  __  |/ _ \| __|  __| |  _ <| |  | | '__/ _` |
 | |__| | |_| | |_| |____) |  __/>  <| |_| |          | |  | | (_) | |_| |    | |_) | |__| | | | (_| |
 |_____/ \__,_|\__, |_____/ \___/_/\_\\__, |          |_|  |_|\___/ \__|_|    |____(_)____/|_|  \__, |
                __/ |                  __/ |                                                     __/ |
               |___/                  |___/                                                     |___/ 
-->
</head>
<body>
<div class="container">    


 <div class="panel panel-primary">
<div class="panel-heading">


<font color="white">Language Trans:</font><div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
        </div></div></div></div>
        
<!-- Fixed navbar -->
<div class="container">    


 <div class="panel panel-primary">
<div class="panel-heading">
<h1><center>HotFB.Org - Auto Bot Like Facebook - DuySexy.Pro</center> </h1>
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="active">
<a href="/">
<span class="glyphicon glyphicon-home"></span>
</a>

<li>
							                     <a href="thong-bao/special-thank.php" target="_blank">
								                <span class="glyphicon glyphicon-user"></span> 
							                                	Nhà Tài Trợ
								
							                               </a>  
						</li>
<li>
							                     <a href="https://www.youtube.com/watch?v=XsqKGXQ8IBw" target="_blank">
								                <span class="glyphicon glyphicon-user"></span> 
							                                	Hướng dẫn sử dụng và Lấy ID
								
							                               </a>  
						</li>
<li>
							                     <a href="https://facebook.com/groups/1785814001653861" target="_blank">
								                <span class="glyphicon glyphicon-user"></span> 
							                                	Group Hỗ Trợ
								
							                               </a>  
						</li>
<li>
							                     <a href="token" target="_blank">
								                <span class="glyphicon glyphicon-user"></span> 
							                                	Lấy Token Full Quyền
								
							                               </a>  
						</li>

            
</ul>

	

	<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-user"></span>
<?php echo $_SESSION['name'] ?>								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="//fb.com/<?php echo $_SESSION['id'] ?>" target="_blank">
										<img src="//graph.facebook.com/<?php echo $_SESSION['id'] ?>/picture?width=24&amp;height=24" alt="<?php echo $_SESSION['id'] ?>" />
										<?php echo $_SESSION['name'] ?>
									</a>
								</li>
								<li>
									<a>
										<span class="glyphicon glyphicon-search"></span>
										ID: <b><?php echo $_SESSION['id'] ?></b>
									</a>
								</li>
								<li>
									<a href="logout.php">
										<span class="glyphicon glyphicon-log-out"></span>
										&#272;&#259;ng xu&#7845;t
									</a>
								</li>
							</ul>
						</li>
					</ul>				</div>
			</div>
		</nav>
</div></div><div>
<div class="container">
 <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
<img src="http://wmuuradio.org/wp-content/uploads/2016/07/icon_new.png" width="32px" height="32px" alt=Link" /><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" class="collapsed">Thông báo mới <font color="red"><b>( +3 )</b></font> </a> 
                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
<strong><font color="red">Xem XXX tại <a href="xxx" target="_blank"> http://HotFB.Org/xxx  :V </a></font></strong><hr>
<strong><font color="red">Vì không anti Spam nên Token die rất nhiều , các bạn quảng cáo HotFB.Org tới nhiều người dùng để tăng số lượng Like, Sub, Share nhé</a></font></strong><hr>
<strong><font color="red">Bán cURL cực bá + hosting đi kèm. Demo Wall <a href="https://web.facebook.com/DuySexyy" target="_blank"> https://web.facebook.com/DuySexyy </a></font></strong><hr>
<strong>
<a href="https://youtu.be/FMw1RfqYKxA" target="_blank">  <b>   HD cài Vip Share   </b>  </a> - <a href="https://youtu.be/GamfMRh1NYo" target="_blank">Hướng dẫn hack like page</a> - <a href="https://youtu.be/Ijc5MF33Y5c" target="_blank">Hướng dẫn cài simsimi</a></font><hr>
<b> >> <a href="thong-bao" target="_blank"><font color="red" size="3px">Xem tiếp................... </font></a></strong></b>
                                        </div>
                                    </div>
                                </div>
</div></div></div></div></div></b>

<!-- /Fixed navbar -->

<!-- Container -->
<div class="container" role="main">
<div class="row">
<div class="col-sm-12">