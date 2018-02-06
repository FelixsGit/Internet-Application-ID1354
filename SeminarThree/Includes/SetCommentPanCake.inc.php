<?php

    include 'Dbh.inc.php';
    //check if button is pressed
    if(isset($_POST['commentSubmit'])){
        $nameuser = $_POST['useridenti'];
        $commentText = $_POST['messageText'];
        
        $sql = "INSERT INTO comments (userid, message) VALUES ('$nameuser' , '$commentText')";
        $result = mysqli_query($conn, $sql);
    }
     header("Location: ../TastyRecipes/View/DisplayPanCakePage");
