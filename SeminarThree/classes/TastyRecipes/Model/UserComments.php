<?php

namespace TastyRecipes\Model;
use TastyRecipes\Integration\DatabaseManager;


class UserComments {
    
    private $databaseManager;
    
    public function _construct(){

    }
    public function postUserComment($username,$recipe,$commentText){
        $this->databaseManager = new DatabaseManager();
        $this->databaseManager->createComment($username, $recipe, $commentText);
    }
    public function showUserComment($recipe){
        $this->databaseManager = new DatabaseManager();
        return $this->databaseManager->getComment($recipe);
        
    }
    public function deleteComment($userCommentToDelete){ 
        $this->databaseManager = new DatabaseManager();
        $commentauthor = $this->databaseManager->getCommentAuthor($userCommentToDelete->getCommentID());
        if($commentauthor == $userCommentToDelete->getUsername()){
            $this->databaseManager->deleteComment($userCommentToDelete);
        }
    }
}
