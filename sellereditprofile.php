<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Nearby stores</title>
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
<!-- Adding oh-autoVal css style -->
<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">
<!-- Adding jQuery script. It must be before other script files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<!-- Adding oh-autoVal script file -->
<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
                
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
    
<?php include_once("analyticstracking.php") ?>
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
<!--                                                        <li><a href="index.php">Home</a></li>-->
<li><a href="sellerhome.php">Back</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>-->
							
												
                                                         <li><a href="signout.php">Logout</a></li>
                                                       
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
  
					</nav>
				</div>
			</section>
                    
                    
                    
                    
                    
                    
                    
                    
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
                      
				<h4><span></span></h4>
			</section>
        <section class="main-content">

                <div class="row">
                    <div class="span12">													
                        <div class="row">
                            <div class="span12">

                                <div id="myCarousel" class="myCarousel carousel slide">
                                    <div class="carousel-inner">
                                        <form id="form1" name="form1" method="post" action="" onsubmit="return" class="oh-autoval-form">
                                            <br />
                                            <br />
                                        </form>
                                        <div class="active item">
                                            <center><h4 class="title"><span class="text"><strong>EDIT PROFILE</strong></span></h4></center>
<!--                                            <ul class="thumbnails">	-->

<?php
include 'dbcon.php';
$us_id=$_SESSION['userid'];
//$g=$_SESSION["logid"];
//echo $g;
$sql = mysqli_query($con,"SELECT * FROM seller,login where seller.userid=login.userid and seller.userid='$us_id'");
$sq3l = mysqli_query($con,"SELECT * FROM login where `userid`='$us_id'");

if(isset($_POST['update']))
{

//$user=$_POST["username"];
$l=$_POST["userid"];
$name=$_POST["name"];
$sn=$_POST["storename"];
$email=$_POST["email"];
$m=$_POST["lname"];
$no=$_POST["no"];

$us_id=$_SESSION['userid'];
//$g=$_SESSION["logid"];
$sql2="UPDATE `seller` SET `first_name`='$name',`last_name`='$m',`store_name`='$sn',`mobile_number`='$no',`email`='$email' WHERE `userid`=$us_id";
$result2=mysqli_query($con,$sql2) or die("error");
//$sql3="UPDATE `login` SET `username`='$user',`email`='$email' WHERE `userid`=$us_id";
//$result3=mysqli_query($con,$sql3) or die("error");
//echo "<script> alert('delete successfull');</script>";
 echo"<script>alert('Profile Updated!');</script>";
header("location:edit_seller_profile.php");

}
?><form action="#" method="post">
<center>
<table  width="449"  border="0">


<?php
while($row=mysqli_fetch_array($sql)){
	?>
	<tr>
		<tr><th>Name</th><td><input class="txxs" type="text" name="name" value="<?php echo $row['first_name'];?>"></td></tr>
		<tr><th>Last Name</th><td><input class="txxs" type="text" name="lname" value="<?php echo $row['last_name'];?>"></td></tr>
                <tr><th>Email</th><td><input  class="av-email" av-message="Invalid email address" type="text" name="email" value="<?php echo $row['email'];?>"></td></tr>

<tr><th>Store Name</th><td><input  type="text" name="storename" value="<?php echo $row['store_name'];?>"></td></tr>
				
<tr><th>Mobile</th><td><input class="av-mobile" av-message="Invalid Mobile no" type="text" name="no" value="<?php echo $row['mobile_number'];?>"></td></tr>
				

<!--<tr><th>User Name</th><td><input class="txxs" type="text" name="username" value="<?php echo $row['username'];?>"></td></tr>-->
        <td><input class="txt" type="hidden" name="userid" value="<?php echo $row['userid'];?>"></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" class="btn btn-inverse large" name="update" value="update"></td>
	</tr>
	<?php
}
?>

</table>
</center></form>

<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							   <li><a href="changepwd.php">Change Password</a></li>

<li><a href="seller_product.php">Products Added</a></li>
<li><a href="seller_booked.php">Products Paid</a></li>
<li><a href="seller_bkd.php">Products Booked</a></li>
							
						</ul>					
					</div>
					<div class="span4">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="seller_cancelled.php">Products Cancelled</a></li>

<!--<li><a href="seller_best_sold.php">Best Sold</a></li>-->
<!--<li><a href="status.php">Pending</a></li>-->
<li><a href="edit_seller_profile.php">Edit Profile</a></li>
<!--<li><a href="edit_seller_products.php">Edit Products</a></li>-->
                                                        <li><a href="products_nearby.php">Nearby Products</a></li>
                                                        <li><a href="signout.php">Logout</a></li>
						</ul>
					</div>
				 <div class="span5">
                        <p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
                        <p>You can get your products at lowest cost from your nearest store.</p>
                        <br/>
                        <span class="social_icons">
                            <a class="facebook" href="#">Facebook</a>
                            <a class="twitter" href="#">Twitter</a>
                            <a class="skype" href="#">Skype</a>
                            <a class="vimeo" href="#">Vimeo</a>
                        </span>
                    </div>					
                </div>	
            </section>
            <section id="copyright">
                <center><span>This Website belongs to Sruthi Dev Thomas</span></center>
            </section>
                                        </div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script></section>		
    </body>
</html>
