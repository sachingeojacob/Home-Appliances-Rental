<?php
session_start();
include 'dbcon.php'; //database connection page

//  function encryptIt($q){

// 			$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
// 			//echo '<script>console.log("'.$qEncoded.'"); </script>';
// 				$qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
				
				
//                 return( $qEncoded );
//             }
if(isset($_POST["submit"]))
{
    

     {
        
        
    
	$username=$_POST["username"];   //username value from the form
	$pwd=$_POST["password"];	//password value from the form
	//echo $username;
        $password = $pwd;
	$sql="select * from login where username='$username' and password ='$password' and status=1"; //value querried from the table
	$res=mysqli_query($con,$sql);  //query executing function
if($res)
{
	
	if($fetch=mysqli_fetch_array($res))
	{
		if($fetch['role_id']==1)   
		{

			$_SESSION["userid"]=$fetch['userid'];
			$_SESSION["username"]=$username;	// setting username as session variable 
	header("location:adminhome.php");	//home page or the dashboard page to be redirected
	exit();
	}
	elseif($fetch['role_id']==2)   
		{
		$_SESSION["username"]=$username;	// setting username as session variable 
		$_SESSION["userid"]=$fetch['userid'];
	header("location:seller/index.php");
	exit();
	}
        elseif($fetch['role_id']==3)   
		{
		$_SESSION["username"]=$username;	// setting username as session variable 
		$_SESSION["userid"]=$fetch['userid'];
	header("location:buyer/buyerhome.php");
	exit();
	}
	}
        else
{
echo "<script>alert('invalid credentials!')</script>";
}
}

    }	

}
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
                 <script>
                     gapi.load('auth2',function(){
                         gapi.auth2.init();
                     });
                     
        function loginPwd(){
            var fpwd1=/^[a-z0-9]{3,25}$/;
                if(document.frmLogin.password.value.search(fpwd1)==-1)
                 {
                      alert("Username or Password is incorrect!!");
                      document.frmLogin.password.focus();
                      
                      return false;
                }
        }
        
        

  
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
                                                    <li><a href="index.php">Home</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="#">Your Cart</a></li>
							<li><a href="#">Checkout</a></li>	-->
                                                        <li><a href="cusregister.php">Are You Looking for Something?</a></li>
							<li><a href="register.php">Are You a Seller?</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/log.png" width="30">
                                            <font color = "black" size="4"><b>Buddy Rents</b></font></a>
					<nav id="menu" class="pull-right">

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
                                            <center><h4 class="title"><span class="text"><strong>Login</strong></span></h4></center>
						<form action="#" method="post"  name="frmLogin"  id="frmLogin" onSubmit="return loginPwd()">
							<input type="hidden" name="next" value="/"><div class="span5"></div>
							<fieldset>
								<div class="control-group">
                                                                    <label class="control-label"><b>Username</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your username" id="username" name="username" class="input-xlarge" required/>
									</div>
								</div>
								<div class="control-group">
                                                                    <label class="control-label"><b>Password</b></label>
									<div class="controls">
                                                                            <input type="password" placeholder="Enter your password" id="password" name="password" class="input-xlarge" required/>
									</div>
								</div>
                                                        
                                                        </fieldset>
                                                        </br>
                                                        <center><div class="control-group">
                                                                    <input tabindex="3" class="btn btn-inverse large" type="submit" id="submit" name="submit" value="Sign into your account">
								<!--<div class="g-signin2" data-onsuccess="onSignIn"></div>-->	
                                                                    <hr>
                                                                       
                                                            </div></center>
							
						</form>				
					</div>
									
				</div>
                           
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4></h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							
							<li><a href="./login.php">Login</a></li>							
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
				<span>Copyright Buddy Rents  All right reserved.</span>
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