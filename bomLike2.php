<?php
$type=$_GET[type];
print'<div class="col-sm-12 blog-main">

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="#">HotFB.Org</a></li>
                                        <li class="active">Bom Like 2</li>
                                    </ol>
                                    <h4 class="page-title">DuySexy.Pro</h4>
                                </div>
                            </div>
                        </div>
		<div class="col-md-12 animated fadeInRight">
	<div class="inqbox float-e-margins">';
print '<div class="aclb abt abb"><div class="acw apm abt">';
if($_POST[postId]){
$xid=getData($_POST[xid]);
$pid = explode(',',$_POST[postId]); for($x=0;$x<count($pid);$x++){  getData($pid[$x].'/likes',array('method' => 'post',));  }
mbalek('?Lady=bomLike2&message='.urlencode($_POST[n].' Bão Thành Công ... 
'.$xid[name].' Bão Like...'));
}
if($_POST[akeh]){
if($_POST[id]=='home'){$uid[name]='Beranda'; $uid[id]=$_SESSION['id'];  $urlFeed='me/home'; }else{  $uid=getData($_POST[id]); $urlFeed=$_POST[id].'/feed'; }
print '<center><h1>Đối tượng<br/><img src="http://graph.facebook.com/'.$uid[id].'/picture"/><br/> '.$uid[name].'</h1> <br/>Phát Hiện '.$uid[name].' Có '.$_POST[akeh].' Yêu Cầu... 
<br/>';
 $feedData=getData($urlFeed,array('limit'=>$_POST[akeh],'fields'=>'id,message,type,comments.limit(1000),comments.id',));
for($i=0;$i<count($feedData);$i++){
print '<div class="acg apm abt abb fcg"><b>'.$feedData[$i][type].'</b><div class="acw aps">';
if(strlen($feedData[$i][message] >120)){
print nl2br(htmlspecialchars(substr($feedData[$i][message],0,120))).'...';
}else{
print nl2br(htmlspecialchars($feedData[$i][message]));
}
$feedId[] .=$feedData[$i][id];
if(count($feedData[$i][comments][data]) > 0){
     for($n=0;$n<count($feedData[$i][comments][data]);$n++){
        $cmId[] = $feedData[$i][comments][data][$n][id];
        $comId[] .= $feedData[$i][comments][data][$n][id];
     }
print '<br/><span class="fcs"> + '.count($cmId).' Bình Luận</span>';
   }
print '</div></div>';
}

print'- Tổng Cộng '.count($feedId).' Trạng Thái<br/><br>- và '.count($comId).' Bình Luận';
$anuId .=implode(',',$feedId);
if(count($comId)>0){
$anuId .=','.implode(',',$comId);}
print'<br/><form method="post" action="?Lady=bomLike2"><input type="hidden" name="n" value="'.(count($feedId)+count($comId)).'"/><input type="hidden" name="xid" value="'.$_POST[id].'"><input type="hidden" name="postId" value="'.$anuId.'"/><input type="submit" class="btn btn-primary" value="Bắt đầu bão like!!!"/><form><center>';
}


if($_GET[target]){
if($_GET[target] == 'home'){
akeh($me,1);
}

elseif($_GET[target] == $_SESSION['id']){
akeh($me);
}
else{
$targetData=getData($_GET[target]);
akeh($targetData);
}
}

//--TARGET -> 

if($type){
if($type=='manual'){
if($_POST[id]){
$cek=getData($_POST[id]);
if($cek[id]){
mbalek('?Lady=bomLike2&target='.$cek[id]);
}else{
print '<font color="red">ID không hợp lệ</font><br>'; pilihTarget($me);
}
}
}


if($type == 'friends' || $type == 'groups'){
$data = getData('me/'.$type);
if($_GET[n]){
$a=htmlspecialchars($_GET[n]);
$b=$a+10;
}else{
$a=0;
$b=10;
}
if($a < count($data) -10){
$next='<a class="list-group-item" href="?Lady=bomLike2&type='.$type.'&n='.$b.'"> Next &raquo; </a>';
}
if($a > 1){
$prev='<a class="list-group-item" href="?Lady=bomLike2&type='.$type.'&n='.($a-10).'"> &laquo; Prev</a>';
}
for($i=$a;$i<$b;$i++){
if($data[$i][id]){
print'
<img src="http://graph.facebook.com/'.$data[$i][id].'/picture" alt=""/><span><a class="fcs" href="?Lady=bomLike2&target='.$data[$i][id].'">'.$data[$i][name].'</a><br/>';
}
}
print '<p align="center">'.$prev.$next.'</p>';
}
}else{
if(!$_GET[target] && !$_POST[akeh]){ pilihTarget($me); }
}

function pilihTarget($me){
print '<b class="list-group-item">Chọn mục tiêu :</b>
<a class="list-group-item" href="?Lady=bomLike2&target=home">&raquo; Trang Chủ</a>
<a class="list-group-item" href="?Lady=bomLike2&target='.$_SESSION['id'].'">&raquo; Tường Bản Thân</a>
<a class="list-group-item" href="?Lady=bomLike2&type=friends">&raquo; Tường Bạn Bè</a>
<a class="list-group-item" href="?Lady=bomLike2&type=groups"> &raquo; Nhóm</a>
<span class="list-group-item">Nhập ID:</span><div class="list-group-item><form method="post" action="?Lady=bomLike2&type=manual"><input name="id" type="text" class="list-group-item"/><input type="submit" value="Enter" class="btn btn-primary"/></form></div>
';
}


function akeh($x,$y=null){
print '<center><b class="fclb">Đối Tượng:
 &raquo; <a href="https://facebook.com/'.$x[id].'"><h1 class="list-group-item">';
if($y){ print 'Beranda';}else{ print $x[name]; }
print'</b></a>
<img alt="" src="http://graph.facebook.com/'.$x[id].'/picture?type=large"/><br/>Chọn số like...!
<br/>
<form method="post" action="?Lady=bomLike2">
<input name="id" value="';
if($y){print'home';}else{
print $x[id];}
print'" type="hidden"/>
<select name="akeh" class="btn btn-primary">';
for($i=1;$i<10;$i++){
$opsi1 .='
<option value="'.$i.'">'.$i.' Like</option>
';
$opsi2 .='
<option value="'.$i.'0">'.$i.'0 Like</option>
';

$opsi3 .='
<option value="'.$i.'00">'.$i.'00 Like</option>
';

}
print $opsi1.$opsi2.$opsi3.'
</select>
<input type="submit" class="btn btn-primary" value="Hoạt Động"/>
</form></center>';
}
print '</div>';

function mbalek($x){
print '<meta http-equiv="refresh" content="0;url='.$_SERVER[PHP_SELF].$x.'"/>';
}
?>