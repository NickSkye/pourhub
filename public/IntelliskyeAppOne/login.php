<?php
	require("password.php");
   $connect = mysqli_connect("localhost", "nickskye_nick", "1Lyakl4e!", "nickskye_FailSafe");
   
   $username = $_POST['username'];
   $password = $_POST['password'];
   
    $statement = mysqli_prepare($connect, "Select * FROM FailSafeUsers WHERE Username = ?"); //AND Password = ?
        mysqli_stmt_bind_param($statement, "s", $username); //$passwordHash instead of password , sssss is type of each variable
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
        mysqli_stmt_bind_result($statement, $colFirst, $colLast, $colUsername, $colEmail, $colPassword, $colGender, $colAge, $colPic, $colHeight, $colWeight, $colHair, $colEyes, $colLatitude, $colLongitude, $colActive);
        
        $response = array();
    	$response["success"] = false;  
    	
    	while(mysqli_stmt_fetch($statement)){
    		if(password_verify($password, $colPassword)){
    		$response["success"] = true;
    		$response["First"] = $colFirst;
    		$response["Last"] = $colLast;
    		$response["Username"] = $colUsername;
    		$response["Email"] = $colEmail;
    		$response["Password"] = $colPassword;
    		}
    		}
    		
    		echo json_encode($response);
?>