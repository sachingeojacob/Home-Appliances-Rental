<?php
    require "dbcon.php";

    if(isset($_GET['rid'])) {
        $rid = $_GET['rid'];

        $sql = "UPDATE receipt SET status='Collected' WHERE rid='$rid';";
        mysqli_query($con, $sql);

        header('Location: viewRequest.php');
        exit();
    }
?>