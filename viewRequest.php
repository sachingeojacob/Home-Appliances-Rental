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
    width: 100%;
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
.view-request-container {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 5%;
    top: 0;
    display: flex;
    justify-content: center;
    overflow-y: scroll;
}
</style>


</head> 
<body>
   
<div class="view-request-container">
    <table style="width: 60%;">
        <tr>
            <th colspan="5" style="text-align: center;">View Return Request</th>
        </tr>
        <tr>
            <td>
                <h5>Receipt Id</h5>
            </td>
            <td>
                <h5>Name</h5>
            </td>
            <td>
                <h5>Item</h5>
            </td>
            <td>
                <h5>Total</h5>
            </td>
            <td>
                <h5>Action</h5>
            </td>
        </tr>
        <?php
            require "dbcon.php";
            $sql ="select receipt.*,product.product_name,seller.first_name,product.color,product.size,product.company from receipt,product,seller,login WHERE receipt.product_id=product.product_id and receipt.seller_id=seller.seller_id and receipt.userid=login.userid AND receipt.status='Requested';"; 
            $result = mysqli_query($con, $sql);
            $cont = mysqli_num_rows($result);
            while($row = mysqli_fetch_assoc($result)) {
                $rid = $row['rid'];
                echo '<tr>
                        <td>
                            <h6>
                                '.$row['rid'].'
                            </h6>
                        </td>
                        <td>
                            <h6>
                                '.$row['first_name'].'
                            </h6>
                        </td>
                        <td>
                            <h6>
                                '.$row['product_name'].'
                            </h6>
                        </td>
                        <td>
                            <h6>
                                '.$row['price'].'
                            </h6>
                        </td>
                        <td>
                            <h6>
                                <a href="adminRequestAction.php?rid='.$rid.'" style="color: red;">Respond</a>
                            </h6>
                        </td>
                    </tr>';
            }
            if($cont == 0) {
                echo '<tr>
                        <td colspan="5">
                            <h4 style="text-align: center;">No return request</h4>
                        </td>
                    </tr>';
            }
        ?>
    </table>
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
