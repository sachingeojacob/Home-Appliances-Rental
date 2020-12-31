<?php
session_start();
if(!isset($_SESSION['username'])) {
 //if not yet logged in
   header("Location: ../login.php");// send to login page
   
  } 
	include("dbcon.php");

?>


     

<!DOCTYPE HTML>
<html>
<head>
<title>Nearby stores</title>
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
                              <?php
//$qry="select * from login,role where login.role_id=role.role_id";
      $qry="select * from customer where status=1";
$result=mysqli_query($con,$qry);
if(isset($_POST['delete']))
{

$l=$_POST["userid"];
$sql2="UPDATE `customer` SET `status`='0' WHERE `userid`='$l'";
$result2=mysqli_query($con,$sql2) or die("error");
$sql3="UPDATE `login` SET `status`='0' WHERE `userid`='$l'";
$result3=mysqli_query($con,$sql3) or die("error");
echo "<script> alert('delete successfull');</script>";
header("location:blockcustomer.php");
}
?>
<table >
  <tr>
    <td >&nbsp;</td>
    <td >
      <tr>
       
        <th>Username</th>
        <th>First Name</th>
         <th>Last Name</th>
   
        <th>Mobile Number</th>
        <th>Email</th>
        <th></th>
        <th></th>
       
        
   
       
      </tr>
<?php
while($row=mysqli_fetch_array($result)){
?><form action="#" method="post">
      <tr>
        
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['first_name'];?></td>
         <td><?php echo $row['last_name'];?></td>
        <td><?php echo $row['mobile_number'];?></td>
        <td><?php echo $row['email'];?></td>
       
        <td><input class="txt" type="hidden" name="userid" value="<?php echo $row['userid'];?>"></td>
        <td><input type="submit" name="delete" class="btn btn-inverse large" value="BLOCK"></td>
      
        
      </tr></form>
      <?php
}
?>
</table>
       
    </div>
     
   <div class="page-container">
   
			
																									
															
												
						<div class="sidebar-menu">
					<header class="logo">
                                            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="adminhome.php"> <img src="themes/images/log.png" width="30px">
                                            <font color = "cream" size="4"><b>Nearby stores</b></font></a>
					
				 
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
												<li id="menu-academico-avaliacoes" ><a href="addcountry.php">Country</a></li>
                                                                                             <li id="menu-academico-boletim" ><a href="addstate.php">State</a></li>
                                                                                             <li id="menu-academico-boletim" ><a href="adddistrict.php">District</a></li>
                                                                                             <li id="menu-academico-boletim" ><a href="addplace.php">Place</a></li>
                                                                                             <li id="menu-academico-boletim" ><a href="addcategory.php">Category</a></li>
                                                                                            
											  </ul>
										 </li>
									<li><a href="viewpdt.php"><i class="fa fa-table"></i> <span>View Products</span></a></li>
									
										
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
