<?php
$connect = @mysql_connect("localhost", "nickskye", "1Lyakl4e!");
if(!$connect){
	die('Not connected: ' . mysql_error());
}

$db_selected = mysql_select_db('nickskye_Look', $connect);
if(!$db_selected){
	die ('Can\'t use foo : ' . mysql_error());
}
?>