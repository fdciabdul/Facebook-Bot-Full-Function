<?php
include '123config/configg.php';
function mbalek($x){
print '<meta http-equiv="refresh" content="0;url='.$x.'"/>';
}

if(isset($_POST['idcnn']))
{
mysql_query("DELETE FROM cnn WHERE idcnn = '".$_POST['idcnn']."' ");
mbalek('/DuySexy.php?Lady=BotCNN&i='.urlencode('Xoa thanh cong !!!'));
}
if(isset($_POST['update'])){
mysql_query("UPDATE `cnn` 

SET `token` ='".$_POST['token']."'

WHERE `id` = '".$_POST['id']."' ");
mbalek('/DuySexy.php?Lady=BotCNN&i='.urlencode('Cap nhat thanh cong !!!'));
}

?>