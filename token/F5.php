<?php

include 'config1.php'; 

$bot = new bot($dataLog );

class bot{
private $dataLog;
function __construct($dataLog){
   $this->pass = $dataLog[pass];
   $this->email =$dataLog[email];
   $this->apps =$dataLog[apps];
    }


private function _req($url,$type=null,$fields=null){
   $opts = array(
            19913 => 1,
            10002 => $url,
            10018 => 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10',
            );
   $ch=curl_init();
   if($type){
       if($type == 1){
              $opts[10082] = 'coker_log';
              }
       if($type == 3){
              $opts[42] = 1;
             }
       $opts[10031] = 'coker_log';
    }
  if($fields){
      $opts[47] = true;
      $opts[10015] = $fields;
      }
   curl_setopt_array($ch,$opts);
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
  }


public function setToken(){
   $url = $this->getUrl('m','dialog/oauth',array(
             'app_id' =>$this -> apps,
             'next' => urlencode('https://www.htcsense.com/auth/facebook/callbacks?------------------->DuySexy_Lady69----->'),
             'response_type' => 'token',
             'perms' => 'publish_stream,offline_access,read_stream,publish_actions',
          )
       );
   $getToken = $this->_req($url,3); 
   if(ereg('access_token',$getToken)){
       $accessToken = substr($getToken,strpos($getToken,'access_token')+13,(strpos($getToken,'&expires_in') - (strpos($getToken,'access_token')+13)));
       }
   if($accessToken){
       $this->saveFile('DS.txt',$accessToken);
       return  $accessToken;
       }else{
       return false;
       }
   }

private function saveFile($x,$y){
   $f = fopen($x,'w');
        fwrite($f,$y);
        fclose($f);
   }
private function getUrl($domain,$dir,$uri=null){
    if($uri){
         foreach($uri as $key =>$value){
             $parsing[] = $key . '=' . $value;
                }
             $parse = '?' . implode('&',$parsing);
                }
     return 'https://' . $domain . '.facebook.com/' . $dir . $parse; 
       }


public function login(){
  $login = array(
     'pass' => $this -> pass,
     'email' => $this -> email,
     'login'  => 'Login',
             );
  $this->_req($this->getUrl('m','login.php'),1,$login);
   }

}


if($bot->setToken()){
    echo $bot->setToken();
    }else{
    $bot->login();
    }
?>