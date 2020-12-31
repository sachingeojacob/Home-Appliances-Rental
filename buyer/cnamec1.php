<?php
session_start();
$name=$_GET['locat'];
$hid=$_SESSION['hid'];
include("../dbcon.php");

$sql="select distinct category.category_id,category.category_name from category,product where category.category_id=product.category_id and product.seller_id='$name' and category.category_id=$hid";
$res=mysqli_query($con,$sql);
$noc=mysqli_num_rows($res);
		  if($noc==0)
		  {
			  echo " &nbsp; &nbsp; &nbsp; &nbsp;&quot; Store has no corresponding category!!&quot;";
		  }
		  else
		  {
		  while($r=mysqli_fetch_array($res))
	{
		  ?>

<td><label>Product Category</label></td><td>
                   <select name="ddlcountry" id="ddlcountry" onchange="getshidd(this.value)">
                        <option value="">---Select---</option>
   
    <option value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
    <?php
	}
	?>
	 <?php
	}
	?>
  </select></td>