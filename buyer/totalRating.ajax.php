<?php
    require "./dbcon.php";
    
    if(isset($_POST['sellerId'])) {
        $sellerId = $_POST['sellerId'];
        $sql = "SELECT * FROM sellerrating WHERE seller_id='$sellerId';";
        $result = mysqli_query($con, $sql);
        $totalReviews = mysqli_num_rows($result);
        $countReviews = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $countReviews += $row['rating'];
        }
        echo $totalReviews." ".$countReviews;
    }
?>