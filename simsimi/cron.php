<?php
session_start();
include './info.php';
set_time_limit(0);
echo '
<meta charset="UTF-8">
<meta http-equiv=refresh content="0">';
$me = json_decode(load('https://graph.facebook.com/me?access_token='.$token.'&fields=id'),true);
$stat=json_decode(load('https://graph.facebook.com/'.$idcmt.'/feed?access_token='.$token.''),true);
$mgs = $stat[data][0][message];

if(!isset($mgs))
{
	echo 'Failed to load';
	exit;
}
$stat2=json_decode(load('https://graph.facebook.com/'.$stat[data][0][id].'/comments?limit=300000&access_token='.$token.'&fields=id,from,message'),true);

if(getLog($me[id],$stat2[data][count($stat2[data])-1]) && !isMy($stat2[data][count($stat2[data])-1],$me[id])){
	
$tags = $stat2[data][count($stat2[data])-1][from][name];
$tags = preg_replace('/\s/','_',$tags);
$hoi  = $stat2[data][count($stat2[data])-1][message];
include './load.php';
$response= str_replace('\n', '
', $response);
echo 'Sim trả lời: '.$response;
$message= '#'.$tags.': '.$response;

$url = 'https://graph.facebook.com/'.$stat[data][0][id].'/comments?message='.urlencode($message).'&access_token='.$token.'&limit=100000&fields=id,from,message&method=post';
load($url);
}
else
{
echo 'Failed To Load New CMT';
}

function load($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
function getLog($x,$y){
if(!is_dir('log')){
   mkdir('log');
   }
   if(file_exists('log/DS_'.$x)){
       $log=file_get_contents('log/DS_'.$x);
       }else{
       $log=' ';
       }

  if(ereg($y[id],$log)){
       return false;
       }else{
if(strlen($log) > 2000){
   $n = strlen($log) - 2000;
   }else{
  $n= 0;
   }
       saveFile('log/DS_'.$x,substr($log,$n).' '.$y[id]);
       return true;
      }
 }
 function isMy($post,$me){
  if($post[from][id] == $me){
     return true;
     }else{
     return false;
    }
}
 function saveFile($x,$y){
   $f = fopen($x,'w');
             fwrite($f,$y);
             fclose($f);
   }
?>