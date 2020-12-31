<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Nearby stores</title>
                 <link rel="shortcut icon" href="themes/images/log.png" type="image/x-icon" /> 

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.sidepanel  {
    width: 0;
    position: fixed;
    z-index: 1;
    height: 1000px;
    top: 0;
    left: 0;
    background-color: #00ced1;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidepanel a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    display: block;
    transition: 0.3s;
}

.sidepanel a:hover {
    color: #f1f1f1;
}

.sidepanel .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
}

.openbtn {
    font-size: 20px;
    cursor: pointer;
    background-color: #111;
    color: white;
    padding: 10px 15px;
    border: none;
}

.openbtn:hover {
    background-color:#444;
}

  div.b {
    line-height: 1.6;
    font-family:  Comic Sans MS;
}
 

</style>
</head>
<body style="background-image: url(themes/images/uui.jpg);">

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">×</a>
  
  <a href="addpdt.php">Add Products</a>
  <a href="viewpdt.php">View Added Products</a>
   <a href="#">Products Booked</a>
    <a href="#">Products Cancelled</a>
     <a href="#">Products Paid</a>
      <a href="#">Products Sold</a>
       <a href="#">Purchases</a>
	   <a href="#">Change Password</a>
  <a href="">Edit Profile</a>
</div>

<button class="openbtn" onClick="openNav()">? Nearby Stores</button>  


<script>
function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}
</script>
<div style="background-color:black; opacity:0.8;width:900px;margin-left:200px;margin-top:200px;height: 250px;">
   <center><img src="themes/images/log.png" width="30">
       <font color = "white" size="6" ><b>Add Products</b></center><br></font>
       <div class="b" >     
 <font color = "white" size="4"> 
			
				<table class="table table-condensed">
				<form name="form_edit1" enctype="multipart/form-data" action="addplacepro.php" method="post">
				 <tr><td><label><b>&nbsp; &nbsp; &nbsp; Select Panchayath</b></label></td><td><select name="panch"  class="form-control" ><option value="0">--Select--</option>
<!--<?php

include 'dbcon.php';			
$select1="select * from panchayath";
$res1=mysqli_query($con,$select1);
while($row1=mysqli_fetch_array($res1))
{
	
	
?>-->
<!--<option value="<?php echo $row1[0];?>"><?php echo $row1[2];?></option>
<?php

}
?>-->
<option value=""></option>

</select></td></tr>
					<tr><td><label><b>&nbsp; &nbsp; &nbsp; Place Name</b></label></td><td><input type="text" class="form-control" Name="plcname" placeholder="Enter Place Name" ></td></tr>
						
					
					<br>
						<tr><td colspan="2" align="center"> <br> <input type="submit" class="btn btn-primary" value="Add" name="submit" onClick="return vali()"></td></tr>
					
					
				
 
					
				</form>
                </table>

			
</font></div>
</div>
</body>
</html> 
