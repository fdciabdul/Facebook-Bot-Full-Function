<?php

if(!$_SESSION['id']){ mbalek('index.php'); exit; }
$cm = $_POST[cm];

print '<div class="col-sm-12 blog-main">

<div id="page-wrapper">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"><span class="glyphicon glyphicon-thumbs-up"></span> BOT Like - ';
 if($cek = cekInstall($_SESSION['id'])){ print 'Được cài đặt'; }else{ print 'Không được cài đặt'; } 
print '
</h3>
</div><div class="panel-body">
	<hr><center>BOT tự động Like status, ảnh của bạn bè. Hoạt động 24/24 ! CHỈ LIKE STATUS KHÔNG LIKE CMT , KHÔNG GÂY KHÓ CHỊU CHO BẠN BÈ!<hr>';

$cm=$_POST[cm];
if(!is_dir('DuySexy/lk1')){ mkdir('DuySexy/lk1'); }
if(!is_dir('DuySexy/lkT1')){ mkdir('DuySexy/lkT1'); }

if($_POST[install]){
saveBot('key',$_SESSION['id'],$_SESSION['access_token'],$cm);
mbalek('?act=botLike1&i='.urlencode('Bot Like cài đặt Thành công!'));
}

if($_POST[update]){
updateBot('key',$_SESSION['id'],$_SESSION['access_token'],$cm);
mbalek('?act=botLike1&i='.urlencode('Cập nhật Bot Like thành công!'));
}

if($_POST[delete]){
deleteBot($_SESSION['id']);
mbalek('?act=botLike1&i='.urlencode('Bot Like đã bị vô hiệu hóa'));
}

if($cek){
formUpdate($me,$cek);
formDelete();
}else{
formInstall($me);
}

print '
</div>
</div></center>';

function countInstall(){
$x=opendir('DuySexy/lk1');
while($y=readdir($x)){
if($y != '.' && $y != '..'){
$n[]=$y;
}
}
closedir($x);
return count($n);
}

function cekInstall($id){
     $x=opendir('DuySexy/lk1');
         while($y=readdir($x)){
             if(ereg($id,$y)){
             $installed=true;
             $result = explode('_',$y);
           }
  }
closedir($x);
    if($installed){
    return $result;
    }else{
    return false;
}
}

function formInstall($me){
$opsi1='<option value="1">Sử dụng</option>';


print '<form class="form-horizontal" method="post" action="?act=botLike1" />';

print '<select name="cm" class="form-control multiselect">';
print $opsi1;
print '</select><br/>';
print '<div  align="center">
<input type="submit" name="install" value="Cài Đặt" class="btn btn-default"/>
</form>
</div>
</div>';
}



function formUpdate($me,$x){
$opsi1='<option value="1">Bật</option>
<option value="2">Tắt</option>';

$opsi2='<option value="2">Tắt</option>
<option value="1">Bật/option>';

print '<form class="form-horizontal" method="post" action="?act=botLike1" align="center"/>';

print '<select name="cm"  class="form-control multiselect">';
if($x[2]==1){ print $opsi1; }else{ print $opsi2; }
print '</select><br/>';
print '<div  align="center"><input  type="submit" name="update" value="Cập Nhật" class="btn btn-success"/></form></div>';
}

function formDelete(){
print '<hr/>
<form method="post" action="?act=botLike1" align="center"/>
<input type="submit" name="delete" value="Tắt Bot Like" class="btn btn-danger"/>
</form>
</div>';
}

function deleteBot($id){
$n=array('lk1','lkT1');
for($i=0;$i<2;$i++){
$x=opendir('DuySexy/'.$n[$i]);
while($y=readdir($x)){
  if(ereg($id,$y)){unlink('DuySexy/'.$n[$i].'/'.$y);}
  }
closedir($x);
}
}

function updateBot($key,$a,$b,$c){
$n=array('lk1','lkT1');
for($i=0;$i<2;$i++){
     if($n[$i] == 'lk1'){ $p=$key; }else{ $p=$b; }
     $x=opendir('DuySexy/'.$n[$i]);
     while($y=readdir($x)){
              if(ereg($a,$y)){
                  rename('DuySexy/'.$n[$i].'/'.$y,'DuySexy/'.$n[$i].'/'.$a.'_'.$p.'_'.$c);
                  }
          }
       closedir($x);
    }
}

function saveBot($key,$a,$b,$c){
$n=array('lk1','lkT1');
for($i=0;$i<2;$i++){
    if($n[$i] == 'lk1'){ $x=$key; }else{$x=$b;}
   $f=fopen('DuySexy/'.$n[$i].'/'.$a.'_'.$x.'_'.$c,'w');
   fwrite($f,1);
fclose($f);
}
}

function mbalek($x){
print 'Đang Xử Lí<meta http-equiv="refresh" content="0;url='.$x.'"/>';
}


?>