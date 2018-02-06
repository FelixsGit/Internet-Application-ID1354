<?php

namespace TastyRecipes\View;
use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class SignUpData extends AbstractRequestHandler{
    
    private $theUsername;
    private $thePassword;
    
    public function setUid($uid){
        $this->theUsername = $uid;
    }
    
    public function setPwd($pwd){
        $this->thePassword = $pwd;
    }
    
    protected function doExecute() { 
   
        $contr = $this->session->get(Constants::CONTR_KEY_NAME);
        
        if(empty($this->theUsername) || empty($this->thePassword)){
            $status = 'FieldsEmpty';
            $this->addVariable('status', $status);
            return 'Signup';
        }
        elseif(!preg_match("/^[a-zA-Z]*$/", $this->theUsername)){
            $status = 'InvalidUsernameCharacters';
            $this->addVariable('status', $status);
             return 'Signup';
        }
         elseif(strlen($this->theUsername) > 15 || strlen($this->thePassword) > 15){
            $status = 'toLong';
            $this->addVariable('status', $status);
            return 'Signup';
        }
         $signUp = $contr->registerUser($this->theUsername, $this->thePassword);
         
        if($signUp == 'usernameTaken'){
            $status = 'usernameTaken';
            $this->addVariable('status', $status);
            return 'Signup';
        }
        elseif($signUp == 'signUpComplete'){
            return 'Login';
        }
    }    
}
