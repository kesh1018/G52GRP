<?php
    $con = mysqli_connect("localhost", "root", "", "admin");
    
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM admin WHERE user_email = ? AND user_password = ?");
    mysqli_stmt_bind_param($statement, "ss", $user_email, $user_password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_id, $user_name, $user_email, $user_password);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["user_name"] = $user_name;
        $response["user_email"] = $user_email;
        $response["user_password"] = $user_password;
    }
    
    echo json_encode($response);
?>