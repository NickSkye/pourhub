<?php
require_once 'ConnToServer.php';


function profiles(){
$uw = $_REQUEST['username'];
$sql = "SELECT first, last FROM user WHERE username = '".$uw."' LIMIT 0, 1";

$result = mysql_query($sql);
$res = mysql_fetch_assoc($result);

if(!$result){
echo "DB Error, could not query the database\n";
echo 'MySQL Error: ' . mysql_error();
exit;
}


echo $res["first"];
echo $res["last"];


}

profiles();
?>
