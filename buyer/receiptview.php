<?php
session_start();
if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 
	include("dbcon.php");

?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Buddy Rents</title>
                 <link rel="shortcut icon" href="themes/images/log.png" type="image/x-icon" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
                <script src='https://www.google.com/recaptcha/api.js'></script>
                
                <!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->
                <meta name="google-signin-client_id" content="28475586243-2d7k8ghms2i2u8dmsuo1deqruvaaj3n0.apps.googleusercontent.com">
                <script src="https://apis.google.com/js/platform.js?key=AIzaSyAdmfUAI2PrOsmz7z2GU27ujgQ5hJqEpyE" async defer></script>
                <!--<meta name="google-signin-client_id" content="306246560236-mtnc3rp1n9jfiad4jkj2pan9b5f5pj8e.apps.googleusercontent.com">-->
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
               
        

  
        </script>
        
	</head>
    <body style="background-image: url(themes/images/iiii.jpg);background-size: cover;">	
        <!--<a href="#" onclick="signOut();">Sign out</a>-->
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							
							<h4 style="color:#FF0000"><b><i>Welcome <?php echo $_SESSION['username']; ?></i></b></h4>				
								
						
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="buyerhome.php" class="logo pull-left"><img src="themes/images/log.png" width="30">
                                            <font color = "black" size="4"><b>Buddy Rents</b></font></a>
					<nav id="menu" class="pull-right">
<ul>
							<li><h5><b><a href="buyerhome.php">Home &nbsp; &nbsp; &nbsp;</a></b></h5></li>											
							
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
                            <img class="pageBanner" src="themes/images/pgban.jpg" alt="New products" >
                        <h4><span></span></h4>
			</section>	
                     <div  style="background-image: url(themes/images/ee.jpg);background-size: cover;">
			<section class="main-content">	
                            
				<div class="row">
					<div class="span12">					
                                        
						 <h3 style="color:#FF0000"> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;Your Receipts</h3>
						 <?php
								$logid=$_SESSION['username'];
			
			$selectd="select receipt.*,product.product_name,seller.first_name,product.color,product.size,product.company from receipt,product,seller,login WHERE receipt.product_id=product.product_id and receipt.seller_id=seller.seller_id and receipt.userid=login.userid and login.username='$logid'"; 
		  $resd=mysqli_query($con,$selectd);
		  $nod=mysqli_num_rows($resd);
		  if($nod==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
						   <table align="center" width="800" bordercolor="#000000">
				
					<thead>
						<tr>
							<td><b style="font-size:14px">Booked Date</b></td>
							<td><b style="font-size:14px">Product Name</b></td>
							<td><b style="font-size:14px">Seller Name</b></td>
							<td><b style="font-size:14px">Date From</b></td>
							<td><b style="font-size:14px">Date To</b></td>
							<td><b style="font-size:14px">Quantity</b></td>
							<td><b style="font-size:14px">Company</b></td>
							<td><b style="font-size:14px">Size</b></td>
							<td><b style="font-size:14px">Color</b></td>
							<td><b style="font-size:14px">Total Amount</b></td>
							
							
						</tr>
					</thead>
					<tbody>
					<?php
			while($rowd=mysqli_fetch_array($resd))
			{
		  ?>
						<tr>
							<td><?php echo $rowd['date'];?></td>
							<td><?php echo $rowd['product_name'];?></td>
							<td><?php echo $rowd['first_name'];?></td>
							<td><?php echo $rowd['fdate'];?></td>
							<td><?php echo $rowd['tdate'];?></td>
							<td><?php echo $rowd['quantity'];?></td>
							<td><?php echo $rowd['company'];?></td>
							<td><?php echo $rowd['size'];?></td>
							<td><?php echo $rowd['color'];?></td>
							<td><?php echo '&#8377;'.$rowd['price'];?></td>
							
														
							</tr>
							<?php
							}
							?>
							</tbody>
							</table>
							<?php
							}
							?>
                 			
					</div>
									
				</div>
                           
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4></h4>
						<ul class="nav">
							<li><a href="buyerhome">Homepage</a></li>  
							
							<li><a href="../login.php">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/log.png" width="30" alt=""> <font color = "white" size="2">Nearby stores</font> </p>
						<p>You can get your products at lowest cost from your nearest store</p>
						<br/>
						
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright spotive  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>