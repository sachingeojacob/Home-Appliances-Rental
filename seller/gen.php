<?php
session_start();
if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 
	include("../dbcon.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

<script type="text/javascript">
function valid()
{

if(document.form.date.value=="")//textbox name=name
{
alert("enter date");
document.form.date.focus();
return false;
    }
	
if(document.form.bname.value=="")//textbox name=name
{
alert("enter buyer name");
document.form.bname.focus();
return false;
    }
	if(!(isNaN(document.form.bname.value)))
{
alert("Only alphabets are allowed");
document.form.bname.focus();
return false;
}
	if(document.form.pname.value=="")//textbox name=name
{
alert("enter product name");
document.form.pname.focus();
return false;
    }
	if(!(isNaN(document.form.pname.value)))
{
alert("Only alphabets are allowed");
document.form.pname.focus();
return false;
}
if(document.form.qty.value=="")//textbox name=name
{
alert("enter product Quantity");
document.form.qty.focus();
return false;
    }


if((isNaN(document.form.qty.value)))
{
alert("Only numbers are allowed");
document.form.qty.focus();
return false;
}


if(document.form.price.value=="")//textbox name=name
{
alert("enter product Price");
document.form.price.focus();
return false;
    }

if((isNaN(document.form.price.value)))
{
alert("Only numbers are allowed");
document.form.price.focus();
return false;
}

if(document.form.cmpname.value=="")//textbox name=name
{
alert("enter company name");
document.form.cmpname.focus();
return false;
    }
	if(!(isNaN(document.form.cmpname.value)))
{
alert("Only alphabets are allowed");
document.form.cmpname.focus();
return false;
}
if(document.form.size.value=="")//textbox name=name
{
alert("enter size");
document.form.size.focus();
return false;
    }
	if(!(isNaN(document.form.size.value)))
{
alert("Only alphabets are allowed");
document.form.size.focus();
return false;
}
if(document.form.color.value=="")//textbox name=name
{
alert("enter color");
document.form.color.focus();
return false;
    }
	if(!(isNaN(document.form.color.value)))
{
alert("Only alphabets are allowed");
document.form.color.focus();
return false;
}
}
</script> 






    <title>Buddy Rents</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
       
           
                <?php
				include("aside.php");
				?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                  
                           <?php
						   include("aheader.php");
						   ?>
                </div>
            </nav>
            <!--// top-bar -->

            <!-- main-heading -->
          
			
            <!--// main-heading -->

            <!-- Grids Content -->
            <section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-3">
                  
          
                
                <!--// Grids Info -->
              
 <!-- Forms-1 -->
                        
                            <h4 class="tittle-w3-agileits mb-4" ><b><i>Generate Receipt</i></b></h4>
							
							 <?php
							 $bid=$_GET['bid'];
							  $logid=$_SESSION['userid'];
							   $sqli="select seller_id from seller where userid=$logid";
		                       $resi=mysqli_query($con,$sqli);
							   $rowi=mysqli_fetch_array($resi);
							    $sa=$rowi[0];
							 $sql="select booking.*,product.product_name,product.company,product.size,product.color,customer.first_name,customer.userid from seller,product,booking,customer where booking.userid=customer.userid and product.product_id=booking.product_id and product.seller_id=seller.seller_id and seller.seller_id='$sa' and booking.book_id='$bid'";
							$ress=mysqli_query($con,$sql);
							$row=mysqli_fetch_array($ress);
							$sq="SELECT CURRENT_DATE";
							$req=mysqli_query($con,$sq);
							$rowq=mysqli_fetch_array($req);
							$date=$rowq[0];
							

?>
                            <form action="genpro.php" name="form" method="post" enctype="multipart/form-data">
							 <div class="form-group row">
                                    
                                    <div class="col-sm-10">
                                    <input type="hidden" name="sid" value="<?php echo $sa ?>" class="form-control" id="inputEmail3" placeholder="Enter Seller Id" required="" >
                                    </div>
									</div>
									 <div class="form-group row">
                                    
                                    <div class="col-sm-10">
                                    <input type="hidden" name="bid" value="<?php echo $bid ?>" class="form-control" id="inputEmail3" placeholder="Enter Seller Id" required="" >
                                    </div>
									</div>
									<div class="form-group row">
                                   
                                    <div class="col-sm-10">
                                        <input type="hidden" name="pid" class="form-control" id="inputEmail3" value="<?php echo $row['product_id']; ?>" placeholder="Enter Product Name" required="" >
                                    </div>
									</div>
									<div class="form-group row">
                                  
                                    <div class="col-sm-10">
                                        <input type="hidden" name="userid" class="form-control" id="inputEmail3" value="<?php echo $row['userid']; ?>" placeholder="Enter Product Name" required="" >
                                    </div>
									</div>
									 <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="date" value="<?php echo $date ?>" placeholder="Enter date" required="">
                                    </div>
                                </div>
									 <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Buyer Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="bname" value="<?php echo $row['first_name']; ?>" placeholder="Enter name" required="">
                                    </div>
                                </div>
									<br>
							 <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pname" class="form-control" id="inputEmail3" value="<?php echo $row['product_name']; ?>" placeholder="Enter Product Name" required="" >
                                    </div>
									</div>
									
									 <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="qty" class="form-control"  value="<?php echo $row['quantity']; ?>" id="inputEmail3" placeholder="Enter Product Quantity" required="" >
                                    </div>
                                </div>
								 <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Date From</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="fdate" class="form-control" id="inputEmail3"  value="<?php echo $row['fdate']; ?>" placeholder="Enter Price" required="">
                                    </div>
									</div>
									 <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Date To</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="tdate" class="form-control" id="inputEmail3"  value="<?php echo $row['tdate']; ?>" placeholder="Enter Price" required="">
                                    </div>
									</div>
								
								 <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="price" class="form-control" id="inputEmail3"  value="<?php echo $row['amount']; ?>" placeholder="Enter Price" required="">
                                    </div>
									</div>
									 
									 
									<div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Company Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="cmpname" class="form-control"  value="<?php echo $row['company']; ?>" id="inputEmail3" placeholder="Enter Company Name" required="" >
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Size</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="size" class="form-control" id="inputEmail3"  value="<?php echo $row['size']; ?>" placeholder="Enter Product Size (eg. Large,Medium,Small)" required="" >
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Color</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="color" class="form-control"  value="<?php echo $row['color']; ?>" id="inputEmail3" placeholder="Enter Product Color" required="" >
                                    </div>
                                </div>
                               
								
								
								
                                <div class="form-group row">
                                    
                                    <div class="col-sm-10">
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                       <center> <input type="submit" name="submit" value="Generate" onClick="return valid()" class="btn btn-primary"/></center>
                                    </div>
                                </div>
                            </form>
                       
                        <!--// Forms-1 -->
                     
				
           

            <!--// Grids Content -->

          
        </div>
		<?php
		  include("afooter.php");
		  ?>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>
