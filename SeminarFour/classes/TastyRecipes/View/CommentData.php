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
        
        if($this->recipe == 'meatballs'){
            if(strlen($this->commentText) > 150){
                $status = 'invalidCommentLength';
                $this->addVariable('status', $status);
                $this->addVariable('comments', $contr->showComment($this->recipe));
                return 'JsonHandler';
            }
            elseif(filter_var($this->commentText, FILTER_SANITIZE_STRING)){
                $this->commentText = filter_var($this->commentText, FILTER_SANITIZE_STRING);
                $contr->enterComment($this->username, $this->recipe, $this->commentText);
                $this->addVariable('comments', $contr->showComment($this->recipe));
                return 'JsonHandler';
            }
            else{
                $status = 'invalidComment';
                $this->addVariable('status', $status);
                $this->addVariable('comments', $contr->showComment($this->recipe));
                return 'JsonHandler';
            }
        }
        if($this->recipe == 'pancakes'){
            if(strlen($this->commentText) > 150){
                $status = 'toLongComment';
                $this->addVariable('status', $status);
                $this->addVariable('comments', $contr->showComment($this->recipe));
                return 'JsonHandler';
            }
            elseif(filter_var($this->commentText, FILTER_SANITIZE_STRING)){
                $this->commentText = filter_var($this->commentText, FILTER_SANITIZE_STRING);
                $contr->enterComment($this->session->get(Constants::USER_LOGGED_IN), $this->recipe, $this->commentText);
                $this->addVariable('comments', $contr->showComment($this->recipe));
                return 'JsonHandler';
            }
            else{
                $status = 'invalidComment';
                $this->addVariable('status', $status);
                $this->addVariable('comments', $contr->showComment($this->recipe));
                return 'JsonHandler';
            }
        }
    }
}