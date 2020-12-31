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
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		
	</head>
    <body onload="updateRating()">		
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
							<li><h5>Settings &nbsp; &nbsp; &nbsp; </h5>
								<ul>									
									<li><a href="editprofile.php">Edit Profile</a></li>
									<li><a href="changepass.php">Change Password</a></li>
									<li><a href="logout.php">Logout</a></li>
									
								</ul>
							</li>							
						
						</ul>
					</nav>
				</div>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/carousel/h2.jpg" alt="New products" > 
				<h4 style="color:#FF0000"><span><br>Product Details</span></h4> 
				 <?php
								  
								  $id=$_GET["id"];
								   $userid=$_SESSION['username'];
								   $qryc="select userid from login where username='$userid'";
$resultc=mysqli_query($con,$qryc);
$rowc=mysqli_fetch_array($resultc);

//$qry="select * from login,role where login.role_id=role.role_id";
      $qry="select * from product where product_id='$id' and status=1 and status1=1";
$result=mysqli_query($con,$qry);
$result2=mysqli_query($con,$qry);
$ans = mysqli_fetch_assoc($result2);
echo '<input type="hidden" id="sellerId" value="'.$ans["seller_id"].'">';
$sellerid = $ans["seller_id"];
$sql3 = "SELECT store_name FROM seller WHERE seller_id='$sellerid';";
$sellerName = mysqli_fetch_assoc(mysqli_query($con, $sql3));


 $qa="select seller.store_name,seller.first_name,seller.last_name,seller.gst_no from seller,product where seller.seller_id=product.seller_id and product.product_id='$id'";
$resa=mysqli_query($con,$qa);

?>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
						<?php
