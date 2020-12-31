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
		<style>
			.reg-complaint {
				position: absolute;
				left: 50%;
				transform: translateX(-50%);
				padding: 10px;
				color: #fff;
				background: black;
				border-radius: 8px;
				top: 10px;
				z-index: 2;
				animation: fade 3s 1s forwards;
			}
			@keyframes fade {
				from {
					opacity: 1;
				}
				to {
					opacity: 0;
				}
			}
		</style>
		
	</head>
	<body style="background-image:url(themes/images/iiii.jpg);background-size:cover;">		
	  <?php
	  	if(isset($_GET['success'])) {
			if($_GET['success'] == 'ComplaintRegistered') {
				echo "<h5 class='reg-complaint'>Complaint Registered Successfully.</h5>";
			}
		  }
	  ?>
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
					<a href="#" class="logo pull-left"><img src="themes/images/log.png" width="30px">
                                            <font color = "black" size="4"><b>Buddy Rents</b></font></a>
											
											
					<nav id="menu" class="pull-right">
					
						<ul>
						<li> <h5><a href="buyerhome.php#search">Search &nbsp; &nbsp; &nbsp; </a> </h5></li>	
							<li> <h5><a href="cart.php">Your Cart &nbsp; &nbsp; &nbsp; </a> </h5></li>										
							<li> <h5><a href="compare.php">Compare Shop &nbsp; &nbsp; &nbsp; </a> </h5></li>
							<li> <h5><a href="debitcard.php">Debit Card &nbsp; &nbsp; &nbsp; </a> </h5></li>
							<li> <h5><a href="receiptview.php">Receipts &nbsp; &nbsp; &nbsp; </a> </h5></li>
							<li> <h5>Settings &nbsp; &nbsp; &nbsp;  </h5>
								<ul>									
									<li><a href="editprofile.php">Edit Profile</a></li>
									<li><a href="changepass.php">Change Password</a></li>
									<li><a href="returnitems.php">Return Item</a></li>
									<li><a href="logout.php">Logout</a></li>
									
									
								</ul>
							</li>							
						
						</ul>
						
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						
						<li>
                                                    <img src="themes/images/carousel/homee.jpg" width="300" height="960" alt="" />
              
							<div class="intro">
								<h1>LET'S FIND THE RIGHT ONE</h1>
								<p><span>At The Best Price</span></p>
								<p><span>Only on furlenco</span></p>
							</div>
						</li>
                                                <li>
							<img src="themes/images/carousel/home2.jpg" alt="" />
                                                        <div class="intro">
								<h1>LET'S FIND THE RIGHT ONE</h1>
								<p><span>At The Best Price</span></p>
								<p><span>Only on furlenco</span></p>
							</div>
						</li>
                                                 <li>
							<img src="themes/images/carousel/ui.jpg" alt="" />
                                                        <div class="intro">
								<h1>LET'S FIND THE RIGHT ONE</h1>
								<p><span>At The Best Price</span></p>
								<p><span>Only on furlenco</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
								  <?php
								  
//$qry="select * from login,role where login.role_id=role.role_id";
      $qry="select * from product where status=1 and status1=1";
$result=mysqli_query($con,$qry);


?>
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
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
														<p><a href="product_detail.php?id=<?php echo $row[0];?>"><img src="../uploads/<?php echo $row[6];?>" alt="" /></a></p> 
														<a href="product_detail.php?id=<?php echo $row[0];?>" class="title"><?php echo $row[2];?></a><br/>
														
														<p class="price">Rs.<?php echo $row[5];?></p>
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
						<br/>
						 <div class="row" id="search">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">SEARCH <strong>YOUR HOME APPLIANCES</strong></span></span></span>
									<!--<span class="pull-right">-->
										<!--<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>-->
									<!--</span>-->
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span12">
													<div class="">
														<span class="sale_tag"></span>
