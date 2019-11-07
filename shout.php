<meta charset="utf-8"/>
<?php
session_start();
####### db config ##########
$db_host = "localhost"; // Giữ mặc định là localhost
$db_name    = 'duysexylady69';// Can thay doi
$db_username    = 'root'; //Can thay doi
$db_password    = 'IV8jaB3y';//Can thay doi
####### db config end ##########
function _ago($tm,$rcs = 0) {
   $cur_tm = time(); $dif = $cur_tm-$tm;
   $pds = array('giây','phút','giờ','ngày','tuần','tháng','năm','thập kỷ');
   $lngh = array(1,60,3600,86400,604800,2630880,31570560,315705600);
   for($v = sizeof($lngh)-1; ($v >= 0)&&(($no = $dif/$lngh[$v])<=1); $v--); if($v < 0) $v = 0; $_tm = $cur_tm-($dif%$lngh[$v]);

   $no = floor($no); if($no <> 1) $pds[$v] .=' trước'; $x=sprintf("%d %s ",$no,$pds[$v]);
   if(($rcs == 1)&&($v >= 1)&&(($cur_tm-$_tm) > 0)) $x .= time_ago($_tm);
   return $x;
}


if($_POST)
{
	//connect to mysql db
	$sql_con = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
	
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    } 
	
	if(isset($_POST["message"]) &&  strlen($_POST["message"])>0)
	{

		//sanitize user name and message received from chat box
		//You can replace username with registerd username, if only registered users are allowed.
		$username = $_SESSION['name'];
		$userid = $_SESSION['id'];
		$message = $_POST["message"];
		$user_ip = $_SERVER['REMOTE_ADDR'];
		$time = time();
		

		//insert new message in db
		mysqli_query("SET NAMES utf8");
		if(mysqli_query($sql_con,"INSERT INTO shout_box(user, user_id, message, ip_address, date_time) value('$username','$userid','$message','$user_ip','$time')"))
		{
			$msg_time = _ago(time()); // current time
			echo '<div class="shout_msg"><time>'.$msg_time.'</time><span class="username">'.$username.'</span><span class="message">';

echo htmlspecialchars($message);  


echo'</span></div>';
		}
		
		// delete all records except last 10, if you don't want to grow your db size!
		mysqli_query($sql_con,"DELETE FROM shout_box WHERE id NOT IN (SELECT * FROM (SELECT id FROM shout_box ORDER BY id DESC LIMIT 0, 10) as sb)");
	}
	elseif($_POST["fetch"]==1)
	{
		$results = mysqli_query($sql_con,"SELECT user,user_id, message, date_time FROM (select * from shout_box ORDER BY id DESC LIMIT 10) shout_box ORDER BY shout_box.id ASC");
		while($row = mysqli_fetch_array($results))
		{
			$msg_time = _ago($row["date_time"]); //message posted time
			echo '<div class="shout_msg"><time>'.$msg_time.'</time>
<a href="https://www.facebook.com/profile.php?id='.$row["user_id"].'" target="_blank" class="username"><span>'.$row["user"].'</span></a> <span class="message">'.htmlspecialchars($row["message"]).'</span></div>';
		}
	}
	else
	{
		header('Không thể thực hiện');
    	exit();
	}
}