
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
        <?php
        require_once('Resources/Includes/links&scripts.php');
        ?>
    </head>   
    <body>
        <div class = "systemInfo" > Web page Secure & Online </div>     
        <?php
        require_once('Resources/Includes/navBar.php');
        ?>
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
                    if (isset($status) && $status == 'FieldsEmpty') {
                        echo 'Fields are empty';
                    } elseif (isset($status) && $status == 'InvalidUsernameCharacters') {
                        echo 'invalid username, use only letters';
                    } elseif (isset($status) && $status == 'usernameTaken') {
                        echo 'username taken';
                    } elseif (isset($status) && $status == 'toLong') {
                        echo 'to long username or password';
                    }
                    ?>
                </div>
                </body>
                </html>
