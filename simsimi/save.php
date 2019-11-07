<?php
function send($url,$data){
   
$gui = curl_init();    
curl_setopt($gui, CURLOPT_TIMEOUT, 1000);
curl_setopt($gui, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($gui, CURLOPT_URL, $url);
curl_setopt($gui, CURLOPT_REFERER, $url);
curl_setopt($gui, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($gui, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($gui, CURLOPT_POST, TRUE);
curl_setopt($gui, CURLOPT_POSTFIELDS, $data);
ob_start();
return curl_exec($gui);
ob_end_clean();
curl_close($gui);
unset($gui);
}
$key = 'ef2ba992-acba-4fe1-95f8-f4bb937e712f';
$hoi = addslashes($hoi);
$dap = addslashes($dap);
$teach = json_decode(send('http://api.simsimi.com/teach','key='.$key.'&lc=vn&req='.$hoi.'&res='.$dap),true);
if($teach[result]== '100')
{
print 'thành công';
}else{
print 'lỗi';
}
?>