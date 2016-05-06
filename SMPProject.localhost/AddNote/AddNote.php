<?php
  session_start();
?>
<!DOCTYPE html>
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

      <form method="POST" action="\Calendar/calendar.php">
        <p><input type="text" name="title" placeholder="Название заметки"></p>
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
              <option name='1'>1</option>
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
          </select>
          <select name="month"><option>Апрель</option></select>
          <select name="year"><option>2016</option></select>
        </p> 
        <div class="date">
        <?php
          $date = $_POST['note'];
          echo  "$date";

        ?>
        </div>    
        <p class="submit"><input type="submit" name="submit" value="Сохранить"></p>
      </form>
    </div>
  </section>
</body>
</html>
