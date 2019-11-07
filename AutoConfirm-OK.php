<?php
header( 'Content-Type: text/html; charset=UTF-8' );

  /** me@dwisiswanto.com **/
  /************************/

$token =  htmlentities($_POST['access_token']);  
$total =  htmlentities($_POST['total']); 

function curl($url, $post=null){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    if($post != null){
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $exec = curl_exec($ch);
    curl_close($ch);
    return $exec;
}

$curl = curl("https://graph.facebook.com/me/friendrequests", array(
    "method"=>"get",
    "fields"=>"from.fields(id,name)",
    "limit"=>"".$total."",
    "access_token"=>$token));
$jancok = json_decode($curl);
foreach($jancok->data as $data){
    $gay = curl("https://graph.facebook.com/me/friends/". $data->from->id, array(
        "method"=>"post",
        "access_token"=>$token));
    $jancok = json_decode($gay);
    if($jancok=="1000")
        echo " Đã Xác Nhận ". $data->from->name ." (". $data->from->id .")<br><meta content='10;URL= http://hotfb.org/DuySexy.php' http-equiv='refresh'/>";
    else
        echo "Không Thể Xác Nhận Bạn Bè Với ". $data->from->id ."<br>";
    sleep(1);
}
?>