<?php
@session_start(); @ob_start();

include("function.php");
set_time_limit(100);

?>
<?php
$ourLogin = "ad"; //ÅžÄ°FREYÄ° BURDAN BELÄ°RLE DOSTUM
$ourPassword = "123"; //ÅžÄ°FREYÄ° BURDAN BELÄ°RLE DOSTUM

session_start();
header( 'Content-Type: text/html; charset=UTF-8' );
if ($_SESSION['login']!=$ourLogin && $_SESSION['password']!=$ourPassword) {


if ($_POST['login']==$ourLogin && $_POST['password']==$ourPassword) {


$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];
header("Location: index.php");


}
else {

echo "

<title>Share Code cURL Auto Like By DuySexy</title><form action=index.php method=post>

<center>Nhập mật khẩu để tiếp tục tải code ( nếu đã quảng cáo HotFB.Org thì inbox DuySexy nhận pass )<br />
<input type=password name=password value=''><br>
<input type=submit value='Tải Code'>


</form>
";
echo "<title>Share Code cURL Auto Like</title>
";
exit;

}

}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv="content-type" content="application/xhtml xml; charset=utf-8"/>
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" href="css.css" type="text/css" />
<link rel="shortcut icon" href="/favicon.ico" />
<title>VIP Member - ProVN.Net</title>
</head>
<body>


<div class="reg">
<logo><b><img src="/img/provn.png"></b></logo>

</div>



<div class="menu"> <div class="menu_ico2">VIP SUB: </div></div>
<div class="border"><div class="and" style="text-align:center;padding:5px;">
<form method="post" action="sub.php">
Nhập ID : <br>
<input style="margin-right:4px;width: 250px;" class="tb8" value="<?php echo $status->id ?>" type="text" name="postid">
<br>
<input style="margin-top:10px;" class="submit" name="submit" type="submit" VALUE="Auto Sub">
</form>
<br>
</div></div>

<div class="menu"> <div class="menu_ico2">Auto LIKE: </div></div>
<div class="border"><div class="and" style="text-align:center;">

<form method="post" action="like.php">
Nhập ID : <br>
<input style="margin-right:4px;width: 250px;" class="tb8" value="<?php echo $status->id ?>" type="text" name="postid">
<br>
<input style="margin-top:10px;" class="submit" name="submit" type="submit" VALUE="Auto Like">
</form>

</div></div>
<div class="border2">
Hệ Thống VIP - ProVN.Net
</div>
<div class="foot"> <div class="foot_ico">Powered By Ánh Key</div></div>


</body>
</html>
