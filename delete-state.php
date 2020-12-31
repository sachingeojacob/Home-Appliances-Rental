<?php

    require "dbcon.php";

    if(isset($_GET['sid'])) {
        $sid = $_GET['sid'];

        $sql = "DELETE FROM state WHERE state_id='$sid'";
        mysqli_query($con, $sql);

        header("Location: addstate.php");
        exit();

    }
?>