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

    <link href="themes/css/bootstrappage.css" rel="stylesheet" />

    <!-- global styles -->
    <link href="themes/css/flexslider.css" rel="stylesheet" />
    <link href="themes/css/main.css" rel="stylesheet" />

    <!-- scripts -->
    <script src="themes/js/jquery-1.7.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/js/superfish.js"></script>
    <script src="themes/js/jquery.scrolltotop.js"></script>

</head>

<body style="background-image:url(themes/images/iiii.jpg);background-size:cover;">
    <div id="top-bar" class="container">
        <div class="row">
            <div class="span4">

            </div>
            <div class="span8">
                <div class="account pull-right">
                    <ul class="user-menu">
                        <li><a href="cusregister.php">Are You Looking for Something?</a></li>
                        <li><a href="register.php">Are You a Seller?</a></li>
                        <li><a href="login.php">Already have an Account?</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper" class="container">
        <section class="navbar main-menu">
            <div class="navbar-inner main-menu">
                <a href="#" class="logo pull-left"><img src="themes/images/log.png" width="30px">
                    <font color="black" size="4"><b>Buddy Rents</b></font>
                </a>
                <nav id="" class="pull-right">

                </nav>
            </div>
        </section>
        <section class="homepage-slider" id="home-slider">
            <div class="flexslider">
                <ul class="slides">

                    <li>
                        <img src="themes/images/carousel/homee.jpg" width="300" height="960" alt="" />

                        <div class="intro">
                            <h1>LET'S FIND THE RIGHT ONE</h1>
                            <p><span>At The Best Price</span></p>
                            <p><span>Only on Nearby Stores</span></p>
                        </div>
                    </li>
                    <li>
                        <img src="themes/images/carousel/home2.jpg" alt="" />
                        <div class="intro">
                            <h1>LET'S FIND THE RIGHT ONE</h1>
                            <p><span>At The Best Price</span></p>
                            <p><span>Only on Nearby Stores</span></p>
                        </div>
                    </li>
                    <li>
                        <img src="themes/images/carousel/ui.jpg" alt="" />
                        <div class="intro">
                            <h1>LET'S FIND THE RIGHT ONE</h1>
                            <p><span>At The Best Price</span></p>
                            <p><span>Only on Nearby Stores</span></p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="main-content">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span12">
                            <h4 class="title">
                                <?php
								  include("dbcon.php");
//$qry="select * from login,role where login.role_id=role.role_id";
      $qry="select * from product where status=1 and status1=1";
$result=mysqli_query($con,$qry);

?>
                                <span class="pull-left"><span class="text"><span class="line">Feature
                                            <strong>Products</strong></span></span></span>
                                <span class="pull-right">
                                    <a class="left button" href="#myCarousel" data-slide="prev"></a><a
                                        class="right button" href="#myCarousel" data-slide="next"></a>
                                </span>
                            </h4>

                            <div id="myCarousel" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            <?php
while($row=mysqli_fetch_array($result)){
?>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><a href="product_detail.php?id=<?php echo $row[0];?>"><img
                                                                src="uploads/<?php echo $row[6];?>" alt="" /></a></p>
                                                    <a href="product_detail.php?id=<?php echo $row[0];?>"
                                                        class="title"><?php echo $row[2];?></a><br />

                                                    <p class="price">Rs.<?php echo $row[5];?></p>
                                                    <a href="product_detail.php?id=<?php echo $row[0];?>"
                                                        class="category">View More</a>
                                                </div>
                                            </li>
                                            <?php
}
?>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <br />


                    <div class="row">
                        <div class="span12">
                            <h4 class="title">
                                <span class="pull-left"><span class="text"><span class="line">FIND <strong>YOUR NEARBY
                                                STORES</strong></span></span></span>
                                <!--<span class="pull-right">-->
                                <!--<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>-->
                                <!--</span>-->
                            </h4>
                            <div id="myCarousel-2" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            <li class="span12">
                                                <div class="">
                                                    <span class="sale_tag"></span>

                                                    <?php
																												include("googlemapping/newmap.php");
																												?>
                                                    <!--														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$25.50</p>-->
                                                </div>
                                            </li>

                                        </ul>
                                    </div>









                                </div>
                            </div>
                        </div>
                    </div>




                    <br />

                    <div class="row">
                        <div class="span12">
                            <h4 class="title">
                                <span class="pull-left"><span class="text"><span class="line">PURCHASE <strong>YOUR HOME
                                                APPLIANCES</strong></span></span></span>
                                <!--<span class="pull-right">-->
                                <!--<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>-->
                                <!--</span>-->
                            </h4>
                            <div id="myCarousel-2" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            <li class="span12">
                                                <div class="">
                                                    <span class="sale_tag"></span>
                                                    <a href="#"><img src="themes/images/cloth/kp.png" alt="" /></a>
                                                    <!--														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$25.50</p>-->
                                                </div>
                                            </li>

                                        </ul>
                                    </div>









                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="span12">
                            <h4 class="title">
                                <span class="pull-left"><span class="text"><span class="line">Featured
                                            <strong>Categories</strong></span></span></span>
                                <span class="pull-right">
                                    <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a
                                        class="right button" href="#myCarousel-2" data-slide="next"></a>
                                </span>
                            </h4>

                            <div id="myCarousel-2" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">

                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><img src="uploads/cattv.jpg" alt="" /></p><br>
                                                    <h4 style="color:#000000">TELEVISIONS</h4><br />


                                                </div>
                                            </li>


                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><img src="uploads/catf.jpg" alt="" /></p>
                                                    <br>
                                                    <h4 style="color:#000000">FRIDGES</h4><br />


                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><img src="uploads/catac.jpg" alt="" /></p>
                                                    <br>
                                                    <h4 style="color:#000000">AIR CONDITIONERS</h4><br />


                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><img src="uploads/catw.jpg" alt="" /></p>
                                                    <br>
                                                    <h4 style="color:#000000">
                                                        WASHING MACHINES</h4><br />


                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
        <section class="our_client">
            <h4 class="title"><span class="text">Manufactures</span></h4>
            <div class="row">
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/lll.jpg"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/sam.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/whirl.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/gooo.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/haier.gif"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/sony.jpg"></a>
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
                    <p class="logo"><img src="themes/images/log.png" width="30" alt="">
                        <font color="white" size="2">Nearby stores</font>
                    </p>
                    <p>You can get your products at lowest cost from your nearest store</p>
                    <br />

                </div>
            </div>
        </section>
        <section id="copyright">
            <span>Copyright spotive All right reserved.</span>
        </section>
    </div>
    <script src="themes/js/common.js"></script>
    <script src="themes/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
    $(function() {
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 4000,
                animationSpeed: 600,
                controlNav: false,
                directionNav: true,
                controlsContainer: ".flex-container" // the container that holds the flexslider
            });
        });
    });
    </script>
</body>

</html>