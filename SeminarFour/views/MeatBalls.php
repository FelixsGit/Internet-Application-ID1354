<?php
use TastyRecipes\Util\Constants;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Meatballs recipe</title>
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
        <div class = "MiddleStripe" >
            <img src = "../../Resources/Images/MeatBalls.jpg" alt = "picture of meatballs" class = "picture" > 
            <h2 class = "Recipe" > Swedish Meatball recipe</h2>
            <div class = "Text" > Approximate time: 30 minutes</div>
            <div class = "Text" > Portions: 4 </div>
            <h3 class = "normalHeader" > Ingredients </h3>
            <ul class = "ListIngrediens">  
                <li>500 grams ground beef.</li>
                <li>100 grams butter.</li>
                <li>150 grams flour.</li>
                <li>2 tablespoons salt.</li>
            </ul>
            <h3 class = "normalHeader" > Directions </h3>
            <ol class = "ListDirections" >
                <li>Mix the ingredients in a bowl.</li>
                <li>Split the content into 20 gram portions.</li>
                <li>Make your meatballs round by rolling them.</li>
                <li>Cook your meatballs in some butter for a few minutes</li>
                <li>Ready to be server, goes well with pasta or potatoes</li>
            </ol>
            <h3 class ="normalHeader" > Comments </h3>
            <?php
             require_once('Resources/Includes/comments.php');
             ?>
    </body>
</html>
