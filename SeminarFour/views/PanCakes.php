<?php
use TastyRecipes\Util\Constants;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pancakes recipe</title>
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
                echo $this->session->get(Constants::USER_LOGGED_IN);
                ?>
                is online
            </div>
            <?php
        }
        ?>  
        <div class = "MiddleStripe" >
            <img src = "../../Resources/Images/Pancakes.jpg"
                 alt = "picture of pancakes" class = "picture" > 
            <h2 class = "Recipe" > American Pancake recipe</h2>
            <div class = "Text" > Approximate time: 20 minutes</div>
            <div class = "Text" > Number of Pancakes: 12 </div>
            <h3 class = "normalHeader" > Ingredients </h3>
            <ul class = "ListIngrediens">  
                <li>5 deciliters flour.</li>
                <li>100 grams butter.</li>
                <li>5 eggs.</li>
                <li>2 tablespoons salt.</li>
            </ul>
            <h3 class = "normalHeader" > Directions </h3>
            <ol class = "ListDirections" >
                <li>Mix the ingredients in a bowl.</li>
                <li>Pour some of the mixture on to a hot pan.</li>
                <li>Turn your pancake after a few minutes.</li>
                <li>When the pancake is done take if of the pan.</li>
                <li>Ready to be server, goes well syrup or jam.</li>
            </ol>
            <h3 class ="normalHeader" > Comments </h3>
            <?php
            require_once('Resources/Includes/comments.php');
            ?>
    </body>
</html>


