

<?php
include 'dbcon.php';

//function send($sms, $to) {
    
      //  $sms = urlencode($sms);
      
           // $url = 'http://sms.safechaser.com/httpapi/httpapi?token=2751b86a6a4babda36a62c1b04377a84&sender=crushe&number='.$to.'&route=2&type=1&sms='.$sms;
        
            
            
          //  $ch = curl_init($url);
        //curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        //curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //$datares = curl_exec($ch);
        //curl_close($ch);
       // return $datares;
   // }

// function encryptIt($q){
//                 $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
//                 $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
//                 return( $qEncoded );
//             }
if(isset($_POST['submit1']))
{
$a=$_POST["fname"];
//echo "<script> alert('hai');</script>";
$b=$_POST["lname"];
$c=$_POST["storename"];
$d=$_POST["mobilenumber"];
$e=$_POST["email"];
$f=$_POST["gstnumber"];
$lat=$_POST["lat"];
$lon=$_POST["lon"];
$k=$_POST["username"];
$o=$_POST["password"];
$p = $_POST["password1"];
 $encrypted = $p;
if ($p == $o) {
$sql1="INSERT INTO `login`(`username`, `password`,`role_id`,`status`) VALUES ('$k','$encrypted','2',1)";
$result1=mysqli_query($con,$sql1);

$logid="SELECT `userid` FROM `login` WHERE `username`='$k'";
$result2=mysqli_query($con,$logid);
$row=mysqli_fetch_array($result2);


  $l=$row["userid"];
  



 $sql="INSERT INTO `seller`(`userid`,`first_name`, `last_name`, `store_name`, `mobile_number`, `email`, `gst_no`, `username`, `password`,`lat`,`lon`, `status`) VALUES ($l,'$a','$b','$c','$d','$e','$f','$k','$p','$lat','$lon',1)";
$result3=mysqli_query($con,$sql);

echo"<script>alert('Data Entered Successfully');</script>)";

}else {

        echo '<script language="javascript">';
        echo 'alert("Your password does not match")';
        echo '</script>';
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
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
       <style>
	     .error{
	  color:red;
  }
</style>	   
                
	</head>
        
        
        
    <body style="background-image: url(themes/images/iiii.jpg);background-size: cover;">		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
                                                    <li><a href="index.php">Home</a></li>

                                                        <li><a href="cusregister.php">Are You Looking for Something?</a></li>					
                                                        <li><a href="login.php">Already have an Account?</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/log.png" width="30px">
                                            <font color = "black" size="4"><b>Buddy Rents</b></font></a>
					<nav id="menu" class="pull-right">

					</nav>
				</div>
			</section>
                    
                    
                    
                    
                    
                    
                    
                    
			<section class="header_text sub">
                            <img class="pageBanner" src="themes/images/pgban.jpg" alt="New products" >
                      
				<h4><span></span></h4>
			</section>
                    
			<section class="main-content">
                             <div  style="background-image: url(themes/images/ee.jpg);background-size: cover;"> 
                           
				<div class="row">
					
					<div class="span12">					
                                            <center><h4 class="title"><span class="text"><strong>Register</strong></span></h4></center>
                                                <!--<form action="#" method="post" class="form-stacked">-->
                                                    <form name="sregister" class="form-stacked" id="form" method="POST" action="#" onSubmit="return ">
                                                    <div class="span5"></div>
							<fieldset>
                                                              
								<div class="control-group">
                                                                    <label class="control-label"><b>First Name:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your first name" id="fname" name="fname" class="input-xlarge"  data-rule="maxlen:4" required onChange="return gName()" >
																			<span class="error" id="fname_error"></span>

																			<div class="validation"></div>
									</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Last Name:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your last name" id="lname" name="lname" class="input-xlarge" required onChange="return glName()"/> 
																						<span class="error" id="lname_error"></span>

							<div class="validation"></div>
									</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Store Name:</b></label>
									<div class="controls">

									<input type="text" placeholder="Enter your store name" id="storename" name="storename" class="input-xlarge" required />
											<span class="error" id="storename_error"></span>

									
									</div>
								</div><div class="control-group">
									<label class="control-label"><b>Mobile Number:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your mobile number" id="mobilenumber" name="mobilenumber"  class="input-xlarge" required onChange="return gPhone()"/>
											<span class="error" id="mobilenumber_error"></span>

									</div>
								<div class="control-group">
									<label class="control-label"><b>Email address:</b></label>
									<div class="controls">
                                                                            <input type="email" placeholder="Enter your email" id="email" name="email" class="input-xlarge" data-rule="email" required onChange="return gEmail()"/> 
										<span class="error" id="email_error"></span>

								<div class="validation"></div>
									</div>
								</div>
                                                            
                                                            
								</div><div class="control-group">
									<label class="control-label"><b>GST Number:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your GST Number" id="gstnumber" name="gstnumber" class="input-xlarge" required onChange="return gst()"/>
											<span class="error" id="gstnumber_error"></span>

									</div>
								</div><div class="control-group">
									<label class="control-label"><b>State</b></label>
									<div class="controls">
	                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
	                            <select class="form-control" name="state_select" id="state_select" onChange="getDistrict(this.value);" required/>
	                            
                 			    <option value="-1">select</option>
                           
						            <?php
						            $q = mysqli_query($con, "SELECT state_id,state_name FROM state where status=1");
						            //var_dump($q);

						            while ($row = mysqli_fetch_array($q)) {
						                echo '<option value=' . $row['state_id'] . '>' . $row['state_name'] . '</option>';
						            }
						            ?>
						              </select>
									</div>
								</div><div class="control-group">
									<label class="control-label"><b>District:</b></label>
									<div class="controls">
                                    <!--<input type="text" placeholder="Enter your district" id="district" name="district" class="input-xlarge" required/>-->
									<select class="form-control" name="district_select" id="district_select" onChange="getTown(this.value);" required/>
                        <option value="-1">select</option></select>
                                                                        </div>
								</div>
								  <div class="control-group">
									<label class="control-label"><b>Map Latitude</b></label>
									<div class="controls">
                                        <input type="text" placeholder="Enter Latitude" id="lat" name="lat" class="input-xlarge" required/>

									</div>
								</div>
								 <div class="control-group">
									<label class="control-label"><b>Map Longitude</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter Longitude" id="lon" name="lon" class="input-xlarge" required/>

									</div>
								</div>
                                                                <div class="control-group">
									<label class="control-label"><b>Username</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your username" id="username" name="username" class="input-xlarge" required/>
											<span class="error" id="username_error"></span>

									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>Password:</b></label>
									<div class="controls">
                                                                            <input type="password" placeholder="Enter your password" id="password" name="password" class="input-xlarge" required/>
										<span class="error" id="password_error"></span>

								</div>
								</div>	
                                                            <div class="control-group">
                                                                 <label class=" control-label"><b>Confirm Password:</b></label>
            <div class="controls">
                <input id="password1" name="password1" type="password" placeholder="Confirm password"   class="input-xlarge" required onChange="return gPwd()">
		<span class="error" id="password1_error"></span>

            </div>
        </div>
		
								</fieldset>
                                                    <center><hr>
                                                                <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" id="submit1" name="submit1" value="Create your account"></div>
                                                    </center>
						</form>					
					</div>				
				</div>
                             </div>
			</section>			
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
						<p class="logo"><img src="themes/images/log.png" width="30" alt=""> <font color = "white" size="2">Buddy Rents</font> </p>
						<p>You can get your products at lowest cost from your nearest store</p>
						<br/>
						
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright Buddy Rents  All right reserved.</span>
			</section>
		</div>
		<!-- Jquery for ajax -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- // Jquery for ajax //-->
    <script src="js/validation.js"></script>
	<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
                    
			function getState(val) {
				$.ajax({
				type: "POST",
				url: "get_State.php",
				data:'country_id='+val,
				success: function(data){
					$("#state_select").html(data);
					getDistrict();
				}
				});
			}
			function getDistrict(val) {
				$.ajax({
				type: "POST",
				url: "get_district.php",
				data:'state_id='+val,
				success: function(data){
					$("#district_select").html(data);
					getTown();
				}
				});
			}

			function getTown(val) {
				$.ajax({
				type: "POST",
				url: "get_town.php",
				data:'district_id='+val,
				success: function(data){
					$("#place_select").html(data);
				}
				});
			}
                    
                  

                    
   

// $('body').on('change', '#place_select', function () {
// //            alert("countryslected");
//             $index = $('#place_select').val();
            
//             $index_id=$('#place_select option selected').val();
//             $('#place_select option:selected').val();
           
//             $.ajax({
//             type:'post',
// //                    url:'get_town.php',
//                     data:{index:$index},
//                     success:function(response)
//                     {
// //                        alert(response);
//                     console.log(response);
//                     $ar = response.split(",");
//                           $str = "<option value='-1' disabled hidden selected> </option>";
//                             for (var i = 0; i < $ar.length; i++)
//                     {
//                         $ss=$ar[i].split(':');
//                     $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
//                     }
// //                    $('#place_select').html($str);
//                 }
//                     });
                    
//     });
                        
                        
                        
				

                       
		</script>	
		
    </body>
</html>