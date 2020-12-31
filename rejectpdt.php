<?php
include("dbcon.php");
$id=$_GET['id'];
//echo $id;

$update="update product set status=0,status1=1 where product_id=$id"; 
$res=mysqli_query($con,$update);
?>
<script>
		alert("Product Rejected");
		window.location="viewpdt.php";
    </script>