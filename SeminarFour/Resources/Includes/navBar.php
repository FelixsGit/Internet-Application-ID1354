<?php
use TastyRecipes\Util\Constants;

if ($this->session->get(Constants::USER_LOGGED_IN) == 'notLoggedIn') {
    ?>
    <div class = "topnav" id = "myTopnav">
        <a href = "DisplayMainPage">Home</a>
        <a href = "DisplayCalendarPage">Calendar</a>
        <a href = "PanCake">Pancake Recipe</a>
        <a href = "MeatBall">MeatBalls Recipe</a>

        <a href = "DisplayLoginPage">Login</a>
        <a href = "DisplaySignUpPage">Sign Up</a>
        <a href = "javascript:void(0);" class = "icon" onclick = "myFunction()">&#9776;</a>
    </div>
<?php
}else{
    ?>
      <div class = "topnav" id = "myTopnav">
        <a href = "DisplayMainPage">Home</a>
        <a href = "DisplayCalendarPage">Calender</a>
        <a href = "PanCake">Pancake Recipe</a>
        <a href = "MeatBall">MeatBalls Recipe</a>
         <a href="LogoutData" >Logout</a>
        <a href = "javascript:void(0);" class = "icon" onclick = "myFunction()">&#9776;</a>
    </div>
    <?php
}