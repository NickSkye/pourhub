<?php
require("password.php");
$connect = mysqli_connect("localhost", "nickskye_nick", "1Lyakl4e!", "nickskye_FailSafe");
if ( mysqli_connect_errno($connect)){
	echo '{"query_result":"ERROR"}';
}
//
$first = $_POST['First'];
$last = $_POST['Last'];
$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['Password'];


     function registerUser() {
        global $connect, $first, $last, $username, $email, $password, $passwordHash;
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $statement = mysqli_prepare($connect, "INSERT INTO FailSafeUsers (First, Last, Username, Email,Password) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($statement, "sssss", $first, $last, $username, $email, $passwordHash); //$passwordHash instead of password , sssss is type of each variable
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);     
    }
    function usernameAvailable() {
        global $connect, $username;
        $statement = mysqli_prepare($connect, "SELECT * FROM FailSafeUsers WHERE Username = ?"); 
        mysqli_stmt_bind_param($statement, "s", $username);
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
        $count = mysqli_stmt_num_rows($statement);
        mysqli_stmt_close($statement); 
        if ($count < 1){
            return true; 
        }else {
            return false; 
        }
    }
    $response = array();
    $response["success"] = false;  
    if (usernameAvailable()){
        registerUser();
        $response["success"] = true;  
    }
    
    echo json_encode($response);
?>