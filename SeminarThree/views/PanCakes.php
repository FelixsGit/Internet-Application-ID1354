<?php
    use TastyRecipes\Util\Constants;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pancakes recipe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <link rel = "stylesheet"
              type = "text/css"
              href = "../../Resources/CSS/ResetCSS.css"/>
        <link rel = "stylesheet"
              type = "text/css"
              href = "../../Resources/CSS/TastyCSS.css"/>
         <link rel ="stylesheet"
              type ="text/css"
              href ="../../Resources/CSS/Style.css"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
    </head>
    <body>  
        <div class = "systemInfo" > Web page Secure & Online </div>
                   <div class="topnav" id="myTopnav">
                        <a href="DisplayMainPage">Home</a>
                        <a href="DisplayCalendarPage">Calender</a>
                        <a href="DisplayPanCakePage">Pancake Recipe</a>
                        <a href="DisplayMeatBallPage">MeatBalls Recipe</a>
            <?php
                 if($this->session->get(Constants::USER_LOGGED_IN) == 'notLoggedIn'){  
                    echo '                        
                        <a href="DisplayLoginPage">Login</a>
                        <a href="DisplaySignUpPage">Sign Up</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                        </div>      
                        ';
                }else{
                    echo '                        
                        <a href="LogoutData" >Logout</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>               
                        </div>  
                         ';
                }
                if($this->session->get(Constants::USER_LOGGED_IN) != 'notLoggedIn'){     
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
                $recipe = 'pancakes';
                if($this->session->get(Constants::USER_LOGGED_IN) != 'notLoggedIn' ){ 
                    echo "<form  method='POST' action='CommentData'>
                    <input type = 'hidden' name ='username' value='".$this->session->get(Constants::USER_LOGGED_IN)."'>
                    <textarea name='commentText' placeholder='Type comment here' ></textarea><br>
                    <input type = 'hidden' name = 'recipe' value = '".$recipe."'>
                    <input class = 'commentButton' type = 'submit' name = 'commentButton' value = 'Comment'>
                    </form>";
                }
            ?> 
            <div class="completedComments" >
               <?php   
               foreach($comments as $comment){
                    echo "<form method='POST' action='ShowCommentData'><p> '".$comment['userid']."' '".$comment['message']."'
                    <input type = 'hidden' name = 'username' value = '".$this->session->get(Constants::USER_LOGGED_IN)."'>
                    <input type = 'hidden' name='commentID' value= '".$comment['commentID']."'>
                    <input type = 'hidden' name='recipe' value= '".$recipe."'>"; 
                    if ($this->session->get(Constants::USER_LOGGED_IN) != 'notLoggedIn' && $comment['userid'] == $this->session->get(Constants::USER_LOGGED_IN)){
                        echo "<input type='submit' name='delete' value='Delete comment'></p></form>";
                    } 
                    else{
                        echo '' . '</p></form>';
                    }
               }
              ?>
            </div>     
        </div>     
    </body>
</html>


