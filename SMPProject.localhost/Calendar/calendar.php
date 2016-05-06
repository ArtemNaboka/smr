<?php
    @session_start();

    mysql_connect("localhost", "mysql", "mysql") or die(mysql_error());
    mysql_select_db('notes'); 
    $title = $_POST['title'];
    $fullNote = $_POST['fullNote'];
    $date = date("Y-m-d");
    $login = $_SESSION['login'];
    if (strlen($title) > 0 && strlen($fullNote) > 0) {
        # code...
    
        mysql_query("INSERT INTO TableOfNotes (`title`, `fullNote`, `DateOfPost`, `login`) VALUES ('$title', '$fullNote', '$date', '$login')");
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	    <script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src = "http://code.jquery.com/jquery-2.1.4.js"></script>
    <link rel="stylesheet" type="text/css" href="\bootstrap-3.3.6-dist/css/bootstrap.css">
    <script type="text/javascript" src="\bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="\bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                            
                        </button>
                        <!--<a class="navbar-brand" href="#">Главная</a>-->
                    </div>
                    <div class="collapse navbar-collapse" id="responsive-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="\Main_Menu/index.php">Главная</a></li>
                            <li><a href="\Calendar/calendar.php">Календарь</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="\authorization.php">Выйти</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="head">
        <h1>April</h1>
    </div>
    <div class="days">
    	<div class="day">Пн</div>
    	<div class="day">Вт</div>
    	<div class="day">Ср</div>
    	<div class="day">Чт</div>
    	<div class="day">Пт</div>
    	<div class="day">Сб</div>
    	<div class="day">Вс</div>
    </div>
    <div class="week1">
        <div class="number" id="d1" name="non">
            <p>28</p>
            <p> </p><p> </p>
        </div>
        <div class="number" id="d2" name="non"><p>29</p><p> </p><p> </p></div>
        <div class="number" id="d3" name="non"><p>30</p><p> </p><p> </p></div>
        <div class="number" id="d4" name="non"><p>31</p><p> </p><p> </p></div>
        <div class="number" id="d5">
            <p>1</p>
            <p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" class="1" /></a>  </p>
            <p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p>
        </div>
        <div class="number" id="d6"><p>2</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" class="2" /></a>  </p></div>
        <div class="number" id="d7"><p>3</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>   </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
    </div>

    <div class="week2">
        <div class="number" id="d3"><p>4</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d4"><p>5</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d5"><p>6</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d6"><p>7</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d7"><p>8</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d1"><p>9</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a> </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d2"><p>10</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
    </div>

    <div class="week3">
        <div class="number" id="d4"><p>11</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d5"><p>12</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d6"><p>13</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d7"><p>14</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d1"><p>15</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d2"><p>16</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d3"><p>17</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
    </div>

    <div class="week4">
        <div class="number" id="d5"><p>18</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d6"><p>19</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d7"><p>20</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d1"><p>21</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d2"><p>22</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d3"><p>23</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d4"><p>24</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
    </div>

    <div class="week5">
        <div class="number" id="d6"><p>25</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d7"><p>26</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d1"><p>27</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d2"><p>28</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d3"><p>29</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d4"><p>30</p><p class="img"><a href="\AddNote/AddNote.php" target="_blank"><img src="images/add1.png" /></a>  </p><p class="img"><a href="\Output/output.php" target="_blank"><img src="images/look.jpg" /></a>  </p></div>
        <div class="number" id="d5" name="non"><p>1</p><p> </p><p> </p><p> </p></div>
    </div>


</body>
</html>
