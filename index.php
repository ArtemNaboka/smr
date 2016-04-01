<!DOCTYPE html>
<html>
<head>
	<title>Добавление заметки</title>
</head>
<body>
    <?php  
		     mysql_connect("localhost", "mysql", "mysql") or die(mysql_error());
		     mysql_select_db('notes');
		    
		    if(isset ($_POST['submit'])){
		    	$title = $_POST['title'];
		    	$area = $_POST['text'];
		    	$time_notes=date("Y-m-d H:i:s");
		    	if(strlen($title) != 0 && strlen($area) != 0){
		    	    mysql_query("INSERT INTO nots VALUES ('', '$time_notes', '$title', '$area')");
		    	}
		    } 
		    
		     
	?>
     <div>
         <h1>Добавить заметку</h1>
	     <form class="form" method="POST">
	     	Краткое описние: <input type="text" name="title" class="title" /><br/><br/>
	     	Текст заметки: <textarea name="text" class="text"></textarea><br/><br/>
	     	<input type="submit" name="submit" value="Добавить" />
	     </form>
     </div>
     <br/><br/><br/><br/>
     <form method="POST">
     <input type="submit" name="sub" value="Показать"></input>
     </form>
	<?php
		mysql_connect("localhost", "mysql", "mysql") || die(mysql_error());
		mysql_select_db('notes');
		if(isset($_POST['sub'])){
			$result = mysql_query("SELECT * FROM `nots`");// || die(mysql_error());
			while ($row = mysql_fetch_array($result)) {
				echo $row['id'].") &nbsp;".$row['title']."&nbsp".$row['fullNote']."<br/><hr/>";
			}
		}
	?>
	<a href="calendar.php">Календарь</a>
</body>
</html>