<?php
namespace TastyRecipes\View;
use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;
class GetUsername extends AbstractRequestHandler {
    
    protected function doExecute() {
        $this->addVariable(Constants::JSON_DATA_VAR,  $this->session->get(Constants::USER_LOGGED_IN));
        return "jsonHandler";
    }
}