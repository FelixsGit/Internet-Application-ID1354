<?php

namespace TastyRecipes\View;
use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class LoginData extends AbstractRequestHandler{
    
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
            $status = 'Invalid';
            $this->addVariable('status', $status);
            return 'Login';
        }
        elseif(!preg_match("/^[a-zA-Z]*$/", $this->theUsername)){
            $status = 'Invalid';
            $this->addVariable('status', $status);
             return 'Login';
        }
        elseif(strlen($this->theUsername) > 15 || strlen($this->thePassword) > 15){
            $status = 'Invalid';
            $this->addVariable('status', $status);
            return 'Login';
        }
        $login = $contr->loginUser($this->theUsername, $this->thePassword);
        
        if($login == 'Invalid'){
            $status = 'Invalid';
            $this->addVariable('status', $status);
            return 'Login';
        }
        if($login == 'loginOk'){
            $this->session->set(Constants::USER_LOGGED_IN, $this->theUsername);
            return 'MainPage';
            
        }else {
            return 'Login';
        }
    }    
}
