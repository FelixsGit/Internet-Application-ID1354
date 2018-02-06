<?php
        session_start();
        include 'Includes/Dbh.inc.php';
        include 'Includes/CommentsMeatballs.inc.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Meatballs recipe</title>
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
            <?php
                if(!isset($_SESSION['u_id'])){
                    echo '                        
                        <a href="Login.php">Login</a>
                        <a href="Signup.php">Sign Up</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                        </div>      
                        ';
                }else{
                    echo '                        
                        <a href="Includes/Logout.inc.php" >Logout</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                        </div>  
                         ';
                }
                 if(isset($_SESSION['u_id'])){     
                    ?>
                    <div class ="username" >
                        <?php
                        echo $_SESSION['u_name'];
                        ?>
                        is online
                    </div>
                <?php
                }
                ?>
        <div class = "MiddleStripe" >
            <img src = "Resources/MeatBalls.jpg"
                alt = "picture of meatballs" class = "picture" > 
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
                 if(isset($_SESSION['u_id'])){
                    echo "<form  method='POST' action='".setCommentsMeatballs($conn)."'>
                    <input type = 'hidden' name ='useridenti' value='".$_SESSION['u_id']."'>
                    <textarea name='messageText' placeholder='Type comment here' ></textarea><br>
                    <button class='commentButton' type ='submit' name='commentSubmit'>Comment</button>
                    </form>";
                 }
              ?>
            
              <div class="completedComments" >
                    <?php
                    getCommentsMeatballs($conn);
               ?>
            </div>    
        </div>       
    </body>
</html>
