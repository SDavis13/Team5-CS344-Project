<?php
function dbconnect(){
	$login = file("password.txt", FILE_IGNORE_NEW_LINES); //format: username\r\npassword
	$db = new PDO("mysql:dbname=kids_first;host=localhost", $login[0], $login[1]);
}
dbconnect();
?>