<?php

namespace TastyRecipes\View;
use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class LogoutData extends AbstractRequestHandler {
    
    protected function doExecute() {
        $this->session->set(Constants::USER_LOGGED_IN,  'notLoggedIn' );
        return 'MainPage';
    }
    
}
