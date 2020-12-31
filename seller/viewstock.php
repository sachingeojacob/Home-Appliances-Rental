<?php
session_start();
if(!isset($_SESSION['username'])) {
 //if not yet logged in
   header("Location: ../login.php");// send to login page
   
  } 
	include("../dbcon.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Grids :: w3layouts</title>
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
            <h2 class="main-title-w3layouts mb-2 text-center">Stock Details</h2>
			
            <!--// main-heading -->

            <!-- Grids Content -->
            <section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-3">
                   <?php
			  
			 
 $sid=$_SESSION['username'];
 $ss="select seller_id from seller where username='$sid'";
  $res1=mysqli_query($con,$ss);
  $row1=mysqli_fetch_array($res1);
  $sa=$row1[0];
		  $sql="select distinct stock.quantity,product.product_name from stock,product,seller where stock.product_id=product.product_id and product.seller_id='$sa'";
		  $res=mysqli_query($con,$sql);
		  $no=mysqli_num_rows($res);
		  if($no==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                               
                                <th class="text-center">
                                   Product Name
                                    <br>
                                    
                                </th>
                                <th class="text-center">
                                   Quantity
                                    <br>
                                   
                                </th>
								
                        
								
                            </tr>
                        </thead>
                        <tbody>
						<?php
			while($row=mysqli_fetch_array($res))
			{
		  ?>
                
                            <tr>
							
							
               
								
								
                                <td><?php echo $row[1];?></td>
                      
                                <td><?php echo $row[0];?></td>
                               
								
						
                            </tr>
                            <?php
			}
		  ?>
                          
                        </tbody>
						 
                    </table>
					
					<?php
								}
								?>
                
                <!--// Grids Info -->
              

				
           

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
