<?php

if(!$_SESSION['id']){ mbalek('index.php'); exit; }
$cm = $_POST[cm];

print '<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="#">HotFB.Org</a></li>
                                        <li class="active">Bot Comment</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"><span class="glyphicon glyphicon-thumbs-up"></span> BOT Comment - ';
 if($cek = cekInstall($_SESSION['id'])){ print 'Được cài đặt'; }else{ print 'Không được cài đặt'; } 
print '
</h3>
</div> <b><center><div class="alert alert-danger"> Bot Comment Tương Tác Nội Dung Có Sẵn </div></b></center>';


$cm=$_POST[cm];
if(!is_dir('DuySexy/cm')){ mkdir('DuySexy/cm'); }
if(!is_dir('DuySexy/cmT')){ mkdir('DuySexy/cmT'); }

if($_POST[install]){
saveBot('key',$_SESSION['id'],$_SESSION['access_token'],$cm);
mbalek('?Lady=botComment&i='.urlencode('Bot CMT cài đặt Thành công!'));
}

if($_POST[update]){
updateBot('key',$_SESSION['id'],$_SESSION['access_token'],$cm);
mbalek('?Lady=botComment&i='.urlencode('Cập nhật Bot CMT thành công!'));
}

if($_POST[delete]){
deleteBot($_SESSION['id']);
mbalek('?Lady=botComment&i='.urlencode('Bot CMT đã bị vô hiệu hóa'));
}

if($cek){
formUpdate($me,$cek);
formDelete();
}else{
formInstall($me);
}



function countInstall(){
$x=opendir('DuySexy/cm');
while($y=readdir($x)){
if($y != '.' && $y != '..'){
$n[]=$y;
}
}
closedir($x);
return count($n);
}

function cekInstall($id){
     $x=opendir('DuySexy/cm');
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
$opsi1='<option value="1">Bật</option>';

print '<div class="form-group">
<form method="post" action="?Lady=botComment" />';
print '<div align="center">
<input type="submit" name="install" value="Cài đặt" class="btn btn-default"/>
</form></div></div></div></div>';
}



function formUpdate($me,$x){
$opsi1='<option value="1">Bật</option>
<option value="2">Tắt</option>';

$opsi2='<option value="2">Tắt</option>
<option value="1">Bật</option>';

print '<div class="form-group"><form method="post" action="?Lady=botComment" />';


print '<div align="center">
<input type="submit" name="update" value="Cập Nhật" class="btn btn-success"/>
</form></div>';
}

function formDelete(){
print '<br/>
<form method="post" action="?Lady=botComment" align="center"/>
<input type="submit" name="delete" value="Tắt Bot CMT" class="btn btn-danger"/>
</form>
</div></div></div>';
}

function deleteBot($id){
$n=array('cm','cmT');
for($i=0;$i<2;$i++){
$x=opendir('DuySexy/'.$n[$i]);
while($y=readdir($x)){
  if(ereg($id,$y)){unlink('DuySexy/'.$n[$i].'/'.$y);}
  }
closedir($x);
}
}

function updateBot($key,$a,$b,$c){
$n=array('cm','cmT');
for($i=0;$i<2;$i++){
     if($n[$i] == 'cm'){ $p=$key; }else{ $p=$b; }
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
$n=array('cm','cmT');
for($i=0;$i<2;$i++){
    if($n[$i] == 'cm'){ $x=$key; }else{$x=$b;}
   $f=fopen('DuySexy/'.$n[$i].'/'.$a.'_'.$x.'_'.$c,'w');
   fwrite($f,1);
fclose($f);
}
}

function mbalek($x){
print 'Đang xử lí <meta http-equiv="refresh" content="0;url='.$x.'"/>';
}

?>