<?php
require_once 'ConnToServer.php';

function changePassword(){
$error = false;
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email)) {
	$error = true;
	echo "Empty";
	exit;
} 

if (empty($password)) {
	$error = true;
	echo "Empty";
	exit;
} 

if(strlen($password) < 6) {
   $error = true;
   echo "Password Too Short";
   exit;
  }

$sql = "SELECT password FROM users WHERE email = '".$email."' LIMIT 0, 1";
$result = mysql_query($sql);
$res = mysql_fetch_assoc($result);

if(!$result){
echo "DB Error, could not query the database\n";
echo 'MySQL Error: ' . mysql_error();
exit;
}

// password encrypt
  $options = [
  'cost' => 11
];
$hashed_password =  password_hash($password, PASSWORD_BCRYPT, $options);
  
 $query = "UPDATE users SET password='".$hashed_password."' WHERE email = '".$email."'";
  $pwchange = mysql_query($query);
  
  if($pwchange){
  	echo "Success";
  }
  else{
  	echo "Failed";
  }
	
}


changePassword();





?>