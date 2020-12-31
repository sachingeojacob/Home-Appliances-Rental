<?php


	include 'dbcon.php';


if (isset($_POST['signup'])) {
   
    $subcategoryname = $_POST['subcategoryname'];
    $category_select = $_POST['category_select'];


    
    $sql4="select * from subcategory where subcategory_name='$subcategoryname'";
      $result1 = mysqli_query($con,$sql4);
    $row8 = mysqli_fetch_array($result1);
     if(count($row8)==0){
  

      
        $sql1="INSERT INTO `subcategory`( `subcategory_name`,`category_id`,`status`) VALUES ('$subcategoryname',$category_select,1)";
        
        $res = mysqli_query($con, $sql1)or die(mysqli_error($con));


        $p = "select max(subcategory_id) as lgid from subcategory";

        $q = mysqli_query($con, $p) or die(mysqli_error($con));
        $row = mysqli_fetch_array($q);
        $x = $row['lgid'];




        echo '<script> alert("Subcategory Added! ")</script>';

                  }
else{
     echo '<script> alert("Subcategory Already Existed! ")</script>';
}
    }

?>

     

<!DOCTYPE HTML>
<html>
<head>
<title>Nearby stores</title>
                 <link rel="shortcut icon" href="themes/images/log.png" type="image/x-icon" /> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->

    <style>
  .button {
    background-color: royalblue;
    border: none;
    color: white;
    border-radius:13px 13px 13px 13px;
    padding: 8px 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 22px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: orangered    ; 
    border: 8px solid white;
}

.button1:hover {
    background-color: orangered;
    color: white;
}
     .error{
	  color:red;
  }
                </style>

</head> 
<body>
    <script>

	
function fName(){
            var categoryname= form1.categoryname.value;
                if((categoryname===null)||(categoryname.length<3)){
                    
                    alert("Enter Correct Name");
                    form1.categoryname.focus();
                    return false;
                }
                var categoryname=/^[a-zA-Z]{3,20}$/;
                if(form1.categoryname.value.search(categoryname)==-1)
                 {
                      alert("Enter correct  Name");
                        form1.categoryname.focus();
                      form1.categoryname.style.border = "1px solid red";
                      return false;
                    
                    }
                if((categoryname.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                  form1.categoryname.focus();
                    return false;
                }
              
                
        }
		
                
                 function  addUser(){
			
			
       var categoryname= form1.categoryname.value;
                if((categoryname===null)||(categoryname.length<3)){
                    form1.categoryname.style.border = "1px solid red";
                    alert("Enter Valid Name");
                    form1.categoryname.focus();
                    return false;
                }
                var categoryname=/^[a-zA-Z ]{4,25}$/;
                if(form1.categoryname.value.search(categoryname)==-1)
                 {
                      alert("Enter correct Name");
                      form1.categoryname.focus();
                      form1.categoryname.style.border = "1px solid red";
                      return false;
                    }
                if((categoryname.length>25)){
                    form1.categoryname.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                   form1.categoryname.focus();
                    return false;
                }
				
    }
               </script>
               
   
    <div style="margin-left:400px;margin-top:100px;max-width:1000px;background-image:url(themes/images/iw.jpg);background-size:cover;">
        <center><font face="Comic Sans MS" size="5"><b>ADD SUBCATEGORY</b></font></center><br>
      

<form name="form1" class="form-horizontal" method="post" action="" onSubmit="return">
    <fieldset>

      

<div class="form-group">
    <label class="col-md-4 control-label" for="street" style="color:black"> Category</label>  
            <div class="col-md-4">
                 
                        <select class="form-control" name="category_select" id="category_select">
                        <option value="-1">select</option> 
                     <?php
            $q = mysqli_query($con, "SELECT category_id,category_name FROM category where status=1");
            

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['category_id'] . '>' . $row['category_name'] . '</option>';
            }
            ?></select>

            </div>
        </div>
               <div class="form-group">
            <label class="col-md-4 control-label" for="name" style="color:black">Subcategory Name</label>  
            <div class="col-md-4">
                <input id="subcategoryname" name="subcategoryname" type="text" placeholder="Enter Subcategory Name" class="form-control input-md" required onChange="return fName()">
