<?php

    include 'Dbh.inc.php';

    if(isset($_POST['commentSubmit'])){
        $nameuser = $_POST['useridenti'];
        $commentText = $_POST['messageText'];
        
        $sql = "INSERT INTO meatballs (userid, message) VALUES ('$nameuser' , '$commentText')";
        $result = mysqli_query($conn, $sql);
        header("Location: ../TastyRecipes/View/DisplayMeatBallPage");
   
    }
    