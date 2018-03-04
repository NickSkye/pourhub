<?php
$connect = Doctrine\DBAL\Driver\PDOMySql\("localhost", "nickskye", "password!");
if(!$connect){
	die('Not connected: ' . mysql_error());
}

$db_selected = mssql_select_db('look', $connect);
if(!$db_selected){
	die ('Can\'t use foo : ' . mysql_error());
}
?>