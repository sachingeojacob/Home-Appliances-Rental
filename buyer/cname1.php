<?php
$name=$_GET['locat'];
include("../dbcon.php");

$sql="select distinct category.category_id,category.category_name from category,product where category.category_id=product.category_id and product.seller_id='$name'";
$res=mysqli_query($con,$sql);
?>
<td><label>Product Category</label></td><td>
                   <select name="ddlcountry" id="ddlcountry" onchange="getshid(this.value)">
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