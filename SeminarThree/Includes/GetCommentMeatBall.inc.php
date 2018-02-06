
<?php

    include 'Dbh.inc.php';
    
    $sql = "SELECT * FROM meatballs";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $id = $row['userid'];
        $sql2 = "SELECT * FROM users WHERE user_id='$id'";
        $result2 = $conn->query($sql2);
        if($row2 = $result2->fetch_assoc()){
            echo "<div class='comment-box'><p>";
            echo "<a><b><i>";
            echo $row2['user_name']."<br>";
            echo "</i></b></a>";
            echo "<a class='texty'><i>";
            echo nl2br($row['message']);   
            echo "</i></a>";
            echo "</p>";
            //check so that you can only delete your own comments
            if(isset($_SESSION['u_id'])){
                if($_SESSION['u_id'] == $row2['user_id']){
                    echo "<form class='delete-form' method='POST' action='../../Includes/DeleteCommentMeatBall.inc.php'>
                        <input type = 'hidden' name ='commentid' value='".$row['commentid']."'>
                        <button type='submit' name='commentDelete'>Delete</button>
                </form>";
                }
            }
            echo "</div>";
        }
    } 
