<?php
 $id=$_GET['id'];
include("../dbcon.php");


 $sql="select * from product where product_id='$id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
// aid atype buildername location state tamount size rooms fullyfur other image image1 image2

?>

<td><img src="../uploads/<?php echo $row['image']; ?>" class="img-responsive thumbnailImage" width="50%">
</td> <td class="col-md-6 easy-right">
					<br /> <br />	<ul>
							<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><h5>Product Name: <?php echo $row['product_name'];?> </h5></li>
							
							<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><h5>Company: <?php echo $row['company'];?></h5> </li>
							<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><h5>Available Quantity: <?php echo $row['quantity'];?></h5> </li>
							<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><h5>Rent: <?php echo $row['rent'];?></h5> </li>
							<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><h5>Size: <?php echo $row['size'];?> </h5></li>
							<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><h5>Color: <?php echo $row['color'];?></h5> </li>
							 
						</ul>
                       </td> 