<input type="submit" name="signup" value="ADD" id="signup" class="button button1">
            </div>
        </div>
               


                
           

    </fieldset>
</form>
                                            
                                            
                                            
                                            <br>
<div class="span12">					
                                             <center> <font face="Comic Sans MS" size="5"><b>ADDED SUBCATEGORIES</b></font></center>
                                            <form >
                                                
                                                 <?php

      $qry="select * from subcategory";
$result=mysqli_query($con,$qry);

?>
 <?php
while($row=mysqli_fetch_array($result)){
?>
                                                <table style="margin-left: 450px;margin-top:20px" ><form action="#" method="post">
       <tr></tr>     <tr>
          <td></td>
          <td style="font-size: 20px;font-family:Georgia;"><?php echo $row['subcategory_name'];?></td>
     
        
      </tr>
      <?php
}
?>
    </table></form>
    </div>
               <script>
                  
             $('body').on('click', '#btn_Product_reg', function () {
             $.ajax({
            type:'post',
                    url:'data_save.php',
                    data:{context:'save_product'},
                    success:function(response)
                    {
                        alert(response);
                    }});
         });
        $('body').on('change', '#category_select', function () {
            $index = $('#category_select').val();
           
            $.ajax({
            type:'post',
                    url:'get_subcat.php',
                    data:{index:$index},
                    success:function(response)
                    {
                      
                    console.log(response);
                    $ar = response.split(",");
                            $str = "";
                            for (var i = 0; i < $ar.length; i++)
                    {
                        $ss=$ar[i].split(':');
                    $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
                    }
                    $('#subcategory_select').html($str);
                    }
                    });
        });
                   </script>
     
   <div class="page-container">
   
			
																									
															
												
						<div class="sidebar-menu">
					<header class="logo">
                                            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="adminhome.php"> <img src="themes/images/log.png" width="30px">
                                            <font color = "cream" size="4"><b>Nearby stores</b></font></a>
					
				 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
                                                            <a href="adminhome.php"><img src="themes/images/qwe.png" width="100"></a>
                                                            <a href="adminhome.php"><span class=" name-caret">ADMIN</span></a>
									
									<ul>
									
                                                                            <li><a class="tooltips" href="signout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
                                                                            <li><a href="adminhome.php"><i class="fa fa-tachometer"></i> <span>Admin Home</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Block &amp; Unblock</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
                                                                                       <li id="menu-academico-avaliacoes" ><a href="blockseller.php">Block Seller</a></li>
                                                                                       <li id="menu-academico-boletim" ><a href="blockcustomer.php">Block Customer</a></li>
											<li id="menu-academico-avaliacoes" ><a href="unblockseller.php">Unblock Seller</a></li>
                                                                                       <li id="menu-academico-avaliacoes" ><a href="unblockcustomer.php">Unblock Customer</a></li>
											
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Add</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="addcountry.php">Country</a></li>
                                                                                             <li id="menu-academico-boletim" ><a href="addstate.php">State</a></li>
                                                                                             <li id="menu-academico-boletim" ><a href="adddistrict.php">District</a></li>
                                                                                             <li id="menu-academico-boletim" ><a href="addplace.php">Place</a></li>
                                                                                             <li id="menu-academico-boletim" ><a href="addcategory.php">Category</a></li>
                                                                                             <li id="menu-academico-boletim" ><a href="addsubcategory.php">Subcategory</a></li>
											  </ul>
										 </li>
									<li><a href="viewpdt.php"><i class="fa fa-table"></i> <span>View Products</span></a></li>
									
										
									  </ul>
								
								  
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
   
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
                                                        
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>

</html>
