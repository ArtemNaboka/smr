<?php
    session_start();

	mysql_connect("localhost", "mysql", "mysql") or die(mysql_error());
	mysql_select_db('notes'); 
	$id = $_POST['NoteToDelete'];
	mysql_query("DELETE FROM TableOfNotes WHERE id='$id'");
	header('location: output.php');

?>