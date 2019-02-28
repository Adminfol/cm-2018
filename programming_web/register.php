<!DOCTYPE html>
<html>
<head>
	<title>Регистер</title>
<?php include("files_style.php");?>
	<link rel="stylesheet" type="text/css" href="style/style.css">
<meta charset="utf-8">
</head>
<body>
	<nav class="navbar bg-primary navbar-expand-md navbar-dark">
	<div class="container">
		<a href="https://localhost/programming_web/index.php" class="navbar-brand">ЧМ 2019 в России</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#cpnavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<section class="collapse navbar-collapse" id="cpnavbar">
			<ul class="navbar-nav">
				<span id="between">
					<a href="index.php"><li class="nav-item">Главная</li></a>
					<a href="#"><li class="nav-item">Команды</li></a>
					<a href="#"><li class="nav-item">Галерея</li></a>
					<a href="#"><li class="nav-item">Место проведения</li></a>
					<a href="register.php"><li class="nav-item">Личный кабинет</li></a>
				</span>
			</ul>
		</section>
	</div>
</nav>
<div class="register d-block w-100">
<form action="" method="post" class="form formRegister">
	<strong class="text-center"><big>Регистрация</big></strong>
	<strong class="text-center">Имя</strong>
	<input type="text" name="name" placeholder="Имя" class="input text-center d-block w-50 form-control"/>
	<strong class="text-center">Фамилия</strong>
	<input type="text" name="family" placeholder="Фамилия" class="input text-center d-block w-50 form-control"/>
	<strong class="text-center">Логин</strong>
	<input type="login" name="login" placeholder="Логин" class="input text-center d-block w-50 form-control"/>
	<strong class="text-center">Пароль</strong>
	<input type="password" name="password" placeholder="Пароль" class="input text-center d-block w-50 form-control"/>
	<strong class="text-center">Повторите пароль</strong>
	<input type="password" name="password" placeholder="Повторите пароль" class="input text-center d-block w-50 form-control"/>
	<strong class="text-center">Пол</strong>
	<select class="input d-block w-50" name='pol' style="padding:5px;">
		<option>Выбрать</option>
		<option>Мужской</option>
		<option>Женский</option>
	</select>
	<!-- <strong class="text-center">Страна</strong> -->
<strong class="text-center">Дата рождения</strong>
<input type="date" name="date" class="input d-block w-50"><br>
	<input type="submit" name="submit" class="submit btn btn-primary active" style="text-align:center;" value='Отправить'/>
</form>		
	</div>
	<script type="text/javascript" src="script/script.js"></script>
<?php include("files_script.php");?>
</body>
</html>