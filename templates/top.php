<?php
	session_start();
	require_once ("config/config.php");
	require_once ("config/class.config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>First site on php</title>
	<meta name="description" content="about all project">
	<meta name="keywords" content="words, in, my, site">
	<link type="text/css" rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="media/css/style.css">
</head>
<body>

<header>
	<div class="logo">
		<img src="media/img/logo.png">
	</div>
	<div id="headlinks">
		<?php
		//для авторизированных пользователей
		if ($_SESSION['id_user_position']){
		?>
		<a href = 'reg-out.php'>Выход</a>
		<a href = 'cabinet.php' >Кабинет</a>
		<?php
		}
		//для неавторизированных пользователей
		else {
		?>
		<a href = 'enter.php'>Вход</a>
		<a href = 'reg.php' >Регистрация</a>

		<?php } //закончилось?>
	</div>
</header>

<div class="topMenu">
	<a href="index.php?url=index">Главная</a>
	<a href="#">О компании</a>
	<a href="#">Товары</a>
	<a href="#">Условия</a>
	<a href="#">Работники</a>
	<a href="#">Вакансии</a>
	<a href="index.php?url=contact">Контакты</a>

	<?php
		//особенности для авторизированных пользователей
		if ($_SESSION['id_user_position']){
	?>
		<div class = 'col-md-2'>
			<div class = 'menu'>
			<a href = '#' class = 'btn btn-info'>Сделать заказ</a>
			<a href = '#' class = 'btn btn-info'>Задать вопрос</a>
			<a href = '#' class = 'btn btn-info'>Партнеры</a>
			</div>
		</div>
	<?php
		}
		else {
	?>
			<div class = 'col-md-2'>
			</div>
	<?php 
		}
	?>
		<div class = 'col-md-2'></div>
		<br style = 'clear:both'>

</div>

<div class="main">
	<div class="col-md-2">
		<h2>Меню</h2>
		
		<?php
		$query = "SELECT * FROM catalogs WHERE showhide = 'show'";
		$cut = mysql_query($query);
		if(!$cut){
			exit($query);
		}
		while($category = mysql_fetch_array($cut)){
			echo "<a href='cat.php?id=".$category['id']."&url=".$category['url']."' class='btn btn-info'>".$category['name']."</a>";
		}
		?>

		<!--<ul>
			<li><a href="index.php?url=straus" class="btn btn-primary">Страусы</a></li>
			<li><a href="#" class="btn btn-info">Оппосумы</a></li>
			<li><a href="#" class="btn btn-primary">Ленивцы</a></li>
			<li><a href="#" class="btn btn-info">Панды</a></li>
			<li><a href="index.php?url=enot" class="btn btn-primary">Еноты</a></li>
			<li><a href="#" class="btn btn-info">Ми-ми-шки</a></li>
			<li><a href="#" class="btn btn-primary">Прочие</a></li>
		</ul>-->
	</div>
<script src='/media/js/jquery.js'></script>
<script>
	$(function() {
		$('.topMenu a:eq(0)').bind('mouseover', function() {
			$('header').css({
				'background' : 'url(../media/img/bg.jpg)'
			});
		});
		$('.topMenu').bind('mouseout', function() {
			$('header').css({
				'background' : 'url(../media/img/fon.jpg)'
			});
		})
		$('.topMenu').bind('mouseout', function() {
			$('footer').css({
				'background' : 'url(../media/img/fon.jpg)'
			});
		})
	});
	$(function() {
		$('.topMenu a:eq(1)').bind('mouseover', function() {
			$('footer').css({
				'background' : 'url(../media/img/bg.jpg)'
			});
		});
	});
	$(function() {
		$('.topMenu a:eq(2)').bind('mouseover', function() {
			$('header').css({
				'background' : 'url(../media/img/bg.jpg)'
			});
		});
	});
	$(function() {
		$('.topMenu a:eq(3)').bind('mouseover', function() {
			$('header').css({
				'background' : 'url(../media/img/bg.jpg)'
			});
		});
	});
	$(function() {
		$('.topMenu a:eq(4)').bind('mouseover', function() {
			$('header').css({
				'background' : 'url(../media/img/bg.jpg)'
			});
		});
	});
	$(function() {
		$('.topMenu a:eq(5)').bind('mouseover', function() {
			$('header').css({
				'background' : 'url(../media/img/bg.jpg)'
			});
		});
	});
	$(function() {
		$('.topMenu a:eq(6)').bind('mouseover', function() {
			$('header').css({
				'background' : 'url(../media/img/bg.jpg)'
			});
		});
	});
</script>