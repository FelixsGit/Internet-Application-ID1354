
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>  
    <head>
        <title>Sign Up</title>
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
            <a href="DisplayLoginPage">Login</a>
            <a href="DisplaySignUpPage">Sign Up</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>                 
        <div class = "MenuStripe" >
            <h2 class = "welcomeLogo" >Sign Up</h1>
                <header>
                    <nav>
                        <div class="main-wrapper">
                            <div class="nav-signup">
                                <form class="signup-form" action="SignUpData" method="POST">
                                    <input type="text" name="uid" placeholder="Username"><br>
                                    <input type="password" name="pwd" placeholder="Password"><br><br>
                                     <input type="submit" value="Sign up">
                                 </form>
                            </div>
                        </div>
                    </nav>
                </header> 
            <div class = "form-errorsSignup">
                <?php
                if(isset($status) && $status == 'FieldsEmpty'){
                    echo 'Fields are empty';
                }
                if(isset($status) && $status == 'InvalidUsernameCharacters'){
                    echo 'invalid username, use only letters';
                }
                if(isset($status) && $status == 'usernameTaken'){
                    echo 'username taken';
                }
                ?>
        </div>
    </body>
</html>
