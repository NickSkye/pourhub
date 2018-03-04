<?php
require_once 'ConnToServer.php';



function registerUser(){
$error = false;

$first = $_POST['first'];
$last = $_POST['last'];
$password = $_POST['password'];
$email = $_POST['email'];
$username = $_POST['username'];
$currentlatitude = $_POST['currentlatitude'];
$currentlongitude = $_POST['currentlongitude'];


$age = 21;
  
  if (empty($first)) {
   $error = true;
   echo "First name field is empty";
   exit;
  } 
  
  if(empty($last)){
   $error = true;
   echo "Last name field is empty";
   exit;
  }
  
  if(empty($username)){
  $error = true;
  echo "Username field is empty";
  exit;
  } else {
  	$query = "SELECT email FROM user WHERE username = '".$username."'";
  	$result = mysql_query($query);
  	$count = mysql_num_rows($result);
  	if($count!=0){
  	$error = true;
  	$usernameError = "Username already in use";
  	echo $usernameError;
  	exit;
  	}
  }
 
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
   echo $emailError;
   exit;
  } else {
   // check email exist or not
   $query = "SELECT email FROM user WHERE email = '".$email."'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
    echo $emailError;
    exit;
   }
  
  // password validation
  if (empty($password)){
   $error = true;
   echo "Empty Password Field";
   exit;
  } else if(strlen($password) < 6) {
   $error = true;
   echo "Password Too Short";
   exit;
  }
  
  // password encrypt
  $options = [
  'cost' => 11
];
$hashed_password =  password_hash($password, PASSWORD_BCRYPT, $options);
  

  // if there's no error, continue to signup
  if( !$error ) {
   $query = "INSERT INTO user(first, last, email, username, password) VALUES('".$first."','".$last."','".$email."','".$username."','".$hashed_password."')";
   $res = mysql_query($query);

   
   if ($res) {
    $errTyp = "success";
    unset($first);
    unset($email);
    unset($password);
    unset($username);
    unset($last);
    unset($currentlatitude);
    unset($currentlongitude);
    echo "Success";
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
    
    echo "None";
    exit;
   } 
  }
  }
  }
  
  registerUser();
  
?>