<?php
require_once ('templates/top.php');

if($_SESSION['id_user_position']){
$query = "SELECT * FROM $tbl_user
			WHERE id = ".$_SESSION['id_user_position'];
				 $cat = mysql_query($query);

if (!$cat){
	exit ($query);
}
else{
'Ошибка входа';
}
$tbl_user = mysql_fetch_array($cat);
echo "<h3>".$tbl_user['login']."</h3>";
echo "<h3>".$tbl_user['email']."</h3>";
}





require_once ('templates/bottom.php'); ?>