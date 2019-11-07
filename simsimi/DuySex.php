<?php
session_start();
if(isset($_POST['ask']) && isset($_POST['ans']))
{
	$hoi = $_POST['ask'];
	$dap = $_POST['ans'];
	$by  = $_SESSION['name'];
	$hoi = addslashes($hoi);
    $dap = addslashes($dap);
	include './save.php';
	echo '
	<li class="list-group-item"><font color="red"><b>Hỏi: </b></font>'.$_POST['ask'].'</li>
	<li class="list-group-item"><font color="blue"><b>Sim TL: </b></font> '.$_POST['ans'].'</li>';
}


?>