<?php
namespace TastyRecipes\View;
use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;
class GetJsonPanCakeComment extends AbstractRequestHandler {
    
    protected function doExecute() {
        $contr = $this->session->get(Constants::CONTR_KEY_NAME);
        $recipe = 'pancakes';
        $this->addVariable(Constants::JSON_DATA_VAR,  $contr->showComment($recipe));
        
         return 'JsonHandler';
    }
    
}