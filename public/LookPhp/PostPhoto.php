<?php
require_once 'ConnToServer.php';

function setPhoto(){
$user= $_REQUEST['username'];
$lat = $_REQUEST['latitude'];
$long = $_REQUEST['longitude'];
$pic = $_REQUEST['pictureurl'];




$query = "INSERT INTO userpictures (username, pictureurl, datetime, latitude, longitude) VALUES ('".$user."', '".$pic."', now(), '".$lat."', '".$long."')";
	


  
 // $query = "UPDATE users SET coins='".$token."' WHERE email = '".$email."'";
  $result = mysql_query($query);
  
  if($result){
  	echo "Success";
  }
  else{
  	echo "Failed";
  }
}

setPhoto();

?>