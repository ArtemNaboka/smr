<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Добавить заметку</title>
	<link rel="stylesheet" href="AddCss.css">
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
  <script type="text/javascript" src = "http://code.jquery.com/jquery-2.1.4.js"></script>
  <script type="text/javascript" src="calendar.js"></script>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Добавить заметку</h1>
      <?php
    mysql_connect("localhost", "mysql", "mysql") or die(mysql_error());
    mysql_select_db('notes');
    if (isset($_POST['submit'])) {
        $title = $_POST['login'];
        $fullNote = $_POST['fullNote'];
        $time_notes=date("Y-m-d H:i:s");
        $num = $_POST['num'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $date = $num." ".$month." ".$year;
        if(strlen($title) != 0 || strlen($fullNote) != 0){
          mysql_query("INSERT INTO nots VALUES ('', '$time_notes', '$title', '$fullNote')");
        }
    }
  ?>

      <form method="POST">
        <p><input type="text" name="login" placeholder="Название заметки"></p>
        <p>
          <!--  <input type="password" name="password" value="" placeholder="Пароль">-->
          <textarea placeholder="Текст заметки" name="fullNote" ></textarea>
        </p>
        <p class="remember_me">
          <div class="date">
              <?php
                $t = $_REQUEST['t'];
                echo $t;
              ?>
          </div>
          <select name="num">
            <option>1</option>
          </select>
          <select name="month"><option>Апрель</option></select>
          <select name="year"><option>2016</option></select>
        </p>     
        <p class="submit"><input type="submit" name="submit" value="Сохранить"></p>
      </form>
    </div>
  </section>
</body>
</html>
