<?php

    require "dbcon.php";

    if(isset($_GET['did'])) {
        $did = $_GET['did'];

        $sql = "DELETE FROM district WHERE district_id='$did'";
        mysqli_query($con, $sql);

        header("Location: adddistrict.php");
        exit();

    }
?>