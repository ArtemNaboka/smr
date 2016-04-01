<!DOCTYPE html>
<html>
<head>
	<title>Заметки</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="output.css">
</head>
<body>
    <?php
         mysql_connect("localhost", "mysql", "mysql") or die(mysql_error());
         mysql_select_db('notes');        
	     $result = mysql_query("SELECT * FROM `nots` WHERE title='Лаба'");
	     while ($row = mysql_fetch_array($result)) {
	     	 echo "<p>".$row['fullNote']."</p>"."<br/>"."<hr/>";
	     }
    ?>
</body>
</html>