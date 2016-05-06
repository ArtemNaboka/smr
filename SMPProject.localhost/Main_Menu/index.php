<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kture Notes</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/jquery-swipe-nav.css" media="all" />
	<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-swipe-nav-plugin.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($){

			//Page Action
			$(document).on('click','#swipeNav li a',function(){
				var href= $(this).attr("href");
				switch(href){
					case '#calendar':
						$('#main').load('calendar.html');
						return false;
					break;
					case '#src':
						$('#main').load('src.html');
						return false;
					break;
				}
			});

			
			$('#swipeNav').swipeNav();
		});
	</script>
	<style type="text/css">
	body{
		font-family: 'Raleway', sans-serif;
    background-color:#fafafa;
	}
	#container{
		position: relative;
		padding: 20px;
	}
	#container h1{
		color: rgba(0, 140, 152, 1);
		font-size: 70px;
		text-align: center;
	}
	#container #main{
		display: block;
		width: 70%;
		margin: 70px auto 0;
	}
	</style>
</head>
<body>
	<nav id="swipeNav">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="\Calendar/calendar.php">Calendar</a></li>
    <li><a href="#">About</a></li>
    <li><a href="\authorization.php">Logout</a></li>
  </ul>
</nav>
	<div id="container">
		<img src="img/list-icon.png" alt="" width="24" height="24" id="menuBtn" />
		<h1>Kture Notes</h1>
		<h3><?php


	
	mysql_connect("localhost", "mysql", "mysql") or die(mysql_error());
    mysql_select_db('notes');
    $login = $_POST['login'];		
    $query = mysql_query("SELECT * FROM authorization WHERE login='$login'");
    $login_e = $_POST['login_e'];
	$query_e = mysql_query("SELECT * FROM authorization WHERE login='$login_e'");
	$row = mysql_fetch_array($query_e);
	if(isset($_POST['submit']) && $_POST['password'] == $_POST['r_password'] && mysql_num_rows($query) == 0):
	
					
			$password = md5($_POST['password']);			
    		mysql_query("INSERT INTO authorization VALUES ('$login', '$password')");
    		$_SESSION["login"] = $login;
			echo "Hello, ".$_SESSION['login']."!";
	
	elseif(true):
		
		$_SESSION["login"] = $login_e;
		echo "Hello, ".$_SESSION['login']."!";
	
	else:
	
		echo "Wrong login or password";
	endif;
		?></h3>
	</div>
	<div></div>
</body>

</html>