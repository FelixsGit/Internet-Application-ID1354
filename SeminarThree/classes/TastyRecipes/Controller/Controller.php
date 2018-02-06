<?php

namespace TastyRecipes\Controller;
use TastyRecipes\Model\User;
use TastyRecipes\Model\UserComments;


/**
 * The application's controller, all calls to the model pass through here.
 */
class Controller  {

    public function __construct() {
        
    }
    public function registerUser($username,$password){
        $user = new User($username,$password);
        return $user->signUpUser();
    } 
    public function loginUser($username,$password){
        $user = new User($username,$password);
        return $user->loginUser();
    }
    public function enterComment($username,$recipe,$commentText){
        $userComments = new UserComments();
        $userComments->postUserComment($username,$recipe,$commentText);
    }
    public function showComment($recipe){
        $userComments = new UserComments();
        return $userComments->showUserComment($recipe);
    }
   public function deleteComment($username, $commentID, $recipe){
        $userCommentToDelete = new UserCommentToDelete($username, $commentID, $recipe);
        $userComments = new UserComments();
        $userComments->deleteComment($userCommentToDelete);
    }
}
