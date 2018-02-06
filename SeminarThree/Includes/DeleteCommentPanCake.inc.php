
<?php
    
    include 'Dbh.inc.php';

    if(isset($_POST['commentDelete'])){
        $cid = $_POST['commentid'];
        $sql = "DELETE FROM comments WHERE commentid = '$cid'";
        $result = $conn->query($sql);
       header("Location: ../TastyRecipes/View/DisplayPanCakePage");
    }
     
