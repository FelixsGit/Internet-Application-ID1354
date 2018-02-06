<?php
session_start();

if(isset($_POST['submit'])){
    
    include_once 'Dbh.inc.php';  
    $username = $_POST['uid'];
    $password = $_POST['pwd'];
     
    //Error Handlers
    //Check for empty fields
    if(empty($username) || empty($password)){
                $_SESSION['errors'] = array("Your username or password is empty, please apply information.");
                header("Location: ../Signup.php?=Signup=empty");
        exit();
    }else{
        //check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $username)){
               $_SESSION['errors'] = array("Invalid username - use only letters.");
                header("Location: ../Signup.php?=Signup=invalidusername");
            exit();
        }else{
            //check if username already taken
            $sql = "SELECT * FROM users WHERE user_name='$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            //user taken
            if($resultCheck > 0){
                header("Location: ../Signup.php?Signup=usertaken");
                      $_SESSION['errors'] = array("Username already taken.");
                exit();
            }else{
                //Hasing the password
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                //Inser the user into the database
                $sql = "INSERT INTO users (user_name, user_password) VALUES ('$username', '$hashedPwd');";
                mysqli_query($conn, $sql);
                header("Location: ../Login.php?Signup=success");
                exit();
            }
        }
    }  
}else{
    header("Location: ../Signup.php");
    exit();
}