<?php
use TastyRecipes\Util\Constants;
?>
<!DOCTYPE html>
<html>  
    <head>
        <title>Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        require_once('Resources/Includes/links&scripts.php');
        ?>
    </head>   
    <body>
        <div class = "systemInfo" > Web page Secure & Online </div>     
        <?php
        require_once('Resources/Includes/navBar.php');
        if ($this->session->get(Constants::USER_LOGGED_IN) != 'notLoggedIn') {
            ?>
            <div class ="username" >
                <?php
                echo $this->session->get(Constants::USER_LOGGED_IN)
                ?>
                is online
            </div>
            <?php
        }
        ?>             
        <div class = "MenuStripe" >
            <h1 class = "logo" >Tasty Recipes</h1>
            <h2 class = "welcomeLogo" >Welcome to Tasty Recipes!</h2> 
            <div class = "welcomeText"> On this site you can find many different recipes. Everything from dog to 
                pancakes. You will also find a calender where we post two of these amazing
                recipes each month. 
                Here at Tasty Recipes we love food. Thats why you will found only the best recipes! Our recipes also provide 
                directions on our preferred way off cooking! We are Tasty Recipes, feel free to look around!
            </div>     
        </div>
    </body>
</html>
