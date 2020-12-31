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
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
		
	</head>
    <body>		
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
					<a href="product_detail.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><h5><b><a href="buyerhome.php">Home &nbsp; &nbsp; &nbsp;</a></b></h5></li> 												
													
						
						</ul>
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/carousel/h2.jpg" alt="New products" > 
				<h4><span>Search Results</span></h4>
				
			</section>
			
					
						
					<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
								  <?php
								  $start=$_POST['start'];
								  $end=$_POST['end'];
								  $cat=$_POST['cat'];
//$qry="select * from login,role where login.role_id=role.role_id";
      $qry="select * from product where selling_price between $start and $end and category_id='$cat'";
$result=mysqli_query($con,$qry);


?>
									<span class="pull-left"><span class="text"><span class="line"> <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">	
											<?php
while($row=mysqli_fetch_array($result)){
?>											
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php?id=<?php echo $row[0];?>"><img src="../uploads/<?php echo $row[7];?>" alt="" /></a></p> 
														<a href="product_detail.php?id=<?php echo $row[0];?>" class="title"><?php echo $row[2];?></a><br/>
														
														<p class="price">$<?php echo $row[5];?></p>
														<a href="product_detail.php?id=<?php echo $row[0];?>" class="category">View More</a>
													</div>
													
												</li>
												 <?php
}
?>
											</ul>
										</div>
										
									</div>							
								</div>
								
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
					<br/>
						
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright shopper  All right reserved.</span>
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