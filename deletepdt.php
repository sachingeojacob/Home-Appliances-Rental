<?php
include("dbcon.php");
$id=$_GET['id'];
//echo $id;

$update="delete from product where product_id=$id"; 
$res=mysqli_query($con,$update);
?>
<script>
		alert("Product Deleted");
		window.location="viewpdt.php";
    </script>