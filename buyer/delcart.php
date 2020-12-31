<?php
 include("../dbcon.php");
 
$id=$_GET['id'];


						
$sql="delete from wishlist where wid='$id'";
$res1=mysqli_query($con,$sql);


?>
<script>
alert(' Deleted ');
window.location="cart.php";

</script>
						
								
								
