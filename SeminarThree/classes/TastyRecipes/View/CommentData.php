<?php

namespace TastyRecipes\View;
use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class CommentData extends AbstractRequestHandler {
    
    private $username;
    private $recipe;
    private $commentText;
    private $commentButton;
    
    public function setUsername($username){
        $this->username = $username;
    }
    public function setCommentText($commentText){
        $this->commentText = $commentText;
    }
    public function setRecipe($recipe){
        $this->recipe = $recipe;
    }
    public function setCommentButton($commentButton){
        $this->commentButton = $commentButton;
    }
    protected function doExecute() {
        $contr = $this->session->get(Constants::CONTR_KEY_NAME);
        $contr->enterComment($this->username, $this->recipe, $this->commentText);
        if($this->recipe == 'meatballs'){
            return 'MeatBalls';
        }elseif($this->recipe == 'pancakes'){
            return 'PanCakes';
        }
    }   
}