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
		<script type="text/javascript" language="javascript">
function getsapart(str)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("rose").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","cname1.php?locat="+str,true);
xmlhttp.send(null);
}
<!------->
function getshid(str)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("hoid").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","cname3.php?hid="+str,true);
xmlhttp.send(null);
}
<!----->

function getsBuild(str)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("build").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","cname2.php?id="+str,true);
xmlhttp.send(null);
}
<!------------------>

<!------------------>
function getscapart(str)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("crose").innerHTML=xmlhttp.responseText;
    }
  }
  
  
xmlhttp.open("GET","cnamec1.php?locat="+str,true);
xmlhttp.send(null);
}
function getshidd(str)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("hoidd").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","cnamec3.php?hid="+str,true);
xmlhttp.send(null);
}

function getscBuild(str)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("cbuild").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","cnamec2.php?id="+str,true);
xmlhttp.send(null);
}


</script>


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
				<h4 style="color:#FF0000"><span><br>Compare Shops</span></h4> <br>
				
				<table class="table" >
		<tr>
		<td><label>Store Name</label></td>
		<td>
			<select name="build" onChange="getsapart(this.value)">
			<option value="0">---select---</option>
			<?php
			$sql="select * from seller where status=1";
			$res=mysqli_query($con,$sql);
			/*$sql="select apartments.*,builder.* from apartments inner join builder on builder.id=apartment.id where builder.buildername";
			$res=$obj->exe($sql);*/
			while($r=mysqli_fetch_array($res))
			{
			?>
			<option value="<?php echo $r[0];?>"><?php echo $r[4];?></option>
			<?php
			}
			?>
			
			</select>
			</td>
			
			
		
		<td><label>Store Name</label></td>
		
		<td>
			<select name="build" onChange="getscapart(this.value)">
			<option value="0">---select---</option>
			<?php
			$sql="select * from seller where status=1";
			$res=mysqli_query($con,$sql);
			/*$sql="select apartments.*,builder.* from apartments inner join builder on builder.id=apartment.id where builder.buildername";

			$res=$obj->exe($sql);*/
			
			while($r=mysqli_fetch_array($res))
			{
			?>
			<option value="<?php echo $r[0];?>"><?php echo $r[4];?></option>
			<?php
			}
			?>
			
			</select>
			</td>
			<tr><td id="rose"></td><td id=""></td><td id="crose"></td></tr>
			<tr><td id="hoid"></td><td id=""></td><td id="hoidd"></td></tr>
			<tr><td id="build"></td><td id=""></td><td id="cbuild"></td></tr>
			
			</table>
								
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