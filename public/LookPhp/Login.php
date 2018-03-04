<?php
require_once 'ConnToServer.php';


function loginUser(){
$error = false;
$uw = $_REQUEST['username'];
$pw = $_REQUEST['password'];

if(empty($uw)){
	$error = true;
	echo "No username";
	return;
}

if(empty($pw)){
	$error = true;
	echo "No Password";
	return;
}

if(!($error)){

$query = "SELECT password FROM user WHERE username = '".$uw."' LIMIT 0, 1";

$res = mysql_query($query);


echo $res["password"];

if(!$res){
$message = 'Invalid query: ' . mysql_error() . "\n";
$message .= 'Whole query: ' . $query;
echo($message);
return;
}

if($res == $pw){

	//if(crypt($password, $res) == $res){
	if( !$error ){
	$errType = "success";
	unset($username);
	unset($password);
	
	echo "$error";
	return;
	}else{
	echo "Success";
	$error = true;
	$errType = "danger";
	}
}else{
	echo "$res";
	return;
}

}


}

loginUser();

?>