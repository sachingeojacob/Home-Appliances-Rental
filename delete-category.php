<?php

    require "dbcon.php";

    if(isset($_GET['cid'])) {
        $cid = $_GET['cid'];

        $sql = "DELETE FROM category WHERE category_id='$cid'";
        mysqli_query($con, $sql);

        header("Location: addcategory.php");
        exit();

    }
?>