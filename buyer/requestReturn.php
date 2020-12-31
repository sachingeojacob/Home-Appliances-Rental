<?php
    require "dbcon.php";

    if(isset($_GET['receptId'])) {
        $rid = $_GET['receptId'];
        
        $sql = "UPDATE receipt SET status='Requested' WHERE rid='$rid';";
        mysqli_query($con, $sql);

        header('Location: returnitems.php');
        exit();
    }
?>