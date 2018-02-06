<?php

namespace TastyRecipes\Model;
use TastyRecipes\Integration\DatabaseManager;

class User {
    
    private $username;
    private $password;
    private $databaseManager;
    
    public function __construct($username,$password) {
        $this->databaseManager = new DatabaseManager();
        $this->username = $username;
        $this->password = $password;
    }
    
    public function signUpUser(){
        $result = $this->databaseManager->getUsernameByName($this->username);  
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
            return 'usernameTaken';
        }else{
            $hash = password_hash($this->password, PASSWORD_DEFAULT);
            $this->databaseManager->createUser($this->username, $hash);
            return 'signUpComplete';
        }   
   }
   public function loginUser(){
        $result1 = $this->databaseManager->getUsernameByName($this->username);
        $resultCheck1 = mysqli_num_rows($result1);
        if($resultCheck1 > 0){
            $result2 = $this->databaseManager->getUserPasswordByName($this->username);
            if(password_verify($this->password, $result2)){
                return 'loginOk';
            }else{
                return 'Invalid';
            }
        }else{
            return 'Invalid';
       }
   }
}
