<!DOCTYPE html>
<html>  
    <head>
        <title>Login</title>
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
            <h2 class = "welcomeLogo" >Login</h1>
                <header>
                    <nav>
                        <div class="main-wrapper">
                            <div class="nav-login">
                                <form action ="LoginData" method ="POST">
                                    <input type="text" name="uid" placeholder="Username">
                                    <input type="password" name="pwd" placeholder="Password"> 
                                    <input type ="submit" value="Login">
                                </form>
                            </div>
                        </div>
                    </nav>
                </header> 
                <div class = "form-errorsLogin">
                    <?php
                    if (isset($status) && $status == 'Invalid') {
                        echo 'Invalid username or password';
                    }
                    ?>
                </div>
        </div>
    </body>
</html>
