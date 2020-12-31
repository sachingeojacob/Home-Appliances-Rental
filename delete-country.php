<?php

    require "dbcon.php";

    if(isset($_GET['cid'])) {
        $cid = $_GET['cid'];

        $sql = "DELETE FROM country WHERE country_id='$cid'";
        mysqli_query($con, $sql);

        header("Location: addcountry.php");
        exit();

    }
?>