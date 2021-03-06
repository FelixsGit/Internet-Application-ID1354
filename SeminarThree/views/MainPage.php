<?php
    use TastyRecipes\Util\Constants;
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>  
    <head>
        <title>Tasty Recipes</title>
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
