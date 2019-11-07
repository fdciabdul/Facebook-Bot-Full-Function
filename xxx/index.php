<?php
if (isset($_GET['id'])) {
$html = file_get_contents('http://xvideos.com/mobile/' . $_GET['id'] . '');
} else { 
$html = file_get_contents('http://xvideos.com/mobile');
}
if (isset($_GET['k'])) {
$html = file_get_contents('http://xvideos.com/mobile/search?k=' . $_GET['k'] . '');
}
if (isset($_GET['q'])) {
$html = file_get_contents('http://xvideos.com/mobile/search?k=' . $_GET['q'] . '');
}
if (isset($_GET['lg'])) {
$html = file_get_contents('http://xvideos.com/mobile');
}
if (isset($_GET['p'])) {
$html = file_get_contents('http://xvideos.com/mobile/search?k=' . $_GET['q'] . '&p=' . $_GET['p'] . '');
}
$list = preg_replace('|/mobile/|is','http://hotfb.org/xxx/?id=',$html);
$list = preg_replace('|Xvideos.com mobile|is','HotFB.Org - Porn Video Mobile',$list);
$list = preg_replace('|http://img100.xvideos.com/videos/thumbs/xvideos.gif|is','/xxx/logo.png',$list);
$list = preg_replace('|/change-language/|is','http://hotfb.org/xxx/?lg=',$list);
$list = preg_replace('|/mobile|is','/',$list);
$list = preg_replace('|/notmobile|is','/',$list);
$list = preg_replace('|<div class="mobile-ad">(.*?)</div>|is','<div class="mobile-ad">HotFB.Org phiên bản dành cho dâm huynh đệ</div>',$list);
$list = preg_replace('|</body>|is','</body>',$list);
echo $list;
$link = $_SERVER['REQUEST_URI'];
$url = preg_replace('|(.*?)h?k(.*?)|is','?q$2',$link);
if (preg_match('/h?k/',$link)) {
header('Location: /' . $url . '');
}
include 'footer.php';
?>