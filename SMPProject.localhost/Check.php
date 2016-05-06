<?php
	session_start();
	mysql_connect("localhost", "mysql", "mysql") or die(mysql_error());
    mysql_select_db("notes") or die(mysql_error());
	if (isset($_POST['submit_e'])) {
		$query_e = mysql_query("SELECT * FROM authorization WHERE login='$login_e'");
		$row = mysql_fetch_array($query_e);
		if (mysql_num_rows($query_e) != 1 && (md5($_POST['password_e']) != $row['password'])) {
			header("location: Main_Menu/index.php");
		}
	}
	else
	{
		$_SESSION["login"] = $login_e;
		header("location: Main_Menu/index.php");
	}
?>