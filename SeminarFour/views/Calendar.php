<?php
    use TastyRecipes\Util\Constants;
?>
<!DOCTYPE html>
<html> 
    <head>
        <title>Calender</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet"
              type = "text/css"
              href = "../../Resources/CSS/ResetCSS.css"/>
        <link rel = "stylesheet"
              type = "text/css"
              href = "../../Resources/CSS/TastyCSS.css"/>
        <link rel = "stylesheet"
              type = "text/css"
              href = "../../Resources/CSS/CalenderCSS.css"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>   
    </head>
    <body>
        <div class = "systemInfo" > Web page Secure & Online </div>
         <?php
        require_once('Resources/Includes/navBar.php');
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
            <img src = "../../Resources/Images/Calender.jpg"
                 alt = "picture of calender" class = "picture" > 
            <div class="month"> 
                <ul>
                    <li>
                        November<br>
                        <span style="font-size:18px">2017</span>
                    </li>
                </ul>
            </div>

            <ul class="weekdays">
                <li>Mo</li>
                <li>Tu</li>
                <li>We</li>
                <li>Th</li>
                <li>Fr</li>
                <li>Sa</li>
                <li>Su</li>
            </ul>
            <ul class="days"> 
                <li>1</li>
                <li>2
                    <a href = "DisplayMeatBallPage"> <img src = "../../Resources/Images/MeatBalls.jpg"
                        alt = "picture of meatballs" class = "picture" > 
                    </a>
                </li>
                <li>3</li>
                <li>4</li>
                <li>5
                    <a href = "DisplayPanCakePage" ><img src = "../../Resources/Images/Pancakes.jpg"
                        alt = "picture of pancakes" class = "picture" > 
                    </a>
                </li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li id = "Today"> 10 </li>
                <li>11</li>
                <li>12 
                    <a href = "DisplayMeatBallPage"> <img src = "../../Resources/Images/MeatBalls.jpg"
                            alt = "picture of meatballs" class = "picture" > 
                    </a>
                </li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18
                    <a href = "DisplayPanCakePage" ><img src = "../../Resources/Images/Pancakes.jpg"
                        alt = "picture of pancakes" class = "picture" > 
                    </a>
                </li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24
                    <a href = "DisplayPanCakePage" ><img src = "../../Resources/Images/Pancakes.jpg"
                        alt = "picture of pancakes" class = "picture" > 
                    </a>
                </li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29
                    <a href = "DisplayMeatBallPage"> <img src = "../../Resources/Images/MeatBalls.jpg"
                        alt = "picture of meatballs" class = "picture" > 
                    </a>
                </li>
                <li>30</li>
            </ul>
        </div>
    </body>
</html>
