<!DOCTYPE html>
<html>
<head>
	<title>Заметки</title>
	<meta charset="utf-8">
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="output.js"></script>
	<link rel="stylesheet" type="text/css" href="\bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="output.css">
	<script type="text/javascript" src="\bootstrap-3.3.6-dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="\bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
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
    <?php
    	@session_start();
         mysql_connect("localhost", "mysql", "mysql") or die(mysql_error());
         mysql_select_db('notes');
         $e_title = $_POST['editTitle'];
	    
	     $e_note =  $_POST['editNote'];
	     
	     $e_id = $_SESSION['id'];
	     
	     if (!is_null($e_title) && strlen($e_title) > 0) {
	     	# code...
	     	mysql_query("UPDATE TableOfNotes SET title='$e_title' WHERE id='$e_id'");

	     }

	     if (!is_null($e_note) && strlen($e_note) > 0) {

	     	mysql_query("UPDATE TableOfNotes SET fullNote='$e_note' WHERE id='$e_id'");

	     }   
	     $login = $_SESSION['login'];     
	     $result = mysql_query("SELECT * FROM TableOfNotes WHERE login='$login'");

	     while ($row = mysql_fetch_array($result)) {
	     	 
	     	 $title = "<h1>".$row['title']."</h1>";
	     	 $fullNote = "<p>".$row['fullNote']."</p>"."<br/>";
	     	 $id = $row['id'];
	     	 echo "<div class='note' id='$id'>
	     	 		<div class='out'>
		     	 		$title
		     	 		$fullNote
		     	 	</div>
	     	 		<div class='container'>
	     	 			<div class='row'>
	     	 				<div class='remove'>
				     	 		<form method='post' action='delete.php' class='deleteform'>
				     	 			<input hidden name='NoteToDelete' value='$id'></input>
				     	 			<span class='' id='menu'><input type='submit' name='sub' value='Remove' id='$id' class='btn btn-danger btn-sm'></span>
				     	 		</form>
				     	 	</div>
				     	 	<div class='edit'>
				     	 		<form method='post' action='edit.php' class='editform'>
				     	 			<input hidden name='NoteToEdit' value='$id'></input>
				     	 			<span class='' id='menu'><input type='submit' name='sub' value='Edit' id='$id' class='btn btn-default btn-sm'></span>
				     	 		</form>
				     	 	</div
			     	 	</div>
		     	 	</div>
	     	 	</div><br/><hr/>";
	     }
	     
	     
	     
    ?>
</body>
</html>