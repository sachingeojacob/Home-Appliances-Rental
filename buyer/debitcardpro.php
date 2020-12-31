<?php
 include("../dbcon.php");
 
$userid=$_POST["userid"];
$cardno=$_POST["cardno"];
$ctype=$_POST["ctype"];
$bank=$_POST["bank"];

$sql="insert into debit values(NULL,$userid,'$ctype','$bank',$cardno,1)";
$res1=mysqli_query($con,$sql);

?>
<script>
alert(' Debitcard Details Added ');
window.location="buyerhome.php";

</script>
						
						