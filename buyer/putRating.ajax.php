<?php
    require "dbcon.php";
    session_start();

    if(isset($_POST['rating'])) {
        $sellerId = $_POST['sellerId'];
        $rating = $_POST['rating'];
        $uid = $_SESSION['userid'];

        $sql = "SELECT * FROM sellerrating WHERE user_id='$uid' AND seller_id='$sellerId';";
        $ans = mysqli_query($con, $sql);
        $row = mysqli_num_rows($ans);
        if($row > 0) {
            $sql = "UPDATE sellerrating SET rating='$rating' WHERE user_id='$uid' AND seller_id='$sellerId';";
            if(mysqli_num_rows(mysqli_query($con, $sql))) {
                echo $rating;
                exit();
            }else {
                echo $rating;
                exit();
            }

        }else {
            $sql = "INSERT INTO sellerrating(user_id,seller_id,rating) VALUES('$uid','$sellerId','$rating');";
            if(mysqli_query($con, $sql)) {
                echo $rating;
                exit();
            }else {
                echo $rating;
            }
        }
        
    }
?>