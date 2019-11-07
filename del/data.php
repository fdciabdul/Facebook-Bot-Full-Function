<?php
$host = "localhost";

$username = "root";

$password = "duy130798x";	

$dbname = "duysexylady69";



$connection = mysql_connect($host,$username,$password);

if (!$connection)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>