<?php

include './config.php';
if($hoi == 'sim học được gì rồi')
 {
$data = mysql_query("SELECT * FROM simi ");
$tong = mysql_num_rows($data);

$dap = 'Em đã học được: 13'.$tong.' từ rồi ạ.
mọi người dạy em thêm đi';
 }
 else{
$data = mysql_query("SELECT * FROM simi WHERE `ask` ='".$hoi."' ");
$tong = mysql_num_rows($data);
$dulieu = array();
$i = 0;
while ($load = mysql_fetch_array($data))
{	
	$dulieu[$i] = $load[ans];
	$i++;
}

$random = rand(0,count($dulieu)-1);
$dap = $dulieu[$random];

 
if($i <1)
{
	$bot= json_decode(auto("http://api.simsimi.com/request.p?key=ef2ba992-acba-4fe1-95f8-f4bb937e712f&lc=vn&ft=1.0&text=".urlencode($hoi)),true);
	$bot = $bot[response];
	
	//$dap = 'Câu này em chưa được DS dạy! bạn dạy tui được hơm :). Trả lời láo thì là: '.$bot;
	$dap = ''.$bot.'';
	
	//exit;
}
}
if($dap == "")
{
$a  = array('Em không hiểu huhu','Cài đặt bot SimSimi miễn phí tại HotFB. Org','Em chưa được học câu đó huhu','Cài đặt bot SimSimi miễn phí tại HotFB. Org');
$b = array_rand($a,3);
$dap= $a[$b[1]];
}
$response = $dap;

function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>