<?php
$sqlc="select * from category where status=1";
$resc=mysqli_query($con,$sqlc);
?>

                  <form action="range.php" method="post" name="form1">

    <table  cellpadding="10" cellspacing="20" bgcolor="#FFCCFF"> 
<caption><b style="color:#FF0000; font-size:18px"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Search By Price</b></caption>
<tr><td align="center" colspan="2"></td></tr>

<TR> 
  <td><label>Starting Range</label></td>
  <td><select name="start">
   <option value="0">--SELECT--</option>
  <option value="500">500</option>
   <option value="600">600</option>
    <option value="700">700</option>
   </select>
  </td>
   <td><label>End Range</label></td>
  <td><select name="end">
   <option value="0">--SELECT--</option>
  <option value="600">600</option>
   <option value="800">800</option>
    <option value="1000">1000</option>
   </select>
  </td>
   <td><label>Home Category</label></td>
  <td><select name="cat">
   <option value="0">--SELECT--</option>
   <?php
while($rowc=mysqli_fetch_array($resc))
{?>
  <option value="<?php echo $rowc['category_id'];?>"><?php echo $rowc['category_name'];?></option>
    <?php
  }
  ?>
   </select>
  </td>
  <td><input type="submit" name="submit" value="Search" onClick="return search1()"></td></TR>
  </table> <br/>
</table>

</form> 
<script type="text/javascript">
function search1()
{
if(document.form1.start.value=="0")
{
alert("select starting price");
document.form1.start.focus();
return false;
    }
if(document.form1.end.value=="0")
{
alert("select ending price");
document.form1.cat.focus();
return false;
    }
	if(document.form1.cat.value=="0")
{
alert("select category");
document.form1.cat.focus();
return false;
    }

}
</script>


 <center><form action="sellersearch.php" method="post" name="form2">

    <table  cellpadding="10" cellspacing="20" bgcolor="#FFCCFF"> 
<caption><b style="color:#FF0000; font-size:18px">Search By Shop Name</b></caption>
<tr><td align="center" colspan="2"></td></tr>

<TR> 
  <td><label>Enter Shopname</label></td>
  <td><input type="text" name="shop" placeholder="Enter Shop Name"></td>
  <td><input type="submit" name="submit" value="Search" onClick="return search2()"></td></TR>
  </table> <br/>
</table>

</form>
<script type="text/javascript">
function search2()
{
if(document.form2.shop.value=="")
{
alert("enter shop name");
document.form2.shop.focus();
return false;
    }

}
</script>
  </center> 
<!--														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$25.50</p>-->
													
                                           
						
						  <div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">FIND <strong>Nearby Products</strong></span></span></span>
									<!--<span class="pull-right">-->
										<!--<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>-->
									<!--</span>-->
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span12">
													<div class="">
														<span class="sale_tag"></span>
														
                                                                                                                <?php
																												include("googlemapping/newmap.php");
																												?>
<!--														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$25.50</p>-->
													</div>
												</li>
												
											</ul>
										</div>
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            

									</div>							
								</div>
							</div>						
						</div>
						
						
						
						
                                                <br/>
							          
                                                                      
                                                <div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">PURCHASE <strong>YOUR HOME APPLIANCES</strong></span></span></span>
									<!--<span class="pull-right">-->
										<!--<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>-->
									<!--</span>-->
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span12">
													<div class="">
														<span class="sale_tag"></span>
                                                                                                                <a href="#"><img src="themes/images/cloth/kp.png" alt="" /></a>
<!--														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$25.50</p>-->
													</div>
												</li>
												
											</ul>
										</div>
                                                                            
                                                                         

									</div>							
								</div>
							</div>						
						</div>
                                                <br/>
							
									
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/lll.jpg"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/sam.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/whirl.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/gooo.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/haier.gif"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/sony.jpg"></a>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4></h4>
						<ul class="nav">
								<li><a href="../index.php">Homepage</a></li>  
							
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
				<span>Buddy Rents  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>