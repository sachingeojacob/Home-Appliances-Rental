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
					<a href="index.php" class="logo pull-left"><img src="themes/images/log.png" width="30">
                                            <font color = "black" size="4"><b>Nearby stores</b></font></a>
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
                                           
                                            <h3 style="color:#FF0000"> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;Payment Details</h3> <br>
											<?php
											$wid=$_POST['wid'];
											$qty=$_POST['qty'];
											$price=$_POST['price'];
										
											$pid=$_POST['pid'];
											$username=$_SESSION['username'];
											$sql="select userid from login where username='$username'";
											$res=mysqli_query($con,$sql);
											$row=mysqli_fetch_array($res);
											$userid=$row[0];
											$select3="SELECT CURRENT_DATE";
$res3=mysqli_query($con,$select3);
$row3=mysqli_fetch_array($res3);
$date=$row3[0];
											?>
						<form action="bpro.php" method="post"  name="form1"  id="frmLogin" >
							<input type="hidden" name="next" value="/"><div class="span5"></div>
							<fieldset>
							<div class="control-group">
                                                                  
									<div class="controls">
									<input type="hidden" class="margin-right" name="pid" value="<?php echo $pid ?>">
                                                                            
									</div>
								</div>
								<div class="control-group">
                                                                  
									<div class="controls">
									<input type="hidden" class="margin-right" name="wid" value="<?php echo $wid ?>">
                                                                            
									</div>
								</div>
								<div class="control-group">
                                                                  
									<div class="controls">
									<input type="hidden" class="margin-right" name="price" value="<?php echo $price ?>">
                                                                            
									</div>
								</div>
								
								<div class="control-group">
                                                                  
									<div class="controls">
									<input type="hidden" class="margin-right" name="userid" value="<?php echo $userid ?>">
                                                                            
									</div>
								</div>
								<div class="control-group">
                                                                   
									<div class="controls">
									<input type="hidden" class="margin-right" name="qty" value="<?php echo $qty ?>">
                                              </div>
								</div>
								<div class="control-group">
                                                                    
									<div class="controls">
									
                                               <input type="hidden" id="password" name="date" value="<?php echo $date ?>" class="input-xlarge" required/>
									</div>
								</div>
								<div class="control-group">
                                                                    <label class="control-label"><b>Select From Date</b></label>
									<div class="controls">
                                                  <input type="date" id="cpassword" name="fdate" class="input-xlarge" required/>
									</div>
								</div>
								<div class="control-group">
                                                                    <label class="control-label"><b>Select To Date</b></label>
									<div class="controls">
                                                  <input type="date" id="cpassword" name="tdate" class="input-xlarge" required/>
									</div>
								</div>
								<div class="control-group">
                                                                    <label class="control-label"><b>Card Type</b></label>
									<div class="controls">
									
                                              <select name="ctype">
											  <option value="0"> --Select--</option>
											  <option value="debitcard"> Debit Card</option>
											   <option value="creditcard"> Credit Card</option></select>
									</div>
								</div>
								<div class="control-group">
                                                                    <label class="control-label"><b>Bank Name</b></label>
									<div class="controls">
									
                                                 <select name="bank">
												 <option value="0"> --Select--</option>
											  <option value="SBI"> SBI</option>
											   <option value="canara bank"> Canara Bank</option>
											   <option value="south indian bank"> South Indian Bank</option></select>
									</div>
								</div>
									<div class="control-group">
                                                                    <label class="control-label"><b>Enter Your Card Number</b></label>
									<div class="controls">
									
                                               <input type="password" placeholder="Enter Card Number" id="password" name="cardno" class="input-xlarge" required/>
									</div>
								</div>
								<div class="control-group">
                                                                    <label class="control-label"><b>Enter CVV</b></label>
									<div class="controls">
                                                  <input type="password" placeholder="Enter CVV" id="cpassword" name="cvv" class="input-xlarge" required/>
									</div>
								</div>
                                                        
                                                        </fieldset>
                                                        </br>
                                                        <center><div class="control-group">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    <input tabindex="3" class="btn btn-inverse large" type="submit" id="submit" name="submit" value="Buy Product" onClick="return valid()">
								<!--<div class="g-signin2" data-onsuccess="onSignIn"></div>-->	
                                                                    <hr>
                                                                        
                                                            </div></center>
							
						</form>	
						<script type="text/javascript">
function valid()
{
if(document.form1.fdate.value=="")
{
alert("select Starting Date");
document.form1.fdate.focus();
return false;
    }
if(document.form1.tdate.value=="")
{
alert("select Ending Date");
document.form1.tdate.focus();
return false;
    }
if(document.form1.bank.value=="0")
{
alert("select bank");
document.form1.bank.focus();
return false;
    }
	if(document.form1.cardno.value=="")
{
alert("enter card number");
document.form1.cardno.focus();
return false;
    }
	var phone=document.form1.cardno.value.length;
if((isNaN(document.form1.cardno.value)))
{
alert("Only numbers are allowed");
document.form1.cardno.focus();
return false;
}
var max=10;
if((phone<max) || (phone>max))
{
alert("Please Enter  10 digit card Number");

document.form1.cardno.focus();
return false;
}

if(document.form1.cvv.value=="")
{
alert("enter cvv");
document.form1.cvv.focus();
return false;
    }
	var phone=document.form1.cvv.value.length;
if((isNaN(document.form1.cvv.value)))
{
alert("Only numbers are allowed");
document.form1.cvv.focus();
return false;
}
var max=3;
if((phone<max) || (phone>max))
{
alert("Please Enter  3 digit cvv Number");

document.form1.cvv.focus();
return false;
}

}
</script>
			
					</div>
									
				</div>
                           
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4></h4>
						<ul class="nav">
							<li><a href="buyerhome.php">Homepage</a></li>  
							
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