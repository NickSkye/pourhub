<?php
$connect = @mysql_connect("localhost", "nickskye", "password!");
if(!$connect){
	die('Not connected: ' . mysql_error());
}

$db_selected = mysql_select_db('look', $connect);
if(!$db_selected){
	die ('Can\'t use foo : ' . mysql_error());
}
?>