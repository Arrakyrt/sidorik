<?php 
require_once ('templates/top.php');
require_once ('utils/utils.users.php');
		
$login  = new field_text ('login', 'Логин', true, $_POST['login']);
$pass  = new field_password ('pass', 'Пароль', true, $_POST['pass']);
$form = new form (array('login'=>$login,'pass'=>$pass),'Войти','field');

if ($_POST){
	$error = $form->check();
	$query1 = "SELECT COUNT(*) FROM $tbl_user
						WHERE login ='{$form->fields['login']->value}'";
	$query2= "SELECT COUNT(*) FROM $tbl_user
						WHERE password ='{$form->fields['pass']->value}'";
	$usr1 = mysql_query($query1);
	$usr2 = mysql_query($query2);
	
	
	if (!$usr1) {
		if (!$usr2) {
		exit ($query1);
		exit ($query2);
		}
	}
	
	if (!mysql_result($usr1, 0) || !mysql_result($usr2, 0)){
	$error[] = "Ошибка входа. Некорректные данные!";	
	}
	
	
	if (!$error){
	enter($form->fields['login']->value,$form->fields['pass']->value);
	
	?>
	<script>
	document.location.href = "index.php";
	</script>
	<?php
	}
	
	
	if ($error){
		foreach ($error as $err)
		{
		echo "<span style = 'color:green'>";
		echo $err;
		echo "</span><br/>";
		}
	}
}
	$form->print_form();
		
require_once ('templates/bottom.php'); ?>