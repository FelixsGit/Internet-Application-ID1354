<?php

namespace TastyRecipes\Model;

class UserCommentToDelete{
    private $username;
    private $commentID;
    private $recipe;
    
    public function __construct($username, $commentID, $recipe){
        $this->username = $username;
        $this->commentID = $commentID;
        $this->recipe = $recipe;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getCommentID(){
        return $this->commentID;
    }
    public function getRecipe(){
        return $this->recipe;
    }
}