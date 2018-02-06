<?php
namespace TastyRecipes\View;
use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;
use TastyRecipes\Controller\Controller;

class DefaultRequestHandler extends AbstractRequestHandler{
    
    protected function doExecute() {
        echo 'CALLING CONTROLLER ';
        $this->session->restart();
        $this->session->set(Constants::CONTR_KEY_NAME,  new Controller());
        $this->session->set(Constants::USER_LOGGED_IN, 'notLoggedIn');
        \header('Location:  /SeminarFour/TastyRecipes/View/DisplayMainPage');
    }
}
