    <?php
session_start();
if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 
	include("dbcon.php");


//function send($sms, $to) {
    
       // $sms = urlencode($sms);
      
           // $url = 'http://sms.safechaser.com/httpapi/httpapi?token=2751b86a6a4babda36a62c1b04377a84&sender=crushe&number='.$to.'&route=2&type=1&sms='.$sms;
        
            
            
          //  $ch = curl_init($url);
       // curl_setopt($ch, CURLOPT_TIMEOUT, 50);
       // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
      //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       // $datares = curl_exec($ch);
       // curl_close($ch);
      //  return $datares;
   // }





if(isset($_POST['submit1']))
{
$uid=$_SESSION['userid'];
$a=$_POST["fname"];
$b=$_POST["lname"];
$d=$_POST["mobilenumber"];
$e=$_POST["email"];
$g=$_POST["country_select"];
$h=$_POST["state_select"];
$i=$_POST["district_select"];
$j=$_POST["place_select"];
$k=$_POST["username"];

 
  
 
 
$sql1="UPDATE login SET username='$k' where userid='$uid'";
$result1=mysqli_query($con,$sql1);

$logid="UPDATE customer SET first_name='$a',last_name='$b',mobile_number=$d,email='$e',place_id=$j,username='$k' where userid='$uid'";
$result2=mysqli_query($con,$logid);

echo '<script language="javascript">';
        echo 'alert("Successfully Details Updated")';
        echo '</script>';
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
							
							<h4 style="color:#FF0000"><b><i>Welcome <?php echo $_SESSION['username']; ?></i></b></h4>				
								
						
						</ul>
					</div>
				</div>
			</div>
		</div>
             
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="buyerhome.php" class="logo pull-left"><img src="themes/images/log.png" width="30px">
                                            <font color = "black" size="4"><b>Buddy Rents</b></font></a>
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
                        
                        <img class="pageBanner"  src="themes/images/pgban.jpg"  alt="New products" >
                      
				<h4><span></span></h4>
			</section>
                    
			
                            
                    <div  style="background-image: url(themes/images/ee.jpg);background-size: cover;">
				<div class="row">
					
										
                                            <h3 style="color:#FF0000"> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Update Profile Details</h3> <br>
											
<form name="sregister" class="form-stacked" id="sregister" method="POST" action="#" onSubmit="return">
                                                    <div class="span5"></div>
							<fieldset>
                               <?php
											$userid=$_SESSION['userid'];
											$qry="select * from customer where userid='$userid'";
											$res=mysqli_query($con,$qry);
											
?>
<?php
while($row=mysqli_fetch_array($res))
{
?>                               
								<div class="control-group">
                                                                    <label class="control-label"><b>First Name:</b></label>
									<div class="controls">
                                                                            <input type="text" value="<?php echo $row[2]; ?>" placeholder="Enter your first name" id="fname" name="fname" class="input-xlarge" required onChange="return gName()"/>
																			<span class="error" id="fname_error"></span>

									</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Last Name:</b></label>
									<div class="controls">
                                                                            <input type="text" value="<?php echo $row[3]; ?>" placeholder="Enter your last name" id="lname" name="lname" class="input-xlarge" required onChange="return glName()"/>
								                                                												<span class="error" id="lname_error"></span>

								</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Mobile Number:</b></label>
									<div class="controls">
                                                                            <input type="tel" value="<?php echo $row[4]; ?>" pattern="[789][0-9]{9}" placeholder="Enter your mobile number" id="mobilenumber" name="mobilenumber"  class="input-xlarge"  onChange="return gPhone()" required/>
																												<span class="error" id="mobilenumber_error"></span>

									</div>
								<div class="control-group">
									<label class="control-label"><b>Email address:</b></label>
																												

									<div class="controls">
                                                                            <input type="email" value="<?php echo $row[5]; ?>" placeholder="Enter your email" id="email" name="email" class="input-xlarge" onChange="return gEmail()" required/>
<span class="error" id="email_error"></span>
									</div>
								</div>
                                                      
								</div><div class="control-group">
								  <?php
            $q="select * from country";
			$res2=mysqli_query($con,$q);
            //var_dump($q);

            
                
            ?>
									<label class="control-label"><b>Country:</b></label>
									<div class="controls">
									
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                                                                            <select class="form-control" name="country_select" id="country_select" required/>
																			<?php
									while ($row2= mysqli_fetch_array($res2)) {
									?>
                  <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>
                           
           <?php
			  }
			  ?>
              </select>
			 
									</div>
								</div><div class="control-group">
								  <?php
            $q1="select * from state";
			$res3=mysqli_query($con,$q1);
            //var_dump($q);

            
                
            ?>
					
									<label class="control-label"><b>State:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                                                            <select class="form-control" name="state_select" id="state_select" required/>
																			<?php
									while ($row3= mysqli_fetch_array($res3)) {
									?>
																			<option value="<?php echo $row3[0]; ?>"><?php echo $row3[2]; ?></option>
																			<?php
																			}
																			?></select>
									</div>
								</div><div class="control-group">
								  <?php
            $q2="select * from district";
			$res4=mysqli_query($con,$q2);
            //var_dump($q);

            
                
            ?>
									<label class="control-label"><b>District:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your district" id="district" name="district" class="input-xlarge" required/>-->
									<select class="form-control" name="district_select" id="district_select" required/>
									<?php
									while ($row4= mysqli_fetch_array($res4)) {
									?>
                        <option value="<?php echo $row4[0]; ?>"><?php echo $row4[2]; ?></option>
						<?php
						}
						?></select>
                                                                        </div>
								</div><div class="control-group">
								<?php
            $q3="select * from place";
			$res5=mysqli_query($con,$q3);
            //var_dump($q);

            
                
            ?>
							
									<label class="control-label"><b>Place:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your town" id="town" name="town" class="input-xlarge" required/>-->
                                                                            <select class="form-control" name="place_select" id="place_select" required/>
																			 
																			<?php
while($row5=mysqli_fetch_array($res5))
{
?>
                        <option value="<?php echo $row5[0]; ?>"><?php echo $row5[2]; ?></option>
						<?php
						}
						?></select>
                                                                        </div>
								</div>
								<?php
											
											$qry1="select * from customer where userid='$userid'";
											$res1=mysqli_query($con,$qry1);
											
?>
<?php
while($row1=mysqli_fetch_array($res1))
{
?>
                                                                <div class="control-group">
									<label class="control-label"><b>Username</b></label>
									<div class="controls">
                                                                            <input type="text" value="<?php echo $row1[7]; ?>" placeholder="Enter your username" id="username" name="username" class="input-xlarge" required/>
									<span class="error" id="username_error"></span>
									</div>
								</div>
								<!--<div class="control-group">
									<label class="control-label"><b>Password:</b></label>
									<div class="controls">
                                                                            <input type="password" value="<?php echo $row1[8]; ?>" placeholder="Enter your password" id="password" name="password" class="input-xlarge" required/>
									<span class="error" id="password_error"></span>
									</div>
								</div>	
                                                            
                                                             <div class="control-group">
                                                                 <label class=" control-label"><b>Confirm Password:</b></label>
            <div class="controls">
                <input id="password1" name="password1" type="password" value="<?php echo $row1[8]; ?>" placeholder="Confirm password"   class="input-xlarge" required onChange="return gPwd()"/>
<span class="error" id="password1_error"></span>
            </div>
        </div>-->
		<?php
		}
		?>
		  <?php
									}
									?>                        
                                        
								</fieldset>
                                                    <center><hr>
                                                                <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" id="submit1" name="submit1" value="Update"></div>
                                                    </center>
						</form>
										
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
				  <script src="js/jquery-3.2.1.js"></script>
    <script src="js/sregistration.js"></script>
    <script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
                        
                        
                        
                               $('body').on('change', '#country_select', function () {
//            alert("countryslected");
            $index = $('#country_select').val();
           
            $.ajax({
            type:'post',
                    url:'get_state.php',
                    data:{index:$index},
                    success:function(response)
                    {
//                        alert(response);
                    console.log(response);
                    $ar = response.split(",");
                            $str = "<option value='-1' disabled hidden selected> </option>";
                            for (var i = 0; i < $ar.length; i++)
                    {
                        $ss=$ar[i].split(':');
                    $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
                    }
                    $('#state_select').html($str);
                }
                    });
                    
    });
      $('body').on('change', '#state_select', function () {
//            alert("countryslected");
            $index = $('#state_select').val();
           
            $.ajax({
            type:'post',
                    url:'get_district.php',
                    data:{index:$index},
                    success:function(response)
                    {
//                        alert(response);
                    console.log(response);
                    $ar = response.split(",");
                           $str = "<option value='-1' disabled hidden selected> </option>";
                            for (var i = 0; i < $ar.length; i++)
                    {
                        $ss=$ar[i].split(':');
                    $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
                    }
                    $('#district_select').html($str);
                }
                    });
                    
    });
                    
                  
          $('body').on('change', '#district_select', function () {
//            alert("countryslected");
            $index = $('#district_select').val();
            $index_id=$('#district_select option selected').val();
           
            $.ajax({
            type:'post',
                    url:'get_town.php',
                    data:{index:$index},
                    success:function(response)
                    {
//                        alert(response);
                    console.log(response);
                    $ar = response.split(",");
                          $str = "<option value='-1' disabled hidden selected> </option>";
                            for (var i = 0; i < $ar.length; i++)
                    {
                        $ss=$ar[i].split(':');
                    $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
                    }
                    $('#place_select').html($str);
                }
                    });
                    
    });
                    
   

$('body').on('change', '#place_select', function () {
//            alert("countryslected");
            $index = $('#place_select').val();
            $index_id=$('#place_select option selected').val();
            $('#place_select option:selected').val();
           
            $.ajax({
            type:'post',
//                    url:'get_town.php',
                    data:{index:$index},
                    success:function(response)
                    {
//                        alert(response);
                    console.log(response);
                    $ar = response.split(",");
                          $str = "<option value='-1' disabled hidden selected> </option>";
                            for (var i = 0; i < $ar.length; i++)
                    {
                        $ss=$ar[i].split(':');
                    $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
                    }
//                    $('#place_select').html($str);
                }
                    });
                    
    });
                        
                        
                        
		</script>
    </body>
</html>