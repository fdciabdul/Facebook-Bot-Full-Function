<?php
$text = $_GET[Lady];
$act = "Sexy";
$check = $_GET[Duy];
if($check !== $act){
echo "Liên Hệ FB : -https://www.facebook.com/DuySexyy- Để Lấy Key Simsimi";
exit;
}
echo DS(Sexy($text));

function DS($data){
$data =  preg_replace("/đụ|cặc|lồn|cặt|loz/is", "***", $data);
return $data;
}

function Sexy($noidung) {
         $curl = curl_init(); if (!$curl) exit;
         $headers = array(
           'Accept: application/json, text/javascript, */*; q=0.01',
           'Content-type: application/json; charset=utf-8',
           'Referer: http://blogdongnai.com',
           'User-Agent: Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; pl; rv:1.9.2.13) Gecko/20101203 Firefox/3.5.13',
           'X-Requested-With: XMLHttpRequest'
         );
         curl_setopt($curl, CURLOPT_URL, 'http://newapp.simsimi.com/v1/simsimi/talkset?isFilter=1&uid=1&os=a&tz=Hanoi&message_sentence=.urlencode($noidung))&lc=vi&cc=CL&av=6.7.1.7';
         curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
         curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
$pharr = json_decode($result,true);
$phanhoi = $pharr[response];
if($phanhoi == '')
{
$a  = array(' Em chưa được học câu đó - dạy cho em bằng ứng dụng SimSimi trên Android, iOS và Windows Phone nha ',' Cài đặt Bot SimSimi Miễn Phí Tại Website http://HotFB•Org <3 ', ' Em không hiểu được nhãn dán với icon đâu ', ' Em không hiểu huhu anh DuySexy chưa lạp trình cho em phần này ');
$b = array_rand($a,3);
$phanhoi = $a[$b[1]];
}
return $phanhoi;
}
?>