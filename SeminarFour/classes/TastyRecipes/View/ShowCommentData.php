<?php

namespace TastyRecipes\View;
use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class ShowCommentData extends AbstractRequestHandler {
    
    private $username;
    private $recipe;
    private $commentID;
    private $delete;
        
    public function setUsername($username){
        $this->username = $username;
    }
    public function setCommentid($commentID){
        $this->commentID = $commentID;
    }
    public function setRecipe($recipe){
        $this->recipe = $recipe;
    }
    public function setDelete($delete){
        $this->delete =$delete;
    }
    
    protected function doExecute() {
        $contr = $this->session->get(Constants::CONTR_KEY_NAME); 
        $contr->deleteComment($this->session->get(Constants::USER_LOGGED_IN), $this->commentID, $this->recipe);               
        if($this->recipe == 'meatballs'){
            $this->addVariable('comments', $contr->showComment($this->recipe));
            return 'MeatBalls';
        }
        if($this->recipe == 'pancakes'){
            $this->addVariable('comments', $contr->showComment($this->recipe));
            return 'PanCakes';
        }
    }   
}