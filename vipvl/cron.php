<?php
include 'config.php';
DS(''.$domain.'/Like1.php');
DS(''.$domain.'/Like2.php');
DS(''.$domain.'/Like3.php');
DS(''.$domain.'/Like4.php');
DS(''.$domain.'/Like5.php');
DS(''.$domain.'/Like6.php');
DS(''.$domain.'/Like7.php');
DS(''.$domain.'/Like8.php');
DS(''.$domain.'/Like9.php');
DS(''.$domain.'/Like10.php');
DS(''.$domain.'/Like11.php');
DS(''.$domain.'/Like12.php');
DS(''.$domain.'/Like13.php');
DS(''.$domain.'/Like14.php');
DS(''.$domain.'/Like15.php');
DS(''.$domain.'/Like16.php');
DS(''.$domain.'/Like17.php');
DS(''.$domain.'/Like18.php');
DS(''.$domain.'/Like19.php');
function DS($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>