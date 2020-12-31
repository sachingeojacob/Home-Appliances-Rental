<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Nearby stores</title>
                 <link rel="shortcut icon" href="themes/images/log.png" type="image/x-icon" /> 

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.sidepanel  {
    width: 0;
    position: fixed;
    z-index: 1;
    height: 1000px;
    top: 0;
    left: 0;
    background-color: #00ced1;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidepanel a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    display: block;
    transition: 0.3s;
}

.sidepanel a:hover {
    color: #f1f1f1;
}

.sidepanel .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
}

.openbtn {
    font-size: 20px;
    cursor: pointer;
    background-color: #111;
    color: white;
    padding: 10px 15px;
    border: none;
}

.openbtn:hover {
    background-color:#444;
}

  div.b {
    line-height: 1.6;
    font-family:  Comic Sans MS;
}
 

</style>
</head>
<body style="background-image: url(themes/images/uui.jpg);">

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">×</a>
  
  <a href="addpdt.php">Add Products</a>
  <a href="viewpdt.php">View Added Products</a>
   <a href="#">Products Booked</a>
    <a href="#">Products Cancelled</a>
     <a href="#">Products Paid</a>
      <a href="#">Products Sold</a>
       <a href="#">Purchases</a>
	   <a href="#">Change Password</a>
  <a href="">Edit Profile</a>
</div>

<button class="openbtn" onClick="openNav()">☰ Nearby Stores</button>  


<script>
function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}
</script>
<div style="background-color:black; opacity:0.8;width:900px;margin-left:350px;margin-top:200px;height: 250px;">
   <center><img src="themes/images/log.png" width="30">
       <font color = "white" size="6" ><b>NEARBY STORES</b></center><br></font>
       <div class="b" >     
 <font color = "white" size="4"> 
You can get your products at lowest cost from your nearest store.
Easily and securely, using credit/debit cards, net-banking or wallets.
nearbystores.com helps you discover the best home appliances – wherever 
you are! Make every day awesome with nearbystores.com Don't stop yet!.Based 
on your location and preference, our smart search engine will suggest new products with best offers. What's more,
with offers on everything around you... you are sure to try something new every time.</font></div>
</div>
</body>
</html> 
