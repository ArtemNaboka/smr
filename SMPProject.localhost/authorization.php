<?php
  session_start();
  
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" href="authorization_folder/css/style.css" media="screen" type="text/css" />
</head>
<body>
	
  <div id="login">
  <div class="flip">
    <div class="form-signup">
      <h1>Регистрация</h1>
      <fieldset>
      <p class="login-msg"></p>
        <form method="post" action="Main_Menu/index.php">
          <input type="email" name="login" placeholder="Введите Ваш email адрес..." required />
          <input type="password" name="password" placeholder="Ваш сложный пароль..." required />
          <input type="password" name="r_password" placeholder="Повторите пароль" required />
          <input type="submit" name="submit" value="Зарегистрироваться" />
        </form>
        <p>Войти через: <a href="https://www.facebook.com/" target="_blank"><span class="social fb">Facebook</span></a> <a href="https://mail.google.com/mail/u/0/?tab=mm#inbox" target="_blank"><span class="social gp">Google +</span></a></p>
        <a href="#" class="flipper">Уже зарегистрированы? Войти.</a>
      </fieldset>
    </div>
    <div class="form-login">
      <h1>Авторизация</h1>
      <fieldset>
        <form method="post" action="Main_Menu/index.php">
          <input type="email" name="login_e" placeholder="Логин или Email" required />
          <input type="password" name="password_e" placeholder="Пароль" required />
          <input type="submit" name="submit_e" value="ВОЙТИ" />
        </form>
        <p>Войти через: <span class="social fb">Facebook</span> <span class="social gp">Google +</span></p>
        <p><a href="#" class="flipper">Нет аккаунта? Регистрация.</a><br>
        <a href="#">Забыли пароль?</a></p>
      </fieldset>
    </div>
  </div>
</div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="authorization_folder/js/index.js"></script>

</body>
</html>