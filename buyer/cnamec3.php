<?php
$h=$_GET['hid'];

include("../dbcon.php");

$sql="select distinct product.product_id,product.product_name from product,category where product.category_id=category.category_id and product.category_id='$h'";
$res=mysqli_query($con,$sql);
?>
<td><label>Product Name</label></td><td>
                   <select name="hoid" id="hoid" onchange="getscBuild(this.value)">
                        <option value="">---Select---</option>
    <?php
	while($r=mysqli_fetch_array($res))
	{
	?>
    <option value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
    <?php
	}
	?>
  </select></td>