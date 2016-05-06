
<html>
<head>
	<title>Edit Note</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="edit.css">
</head>
<body>
    <section class="container">
    <div class="login">
      <h1>Редактировать заметку</h1>
	<form method="POST" action="output.php">
	<?php
	@session_start();

	mysql_connect("localhost", "mysql", "mysql") or die(mysql_error());
    mysql_select_db('notes'); 
    $id = $_POST['NoteToEdit'];
    $_SESSION['id'] = $id;
    $query = mysql_query("SELECT * FROM TableOfNotes WHERE id='$id'");
    $row = mysql_fetch_array($query);
    $title = $row['title'];
    $fullNote = $row['fullNote'];
        echo "<p><input type='text' name='editTitle' value='$title'></p>
        
        <p>
          
          <textarea name='editNote'>$fullNote</textarea>
        </p>";
        ?>
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