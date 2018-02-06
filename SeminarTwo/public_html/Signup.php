<?php
        session_start();
?>

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
              href = "CSS/ResetCSS.css"/>
        <link rel = "stylesheet"
              type = "text/css"
              href = "CSS/TastyCSS.css"/>
         <link rel ="stylesheet"
              type ="text/css"
              href ="CSS/Style.css"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
    </head>   
    <body>
        <div class = "systemInfo" > Web page Secure & Online </div>     
        <div class="topnav" id="myTopnav">
            <a href="MainPage.php">Home</a>
            <a href="Calender.php">Calender</a>
            <a href="PanCakes.php">Pancake Recipe</a>
            <a href="MeatBalls.php">MeatBalls Recipe</a>
            <a href="Login.php">Login</a>
            <a href="Signup.php">Sign Up</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>                 
        <div class = "MenuStripe" >
            <h2 class = "welcomeLogo" >Sign Up</h1>
                <header>
                    <nav>
                        <div class="main-wrapper">
                            <div class="nav-signup">
                                <form class="signup-form" action="Includes/Signup.inc.php" method="POST">
                                    <input type="text" name="uid" placeholder="Username"><br>
                                    <input type="password" name="pwd" placeholder="Password"><br><br>
                                     <button class="signupButton" type ="submit" name="submit">Sign up</button>
                                 </form>
                            </div>
                        </div>
                    </nav>
                </header> 
                 <?php if (isset($_SESSION['errors'])): ?>
                <div class="form-errorsSignup">
                    <?php foreach($_SESSION['errors'] as $error): ?>
                    <p><?php echo $error ?></p>
                    <?php endforeach; ?>
                </div>
                <?php endif;
                 ?>
                <?php
                session_destroy();
                ?>
        </div>
    </body>
</html>
