<?php

    require "dbcon.php";

    if(isset($_GET['pid'])) {
        $did = $_GET['pid'];

        $sql = "DELETE FROM place WHERE place_id='$pid'";
        mysqli_query($con, $sql);

        header("Location: adddistrict.php");
        exit();

    }
?>