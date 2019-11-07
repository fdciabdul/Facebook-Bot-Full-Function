<?php
include '123config/configg.php';
$sql="select * from simsimi limit 0,500";
$query = mysql_query($sql);
        $result   = array();
        while($data  = mysql_fetch_assoc($query))
        {
            $result[] = $data;
        }
	foreach($result as $token){
		print ''.($token[access_token1]).'<br/>';
	}
?>
