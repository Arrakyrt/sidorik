<?php
require_once('templates/top.php');
	
$name = new field_text("name", 
    "Login", 
    true, 
    $_POST['name']);
$email = new field_text_email("email", 
    "E-mail", 
    true, 
    $_POST['email']);
$pass = new field_password("pass", 
    "Пароль", 
    true, 
    $_REQUEST['pass']);
$pass2 = new field_password("pass2", 
    "Пароль", 
    true, 
    $_REQUEST['pass2']);
$form = new form(array(
    "name" => $name,
    "email" => $email,
    "pass" => $pass,
    "pass2" => $pass2),
    "Регистрация", 
    "field");
if($_POST){
    $error = $form -> check();
    if($form -> fields ['pass'] -> value != $form -> fields ['pass2'] -> value){
        $error[] = "Пароли не совпадают";
    }
    $query = "SELECT COUNT(*) FROM $tbl_user WHERE login = '{$form -> fields['name'] -> value}'";
    $cut = mysql_query ($query);
    if(!$cut){
        exit($query);
    }
    if(mysql_result($cut, 0)){
        $error[] = "Пользователь с таким именем уже существует";
    }
    $query = "SELECT COUNT(*) FROM $tbl_user WHERE email = '{$form -> fields['email'] -> value}'";
    $cut = mysql_query ($query);
    if(!$cut){
        exit($query);
    }
    if(mysql_result($cut, 0)){
        $error[] = "Пользователь с таким email-ом уже существует";
    }
    if(!$error){
        $query = "INSERT INTO $tbl_user VALUES(NULL, 
            '{$form -> fields['name'] -> value}',
            '{$form -> fields['email'] -> value}',
            '{$form -> fields['pass'] -> value}',
            'unblock',
            NOW(),
            NOW())";
        $cut = mysql_query($query);
        if(!$cut){
            exit($query);
        }
    ?>

    <script>
        document.location.href = 'index.php';
    </script>

    <?php        
    }
    if($error){
        foreach ($error as $err){
            echo "<span style='color: red'>";
            echo $err; 
            echo "</span><br/>";
        }
    }
}
$form -> print_form();

require_once('templates/bottom.php');
?>