<?php
session_start();
if(!isset($_SESSION['username'])) {
 //if not yet logged in
   header("Location:login.php");// send to login page
   
  } 
	include("dbcon.php");

   ?>  

<!DOCTYPE HTML>
<html>
<head>
<title>Buddy Rents</title>
                 <link rel="shortcut icon" href="themes/images/log.png" type="image/x-icon" /> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->

   <style>
table {
    border-collapse: collapse;
    width: 1000px;
}

th, td {
    text-align: left;
    padding: 8px;
    font-size: 14px;
    font-weight: bold;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:royalblue;
    color: white;
    font-size: 16px;
    font-family: helvetica;
    font-weight: bolder;
}
</style>


</head> 
<body>
   
    <div style="margin-left: 400px;max-width: 200px;">
	<br><br><br>
         <?php
//$qry="select * from login,role where login.role_id=role.role_id";
      $qry="select * from product";
$result=mysqli_query($con,$qry);
$noc=mysqli_num_rows($result);
		  if($noc==0)
		  {
			  echo " &nbsp; &nbsp; &nbsp; &nbsp;&quot; No Results!!&quot;";
		  }
		  else
		  {


?>
<form>
<table>
  <tr>
    
    
        
       
        <th>Product Name</th>
         <th>Quantity</th>
        <th>Rent/day</th>
        <th>Image</th>
        
        <th>size</th>
		 <th>Color</th>
        <th>Action</th>
        
      </tr>
 
<?php
while($row=mysqli_fetch_array($result)){
?>
      <tr>
       
    
       
		
		
    <td><?php echo $row[2];?></td>
         <td><?php echo $row[4];?></td>
        <td><?php echo $row[5];?></td>
        
        <td><img src="uploads/<?php echo $row[6];?>" height="50" width="50" /></td>
		<td><?php echo $row['size'];?></td>
		<td><?php echo $row['color'];?></td>
        
       
        
		
		
		  <td>
								   <?php
						if(($row[7]=="0") && ($row[8]=="0"))
						{
							?>
                       <a href="approvepdt.php?id=<?php echo $row[0];?>">Approve</a> / 
		<a href="rejectpdt.php?id=<?php echo $row[0];?>">Reject</a>
							<?php
						}
						if(($row[7]=="1") && ($row[8]=="1"))
						{
							?>
                            <font style="color:#FF0000; font-style:italic;" >Approved</font> / <a href="deletepdt.php?id=<?php echo $row[0];?>">Delete</a>
                            <?php
						}
						?>
						<?php
						if(($row[7]=="0") && ($row[8]=="1"))
						{
							?>
                       <font style="color:#FF0000; font-style:italic;" >Rejected</font>
							<?php
						} 
						?>
						</td>
                          
		
		
		 
       
      </tr>
	  
    
         <?php
}
?>
    </table>
     </form> 
	 <?php
}
?>
    </div>
     
   <div class="page-container">
   
			
																									
															
												
						<div class="sidebar-menu">
					<header class="logo">
                                            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="adminhome.php"> <img src="themes/images/log.png" width="30px">
                                            <font color = "cream" size="4"><b>Buddy Rents</b></font></a>
					
				 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
                                                            <a href="adminhome.php"><img src="themes/images/qwe.png" width="100"></a>
                                                            <a href="adminhome.php"><span class=" name-caret">ADMIN</span></a>
									
									<ul>
									
                                                                            <li><a class="tooltips" href="signout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
                                                                            <li><a href="adminhome.php"><i class="fa fa-tachometer"></i> <span>Admin Home</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Block &amp; Unblock</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
                                                                                       <li id="menu-academico-avaliacoes" ><a href="blockseller.php">Block Seller</a></li>
                                                                                       <li id="menu-academico-boletim" ><a href="blockcustomer.php">Block Customer</a></li>
											<li id="menu-academico-avaliacoes" ><a href="unblockseller.php">Unblock Seller</a></li>
                                                                                       <li id="menu-academico-avaliacoes" ><a href="unblockcustomer.php">Unblock Customer</a></li>
											
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Add</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												
                                                                                             <li id="menu-academico-boletim" ><a href="addstate.php">State</a></li>
                                                                                             <li id="menu-academico-boletim" ><a href="adddistrict.php">District</a></li>
                                                                                            
                                                                                             <li id="menu-academico-boletim" ><a href="addcategory.php">Category</a></li>

                                                                                             
											  </ul>
										 </li>
									<li><a href="viewpdt.php"><i class="fa fa-table"></i> <span>View Products</span></a></li>
									<li><a href="viewRequest.php"><i class="fa fa-table"></i> <span>View Request</span></a></li>
									
										
									  </ul>
								
								  
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
   
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
                                                        
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
