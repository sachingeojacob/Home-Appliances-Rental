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
					<a href="buyerhome.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><h5><b><a href="buyerhome.php">Home &nbsp; &nbsp; &nbsp;</a></b></h5></li> 												
													
						
						</ul>
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/carousel/h2.jpg" alt="New products" > 
				<h4><span>Cart</span></h4>
				

			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span12">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
							<?php
				$userid=$_SESSION['userid'];
				  $qry="select product.*,wishlist.* from product,wishlist where wishlist.product_id=product.product_id and wishlist.userid='$userid' and wishlist.status=1";
$result=mysqli_query($con,$qry);
$noc=mysqli_num_rows($result);
		  if($noc==0)
		  {
			  echo " &nbsp; &nbsp; &nbsp; &nbsp;&quot; No products!!&quot;";
		  }
		  else
		  {
		  ?>
		  <?php
while($row=mysqli_fetch_array($result)){
?>							
						<form name="cart" method="post" action="b.php" >
						
						<table class="table table-striped">
							<thead>
								<tr>
								<td></td>	
									<td><b style="color:#FF0000;font-size:15px">Product Image</b></td>	
									<td><b style="color:#FF0000;font-size:15px">Product Name</b></td>	
									<td><b style="color:#FF0000;font-size:15px">Required Quantity</b></td>	
									<td><b style="color:#FF0000;font-size:15px">Rent/Day</b></td>	
										<td></td>
										<td></td>
										<td></td>	
								</tr>
							</thead>
							<tbody>
										
								<tr>
									<td><input type="hidden" name="qty" value="<?php echo $row['count'];?>"> <input type="hidden" name="wid" value="<?php echo $row['wid'];?>"></td>
									<td><a href=""><img alt="" src="../uploads/<?php echo $row['image'];?>"></a></td>
									<td><br><br><b><?php echo $row['product_name'];?></b></td>
									
									<td><br><br><b><?php echo $row['count'];?></b>
									</td>
									
									<td><br><br><b><?php echo $row['rent'];?>/-</b></td>
									
									<td><input type="hidden" name="price" value="<?php echo $row['rent'];?>"><input type="hidden" name="pid" value="<?php echo $row['product_id'];?>"></td>
									<td><br><br><input type="submit" name="submit" value="Book Now" style="background-color:#0000FF;padding:7px;color:#FFFFFF">
									 <a href="delcart.php?id=<?php echo $row['wid'];?>" style="color:#FF0000" > Delete</a></td>
									
										<td></td>
									
									<td></td>	
									
								</tr>			  
								
								
							
										  
							</tbody>
						</table>
						
						</form>	
						<?php
						}
						?>	
							<?php
						}
						?>
					</div>
					<div class="span3 col">
						
												
					</div>
				</div>
			</section>			
			
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