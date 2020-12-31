<?php
 include("../dbcon.php");
 
$sid=$_POST["sid"];
$bid=$_POST["bid"];
$pid=$_POST["pid"];
$userid=$_POST["userid"];
$qty=$_POST["qty"];
$price=$_POST["price"];
$cmp=$_POST["cmpname"];
$size=$_POST["size"];
$color=$_POST["color"];
$date=$_POST["date"];
$fdate=$_POST["fdate"];
$tdate=$_POST["tdate"];

$sql="insert into receipt values(NULL,'$date','$userid','$pid','$sid','$qty','$cmp','$size','$color','$price','$fdate','$tdate','Lend')";
$res=mysqli_query($con,$sql);
$sql1="update booking set status=1 where book_id='$bid'";
$res1=mysqli_query($con,$sql1);

 
?>
<script>
alert(' Successfully Generated Receipt ');
window.location="viewbook.php";

</script>