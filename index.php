<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ScreenShot</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/script.js"></script>
</head>
<body>
	<header id="header" class="header">
		<div class="container">
			<div class="logo">
				<img src="img/Logo.png" alt="logotype" class="logotype">
				<h1>Screenshot</h1>
				<button onclick="show('block')" class="button">Войти/Зарегистрироваться</button>
			</div>
		</div>
	</header>


	<div id="gray_blur" onclick="show('none'), show_reg('none')"></div>
	<div id="window_auth">
		<img src="img/Close.svg" alt="close" class="close" onclick="show('none')">
		<h2>Вход</h2>
		<div class="Log_In">
			
		<form action="index.html" name="LogIn">
	        <input type="text" placeholder="Введите логин" name="login" class="input">
	        <input type="password" placeholder="Введите пароль" name="password" class="input">
	        <input type="submit" value="Войти" name="autorization" class="autorization">
	        <a href="#" onclick="show('none'), show_reg('block')">Зарегистрироваться</a>
    	</form>
		</div>
	</div>
	<div id="window_reg">
      <img src="img/Close.svg" alt="close" class="close" onclick="show_reg('none')">
      <h2>Регистрация</h2>
      <div class="Reg_In">

        <form action="index.html" name="Reg_In">
          <input type="text" placeholder="Введите имя" id="name" class="input_reg">        
          <input type="email" placeholder="Введите Email" id="email" class="input_reg">
          <input type="password" placeholder="Введите пароль" id="pass1" class="input_reg">
          <input type="password" placeholder="Подтвердите пароль" id="pass2" class="input_reg">
          <input type='phone' placeholder="Введите телефон" id="phone" class="input_reg"><br />
          <input type="radio" checked name="radio1" id="radio1" class="radio"> Мужчина 
          <input type="radio" name="radio1" id="radio2" class="radio"> Женщина <br />
          <a onclick="send_info()" class="registration" href="#">Зарегистрироваться</a>
          <p><input class="checkbox" type="checkbox" id="checkbox" value=""> Соглашение на обработку персональных данных</p>
           <a href="#" onclick="show('block'), show_reg('none')">Войти</a>
        </form>
      </div>
    </div>


    <section id="main" class="main">
    	<div class="container">
    		<div class="download">
    			<button href="#download" class="btn"><img src="img/image.png" alt="image" class="image"> <br /> <h3>Загрузить изображение</h3></button>
    		</div>
    	</div>
    </section>


<section>
		<div class = "container">
			<div class = "cards">
				<a href="#">
					<div class = "inside"> 					
						<p>Название</p>
						<img src="img/screen1.png" class="img">
						<p>25.11.2021</p>
					</div>	
			</a>
				<a href="#">
					<div class = "inside"> 					
						<p>Название</p>
						<img src="img/screen2.png" class="img">
						<p>25.11.2021</p>
					</div>	
			</a>
				<a href="#">
					<div class = "inside"> 					
						<p>Название</p>
						<img src="img/screen3.png" class="img">
						<p>25.11.2021</p>
					</div>	
			</a>
			</a>
				<a href="#">
					<div class = "inside"> 					
						<p>Название</p>
						<img src="img/screen4.png" class="img">
						<p>25.11.2021</p>
					</div>	
			</a>
			</div>	
			<div  class="more">
				<button href="#" class="btn2"><b>Загрузить ещё</b>
				</button>	
			</div>
		</div>	
	</section>


<?php
require "functions.php";
global $dbh;
$sth = $dbh -> prepare("SELECT * FROM user");
$sth->execute();
$array = $sth -> fetchALL(PDO::FETCH_ASSOC);
?>
<table>
<tr>
  <th>id</th>
  <th>login</th>
  <th>password</th>
  <th>phone</th>
  <th>email</th>
</tr>
  <?php 
  for ($i = 0; $i < count($array); $i++) {
    $id = $array[$i]['id_user'];
    $login = $array[$i]['login']  ;
    $password = $array[$i]['password']  ;
    $phone = $array[$i]['phone']  ;
    $email = $array[$i]['email'] ;
    print('<tr>
    <td>'.$id.'</td>
    <td>'.$login.'</td>
    <td>'.$password.'</td>
    <td>'.$phone.'</td>
    <td>'.$email.'</td>
    </tr>');
}
  ?>
</table>







<footer id = "footer">
		<div class="container">
			<div class ="down">
				<img src="img/Logo.png" alt="logotype" class="logotype">
				<div class="copyright">
					<img src="img/copyright.svg" alt="copyright">Screenshot 2001
				</div>
				<div class="about">
				<h4>РАЗРАБОТЧИКИ</h4> <h5>Язовский Роман r.yazovskii@mail.ru</h5> <h5>Киреев Илия kiruh1@yandex.ru</h5> 
				</div>
			</div>
			
		</div>
	</footer>

</body>
</html>