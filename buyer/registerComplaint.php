<?php
    require "../dbcon.php";
    session_start();
    

    if(isset($_SESSION['userid'])) {
        if(isset($_POST['submit-complaint'])) {
            $uid = $_SESSION['userid'];
            $complaint = $_POST['complaint'];
            $sellerId = $_POST['sellerId'];

            $sql = "INSERT INTO complaint(user_id,seller_id,complaint,status) VALUES('$uid','$sellerId','$complaint',0);";
            mysqli_query($con, $sql);
            header("Location: buyerhome.php?success=ComplaintRegistered");
            exit();
        }
    }
?>