while($row=mysqli_fetch_array($result)){
?>							
							<div class="span4"> 
											
								<a href="../uploads/<?php echo $row[6];?>" class="thumbnail" data-fancybox-group="group1" title="<?php echo $row[2];?>"> <img alt="" src="../uploads/<?php echo $row[6];?>"></a>												
								<ul class="thumbnails small">								
									<li class="span1">
										<a href="../uploads/<?php echo $row[9];?>" class="thumbnail" data-fancybox-group="group1" title="<?php echo $row[2];?>"><img src="../uploads/<?php echo $row[9];?>" alt=""></a>
									</li>								
									<li class="span1">
										<a href="../uploads/<?php echo $row[10];?>" class="thumbnail" data-fancybox-group="group1" title="<?php echo $row[2];?>"><img src="../uploads/<?php echo $row[10];?>" alt=""></a>
									</li>													
									<li class="span1">
										<a href="../uploads/<?php echo $row[11];?>" class="thumbnail" data-fancybox-group="group1" title="<?php echo $row[2];?>"><img src="../uploads/<?php echo $row[11];?>" alt=""></a>
									</li>
									
								</ul>
								
							</div>
							<div class="span5" align="center">
								<address>
									<h5 style="color:#0000FF">Product Name: <?php echo $row[2];?></h5><br>
									<h5 style="color:#0000FF">Company Name: <?php echo $row[14];?></h5><br>
									<?php
										while($rowa=mysqli_fetch_array($resa)){
									?>				
									<h5 style="color:#0000FF">Store Name: <?php echo $rowa[0];?></h5><br>
									<h5 style="color:#0000FF">GST Number: <?php echo $rowa[3];?></h5><br>
									<h5 style="color:#0000FF">Seller Name: <?php echo $rowa[1];?>&nbsp;<?php echo $rowa[2];?></h5><br>
									
									<?php
									}
									?>
										<h5 style="color:#0000FF">Availability: <?php echo $row[4];?></h5><br>
											<h5 style="color:#0000FF">Amount: Rs.<?php echo $row[5];?></h5><br>
									
									</address>
							</div>
							
							<div class="span12" align="center"> <br>
								<form class="form-inline" name="form_cart" action="cartadd.php">
									
									<p>&nbsp;</p> 
									<label style="color:#0000FF"><b>Quantity: &nbsp;</b></label>
									<input type="text" class="span1" placeholder="1" name="qty">
									<input type="hidden" value="<?php echo $row[4];?>" name="stock">
									<input type="hidden" value="<?php echo $row[0];?>" name="cid">
									<input type="hidden" value="<?php echo $rowc[0];?>" name="userid">
									<input type="hidden" value="<?php echo $id ?>" name="pid">
									<input type="hidden" value="<?php echo $row[5];?>" name="pri">
									
									<button class="btn btn-inverse" type="submit" name="submit" onClick="return valid()">Add to cart</button>
								</form>
								<script type="text/javascript">
								function valid()
								{
								if(document.form_cart.qty.value=="")
								{
								alert('Enter Required Quantity');
								document.form_cart.qty.focus();
								return false;
								}
								}
								</script> <br>
							</div>							
						</div>
						<script>
							function checkRating(val) {
								let el1 = document.getElementsByClassName('ratingStar');

								for(let i=0;i<val;i++) {
									el1[i].style.color = "yellow";
								}
								for(let j=val;j<el1.length;j++) {
									el1[j].style.color = "grey";
								}
							}
							let globalRating = false;
							function catchStar(rate) {
								let rating = $(rate).val();
								let sellerId = $('#sellerId').val();
								$.ajax({
									url: "putRating.ajax.php",
									type: 'POST',
									data: {
										rating: rating,
										sellerId: sellerId
									},
									success: function(dataResult) {
										checkRating(dataResult);
										globalRating = dataResult;
									}
								});
							}
							function updateRating() {
								setTimeout(() => {
									let rating = $('#ratings').val();
									console.log(globalRating);
									if(globalRating) {
										checkRating(globalRating);
										console.log("inside");
									}else {
										checkRating(rating);
									}

									let sellerid = $('#sellerId').val();
								$.ajax({
									url: 'totalRating.ajax.php',
									data: {
										sellerId:sellerid
									},
									type: 'POST',
									success: function(dataResult) {
										let vals = dataResult.split(" ");
										let totalReviewsGot = vals[1];
										let totalReviews = vals[0];
										let grandTotals = parseInt(totalReviews) * 5;
										let percent = parseInt(totalReviewsGot / parseInt(grandTotals) * 100);
										$('.actual-meter').css("width",percent+"%");
										if(percent > 70) {
											$('.actual-meter').css("background","green");
										}else if(percent > 40) {
											$('.actual-meter').css("background","yellow");
										}else {
											$('.actual-meter').css("background","red");
										}
									}
								});
								}, 100);
							}
						</script>
						<div class="row">
						<?php
								require "dbcon.php";
								if(isset($_SESSION['userid'])) {
									$uid = $_SESSION['userid'];
									$pid = $_GET['id'];
									$sql1 = "SELECT * FROM product WHERE product_id='$pid';";
									$res = mysqli_fetch_assoc(mysqli_query($con, $sql1));
									$seller_id = $res['seller_id'];
	
									$sql2 = "SELECT * FROM sellerrating WHERE user_id='$uid' AND seller_id='$seller_id';";
									$rep = mysqli_fetch_assoc(mysqli_query($con, $sql2));
									echo '<input type="hidden" id="ratings" value="'.$rep['rating'].'">';
								}

							?>
							<div class="span12">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home"><h4>Rating</h4></a></li>
									<li class=""><a href="#profile"><h4>Register Complaint</h4></a></li>
								</ul>							 
								<div class="tab-content" style="position: relative;">
									<div class="tab-pane active" id="home">
									<div class="tab-content">
									<div class="tab-pane active" id="home">
										<?php

										if(isset($_SESSION['userid'])) {
											echo '
										<div class="rating-box">
											<input type="radio" id="star1" name="rating" value="1" onclick="catchStar(this)" class="ratingInput">
											<label for="star1"><i class="fas fa-star ratingStar" onmouseover="checkRating(1)" onmouseout="updateRating()"></i></label>
											<input type="radio" id="star2" name="rating" value="2" onclick="catchStar(this)" class="ratingInput">
											<label for="star2"><i class="fas fa-star ratingStar" onmouseover="checkRating(2)" onmouseout="updateRating()"></i></label>
											<input type="radio" id="star3" name="rating" value="3" onclick="catchStar(this)" class="ratingInput">
											<label for="star3"><i class="fas fa-star ratingStar" onmouseover="checkRating(3)" onmouseout="updateRating()"></i></label>
											<input type="radio" id="star4" name="rating" value="4" onclick="catchStar(this)" class="ratingInput">
											<label for="star4"><i class="fas fa-star ratingStar" onmouseover="checkRating(4)" onmouseout="updateRating()"></i></label>
											<input type="radio" id="star5" name="rating" value="5" onclick="catchStar(this)" class="ratingInput">
											<label for="star5"><i class="fas fa-star ratingStar" onmouseover="checkRating(5)" onmouseout="updateRating()"></i></label>
										</div>';
										}
										?>

										<div class="rating-meter-box">
											<span style="display: flex;width: 200px;justify-content: space-around;">
												<p>Bad</p>
												<p>Medium</p>
												<p>Good</p>
											</span>
											<div class="actual-meter"></div>
										</div>
									</div>
									</div>
									<div class="tab-pane" id="profile">
										<h3>Register Complaint</h3>
										<form class="complaint-box" method="POST" action="registerComplaint.php">
											<input type="text" required class="complaint-input" name="complaint" style="padding: 16px;cursor: pointer;" placeholder="What is your problem against <?php echo $sellerName['store_name'] ?>">
											<input type="hidden" value=<?php echo $ans["seller_id"] ?> name="sellerId">
											<button class="complaint-button" type="submit" name="submit-complaint">Register</button>
									</form>
									</div>
								</div>							
							</div>
							<?php
								}
								?>	
								<style>
									.complaint-button {
										padding: 16px 40px;
										background: linear-gradient(#5252e5,#610aaf);
										border: none;
										border-radius: 8px;
										color: #fff;
										font-weight: bold;
										font-size: 14px;
									}
									.complaint-box {
										display: flex;
										column-gap: 8px;
									}
									.complaint-input {
										width: 40%;
										padding: 32px;
										border-radius: 8px;
									}
									.rating-box {
										position: relative;
										padding: 10px;
										display: flex;
										column-gap: 16px;
									}
									.ratingInput {
										display: none;
									}
									.ratingStar {
										font-size: 44px;
										color: grey;
										position: relative;
										overflow: hidden;
									}
									.ratingStar:hover {
										color: yellow;
									}
									.rating-meter-box {
										padding: 10px;
										background: rgb(253,253,253);
										position: absolute;
										right: 0;
										top: 0;
										display: flex;
										flex-direction: column;
									}
									.actual-meter {
										position: relative;
										width: 0%;
										padding: 2px;
										border-radius: 10px;
										background: red;
										z-index: 2;
										transition: 0.4s ease;
									}
								</style>					
							<div class="span9">	
								<br>
								<!--<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
														<a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price">$341</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
														<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
														<a href="#" class="category">Phasellus consequat</a>
														<p class="price">$341</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
														<a href="product_detail.html" class="title">Praesent tempor sem</a><br/>
														<a href="#" class="category">Erat gravida</a>
														<p class="price">$28</p>
													</div>
												</li>												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
														<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
														<a href="#" class="category">Phasellus consequat</a>
														<p class="price">$341</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
														<a href="product_detail.html">Praesent tempor sem</a><br/>
														<a href="#" class="category">Erat gravida</a>
														<p class="price">$28</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
														<a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price">$341</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span3 col">
						
						<br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br><br> <br> <br> <br> <br><br> <br> <br> <br>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
													<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
													<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						-->
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
				<span>Copyright spotive  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>