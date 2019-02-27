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
<form action="" method="post" class="form">
	<strong class="text-center"><big>Регистрация</big></strong>
	<strong class="text-center">Имя</strong>
	<input type="text" name="name" placeholder="Имя" class="input text-center d-block w-50"/>
	<strong class="text-center">Фамилия</strong>
	<input type="text" name="family" placeholder="Фамилия" class="input text-center d-block w-50"/>
	<strong class="text-center">Логин</strong>
	<input type="login" name="login" placeholder="Логин" class="input text-center d-block w-50"/>
	<strong class="text-center">Пароль</strong>
	<input type="password" name="password" placeholder="Пароль" class="input text-center d-block w-50"/>
	<strong class="text-center">Повторите пароль</strong>
	<input type="password" name="password" placeholder="Повторите пароль" class="input text-center d-block w-50"/>
	<strong class="text-center">Пол</strong>
	<select class="input d-block w-50" style="padding:5px;">
		<option>Выбрать</option>
		<option>Мужской</option>
		<option>Женский</option>
	</select>
	<strong class="text-center">Страна</strong>
	<select class="input d-block w-50" style="padding:5px;">
		<option>Выбрать</option>
		<option>Австралия</option>
		<option>Австрия</option>
		<option>Азербайджан</option>
		<option>Албания</option>
		<option>Алжир</option>
		<option>Ангола</option>
		<option>Андорра</option>
		<option>Антигуа</option>
		<option>Аргентина</option>
		<option>Армения</option>
		<option>Афганистан</option>
		<option>Багамские острова</option>
		<option>Бангладеш</option>
		<option>Барбадос</option>
		<option>Бахрейн</option>
		<option>Белиз</option>
		<option>Белоруссия</option>
		<option>Бельгия</option>
		<option>Болгария</option>
		<option>Боливия</option>
		<option>Босния и Герцеговина</option>
		<option>Ботсвана</option>
		<option>Бразилия</option>
		<option>Бруней</option>
		<option>Буркина-Фасо</option>
		<option>Бурунди</option>
		<option>Бутан</option>
	</select>
<h3>Дата</h3>
<form action="" method="post" >
	<div class="d-flex row">
		<select name="day" id="day"></select>
		<select name="month" id="month" ></select>
		<select name="year" id="year" ></select>
		
	</div>
</form>
	<!-- <strong class="text-center">Дата рождения</strong>
	<div class="input d-block w-50">
	<select style="padding:5px;">
		<option>День</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
		<option>13</option>
		<option>14</option>
		<option>15</option>
		<option>16</option>
		<option>17</option>
		<option>18</option>
		<option>19</option>
		<option>20</option>
		<option>21</option>
		<option>22</option>
		<option>23</option>
		<option>24</option>
		<option>25</option>
		<option>26</option>
		<option>27</option>
		<option>28</option>
		<option>29</option>
		<option>30</option>
		<option>31</option>
	</select>
	<select style="padding:5px;">
		<option>Месяц</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
		<option>13</option>
		<option>14</option>
		<option>15</option>
		<option>16</option>
		<option>17</option>
		<option>18</option>
		<option>19</option>
		<option>20</option>
		<option>21</option>
		<option>22</option>
		<option>23</option>
		<option>24</option>
		<option>25</option>
		<option>26</option>
		<option>27</option>
		<option>28</option>
		<option>29</option>
		<option>30</option>
		<option>31</option>
	</select>
	<select style="padding:5px;">
		<option>Год</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
		<option>13</option>
		<option>14</option>
		<option>15</option>
		<option>16</option>
		<option>17</option>
		<option>18</option>
		<option>19</option>
		<option>20</option>
		<option>21</option>
		<option>22</option>
		<option>23</option>
		<option>24</option>
		<option>25</option>
		<option>26</option>
		<option>27</option>
		<option>28</option>
		<option>29</option>
		<option>30</option>
		<option>31</option>
	</select>
</div> -->
	<input type="submit" name="submit" class="submit" style="text-align:center;" value='Отправить'/>
</form>		
	</div>
	<script type="text/javascript" src="script/script.js"></script>
	<script type="text/javascript" src="script/date.js"></script>
<?php include("files_script.php");?>
</body>
</html>