<?php
DS('http://hotfb.org/del/bot.php');
DS('http://hotfb.org/del/exlike.php');
DS('http://hotfb.org/del/sim.php');
DS('http://hotfb.org/del/simib.php');
DS('http://hotfb.org/del/react.php');
DS('http://hotfb.org/del/share.php');
DS('http://hotfb.org/del/sub.php');
DS('http://hotfb.org/del/stt.php');
DS('http://hotfb.org/del/sttrd.php');
DS('http://hotfb.org/del/sttrd1.php');
DS('http://hotfb.org/del/inbox.php');
DS('http://hotfb.org/del/token.php');
DS('http://hotfb.org/del/botsv.php');
DS('http://hotfb.org/del/botcmtsv.php');
DS('http://hotfb.org/del/like.php');
DS('http://hotfb.org/del/cmt.php');
DS('http://hotfb.org/del/fr.php');
DS('http://hotfb.org/del/share1.php');
DS('http://hotfb.org/del/react1.php');
function DS($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>