<?php

session_start();

if(isset($_POST['submit'])){
    
    include 'Dbh.inc.php';
    
    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    
    //Error Handlers
    //Check if inputs are empty
    if(empty($username) || empty($password)){
                  $_SESSION['errors'] = array("Your username or password was incorrect.");
                header("Location: ../Login.php?=login=empty");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_name ='$username'";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck < 1){
            $_SESSION['errors'] = array("Your username or password was incorrect.");
                header("Location: ../Login.php");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                //De-hasing the password
                $hashedPwdCheck = password_verify($password, $row['user_password']);
                if($hashedPwdCheck == false){
                   $_SESSION['errors'] = array("Your username or password was incorrect.");
                header("Location: ../Login.php");
                    exit();   
                }else if($hashedPwdCheck == true){
                    //Log in the user here
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_name'] = $row['user_name'];
                    $_SESSION['u_password'] = $row['user_password'];
                    header("Location: ../MainPage.php?login=success");
                    exit();   
                }
            }
        }
    }
}else{
        header("Location: ../Login.php?login=error");
        exit();   
}