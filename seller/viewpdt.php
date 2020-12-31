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
            <h2 class="main-title-w3layouts mb-2 text-center">Product Details</h2>
			 <?php
			  $logid=$_SESSION['userid'];
			 $qry1="select category.category_name from category,product where category.category_id=product.category_id";
$result1=mysqli_query($con,$qry1);

		  $sql="select * from product where seller_id=(select seller_id from seller where userid=$logid)";
		  $res=mysqli_query($con,$sql);
		  $no=mysqli_num_rows($res);
		  if($no==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
            <!--// main-heading -->

            <!-- Grids Content -->
            <section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-3">
                  
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
                                <th class="text-center">
                                   Rent/Day
                                    <br>
                                   
                                </th>
                                
                                <th class="text-center">
                                    Image
                                    <br>
                                  
                                </th>
								<th class="text-center">
                                    Description
                                    <br>
                                  
                                </th>
								<th class="text-center">
                                    Approval Status
                                    <br>
                                  
                                </th>
								
                            </tr>
                        </thead>
                        <tbody>
						
                            <tr>
							
							  <?php
while($row1=mysqli_fetch_array($result1)){
?>
<?php
			while($row=mysqli_fetch_array($res))
			{
		  ?>
                               
								
								
                                <td><?php echo $row[2];?></td>
                      
                                <td><?php echo $row[4];?></td>
                                
                                <td><?php echo $row[5];?></td>
								
								
								 <td><img src="../uploads/<?php echo $row[6];?>" height="50" width="50" /></td>
								  <td><?php echo $row[3];?></td>
								  
								  <td>
								   <?php
						if(($row[7]=="0") && ($row[8]=="0"))
						{
							?>
                       <font style="color:#FF0000; font-style:italic;" >Pending</font>
							<?php
						}
						if(($row[7]=="1") && ($row[8]=="1"))
						{
							?>
                            <font style="color:#FF0000; font-style:italic;" >Approved</font>
                            <?php
						}
						?>
						<?php
						if(($row[7]=="0") && ($row[8]=="1"))
						{
							?>
                       <font style="color:#FF0000; font-style:italic;" >Rejected</font>
							<?php
						} 
						?>
						</td>
                            </tr>
                           
                           
                        </tbody>
						 <?php
			}
		  ?>
                    </table>
					<?php
								}
								?>
                
                <!--// Grids Info -->
              
 <?php
			}
		  ?>
				
           

            <!--// Grids Content -->

          
        <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br>
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
