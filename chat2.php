<?php

if(!$_SESSION['id']){ print '<script>top.location.href="index.php";</script>';
exit;
}


viewChat();

if($_POST[message]){
$message=$_POST[message];
$xxx=array('dm','đm','Dm','Đm','dcm','đcm','vl','fuck','dit','djt','địt','lồn','loz','djt',);
foreach($xxx as $xn=> $mades){
if(ereg($mades,strtolower($message))){
$madesu=true;
}
}

if($madesu){
print '<script>alert("ô cái địt, nội dung mày viết bị cấm nhé con chó :v");</script>';
}else{
saveChat($_SESSION['id'],$_SESSION['name'],$_POST[message]); 
print '<meta http-equiv="refresh" content="0;url=?Lady=chat"/>';
}
}


function saveChat($id,$name,$message){
$set_jam=7; 
$tang =gmdate('d F Y',time()+($set_jam*3600));
$jame =gmdate('H:i',time()+($set_jam*3600));
$tme=gmdate('Y',time()+($set_jam*3600));
$hrs=gmdate('z',time()+($set_jam*3600));
$jum=(($tme-1)*365)
+(int)(($tme-1)/4)+$hrs;
$di=7*(int)($jum/7);
$dino=$jum-$di;
$pas=5*(int)($jum/5);
$pasar=$jum-$pas;
$dino=str_replace('6','Đăng',$dino);
$dino=str_replace('0','Đăng',$dino);
$dino=str_replace('1','Đăng',$dino);
$dino=str_replace('2','Đăng',$dino);
$dino=str_replace('3','Đăng',$dino);
$dino=str_replace('4','Đăng',$dino);
$dino=str_replace('5','lúc`at',$dino);
$pasar=str_replace('4','lúc',$pasar);
$pasar=str_replace('0','lúc',$pasar);
$pasar=str_replace('1','lúc',$pasar);
$pasar=str_replace('2','lúc',$pasar);
$pasar=str_replace('3','lúc',$pasar);
$date=''.$dino.' '.$pasar.'  '.$tang.' '.$jame.' ';
$data[] = array(
'id' => $id,
'name' => $name,
'message' => $message,
'date' => $date,
);

if(file_exists('tmpChat.txt')){
$view = json_decode(file_get_contents('tmpChat.txt'),true);}else{ $view = array();}
$x=json_encode(array_merge($data,$view));
$f = fopen('tmpChat.txt','w');
fwrite($f,$x);
fclose($f);
}

function viewChat(){
if(file_exists('tmpChat.txt')){ $data=json_decode(file_get_contents('tmpChat.txt'),true);}else{$data=array();}
if($_GET[n]){
$a=htmlspecialchars($_GET[n]);
$b=$a+10;
}else{
$a=0;
$b=10;
}
if($a < count($data) -10){
$next='<a class="fcs" href="/?Lady=chat&n='.$b.'"> Sau>> </a>';
}
if($a > 1){
$prev='<a class="fcs" href="/?Lady=chat&n='.($a-10).'"> << Trước</a>';
} if(file_exists('tmpChat.txt')){ $news=file_get_contents('tmpChat.txt'); }else{ $news= ' ';}
print'<br />
<div class="col-sm-12 blog-main">

<div id="page-wrapper">
<div class="panel panel-primary">
<div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span>Phòng Chat</h3>
                            </div>
<div class="panel-body">
<form method="post" action="?Lady=chat"></span><textarea rows="5" type="text" name="message" class="form-control" value="" placeholder="Nhập Nội Dung Vào Đây!" autofocus="" required=""></textarea><input type="submit" value="Đăng" class="btn btn-default"/></td></tr></table>
</div>
</form>
</div>

<div class="col-sm-12 blog-main">
';
for($i=$a;$i<$b;$i++){
if($data[$i]){   
$data[$i][name] = str_replace('Duy Hoàng','<font color="red">Duy Hoàng</font> (Admin) ', $data[$i][name]);
print '
<div class="panel panel-primary" style="margin-top:4px;margin-left:2px;margin-bottom:4px;margin-right:2px;">
<table>
<tr>
<td valign="top" class="aps">
<img src="http://graph.facebook.com/'.$data[$i][id].'/picture" alt="DuySexy" />
</td>
<td valign="top" class="l">
<span class="mfss">
<a href="http://facebook.com/'.$data[$i][id].'" class="fcs">
<b>'.$data[$i][name].'</b>
</a>
</span>
<br/>
<span class="glyphicon glyphicon-thumbs-up">
<abbr>
'.$data[$i][date].'
</abbr>
<b>
<span class="glyphicon glyphicon-thumbs-up">
.
</span>
</b>
<img src="https://fbstatic-a.akamaihd.net/rsrc.php/v2/yv/r/5SYOjS874Mk.png" width="10" height="11" class="feedAudienceIcon img" />
</span>
<br/><br/>
'.nl2br(stripslashes(htmlspecialchars($data[$i][message]))).'
</td>
</tr>
</table>
</div>
';
}
}
print '<center>'.$prev.$next.'</center></div>';
}


?>