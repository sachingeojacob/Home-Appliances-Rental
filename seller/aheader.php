
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

 <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                          
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <b><i class="far fa-user"> &nbsp; Welcome <?php echo $_SESSION['username']; ?>  </i></b>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits" style="color:#000000"><b><i> </i></b></h3>
                                       
                                    </div>
                                </div>
                                
                                    <h4>
									 <br>
                                        <i class="fa fa-tasks mr-3"><style="color:#FF0099"> &nbsp; &nbsp; Account Settings <br></style></i></h4>
                               
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="changepass.php" style="color:#0000FF"><b><i> <br>Change Password</i></b></a>
								 <a class="dropdown-item" href="logout.php" style="color:#0000FF"><b><i>Logout</i></b></a>
                            </div>
                        </li>
                    </ul>
</body>
</html>
