<?php
$connect = mysql_connect("159.89.136.1", "nickskye", "password");
if(!$connect){
	die('Not connected: ' . mysql_error());
}

$db_selected = mysql_select_db('look', $connect);
if(!$db_selected){
	die ('Can\'t use foo : ' . mysql_error());
}
?>