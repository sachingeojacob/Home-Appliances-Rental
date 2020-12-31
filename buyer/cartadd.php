<?php
include("../dbcon.php");

$id=$_GET["cid"];
$qty=$_GET["qty"];
$userid=$_GET["userid"];
$stock=$_GET["stock"];
$pid=$_GET["pid"];
$pri=$_GET["pri"];
$pt=$qty*$pri;
if($stock<$qty)
{?>
<script>
alert('Confirmed Quantity is Greater Than Available Quantity');
window.location="product_detail.php?id=<?php echo $pid ?>";

</script>
<?php
}
if($stock>$qty)
{ 
$sql="insert into wishlist values('NULL',$userid,$id,$qty,$pt,1)";
$res=mysqli_query($con,$sql);
//echo $sql;
?>
<script>
alert(' Product Added To Your Cart');
window.location="cart.php";

</script>
<?php
}
?>