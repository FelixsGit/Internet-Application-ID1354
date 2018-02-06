<?php

namespace TastyRecipes\Integration;

class DatabaseManager {
    
    private $conn;
    
   public function __construct() {
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "tastydatabase";
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
        $this->conn = $conn;
    }
    
    public function getUsernameByName($username){  
        $usernameSafe = mysqli_real_escape_string($this->conn, $username);     
        $query = "SELECT user_name FROM users WHERE user_name ='".$usernameSafe."'";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }
    public function getUserPasswordByName($username){
        $usernameSafe = mysqli_real_escape_string($this->conn, $username);     
        $query = "SELECT user_password FROM users WHERE user_name ='".$usernameSafe."'";
        $result = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($result);
        return $row['user_password'];
    }
    
    public function createUser($username,$password){
        $usernameSafe = mysqli_real_escape_string($this->conn,$username);
        $passwordSafe = mysqli_real_escape_string($this->conn,$password);
        $query = "INSERT INTO users (user_name, user_password) VALUES ('".$usernameSafe."', '".$passwordSafe."');";
        mysqli_query($this->conn, $query);
    }
    
    public function createComment($username,$recipe,$commentText){
        $usernameSafe = mysqli_real_escape_string($this->conn,$username);
        $recipeSafe = mysqli_real_escape_string($this->conn,$recipe);
        $commentTextSafe = mysqli_real_escape_string($this->conn,$commentText);
        $query = "INSERT INTO recipecomment (message, userid, recipe) VALUES ('".$commentTextSafe."', '".$usernameSafe."', '".$recipeSafe."');";
        mysqli_query($this->conn, $query);
    }
    public function getComment($recipe){
        $recipeSafe = mysqli_real_escape_string($this->conn,$recipe);
        $query = "SELECT * FROM recipecomment WHERE recipe = '".$recipeSafe."');";
        $queryResults = mysqli_query($this->conn, $query);
        $comments = array();
        while($row = mysqli_fetch_assoc($queryResults)){
            $comments[] = $row;
        }
        return $comments;
    }
    public function getCommentAuthor($commentID){
        $commentIDSafe = mysqli_real_escape_string($this->conn,$commentID);
        $query = "SELECT username FROM recipecomment WHERE commentID = '$commentIDSafe'";
        $result = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($result);    
        return $row['username'];
    }
    
    public function deleteComment($userCommentToDelete){
        $commentID = $userCommentToDelete->getCommentID();
        $commentIDSafe = mysqli_real_escape_string($this->conn,$commentID);
        $query = "DELETE * FROM recipecomment WHERE commentID = '$commentIDSafe'";
        mysqli_query($this->conn, $query);
    }
}


