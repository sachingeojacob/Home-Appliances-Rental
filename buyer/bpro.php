<?php
 include("../dbcon.php");
 
$userid=$_POST["userid"];
$cardno=$_POST["cardno"];

$price=$_POST["price"];
$pid=$_POST["pid"];
$qty=$_POST["qty"];
$wid=$_POST["wid"];
$date=$_POST["date"];
$fdate=$_POST["fdate"];
$tdate=$_POST["tdate"];

function dateDiffInDays($fdate, $tdate)  
{ 
    $diff = strtotime($tdate) - strtotime($fdate); 
      
   
    return abs(round($diff / 86400)); 
} 
  

  
$dateDiff = dateDiffInDays($fdate, $tdate); 
  
$up=$price*$dateDiff;

$select5="select quantity from product where product_id='$pid'";
$res5=mysqli_query($con,$select5);
$row5=mysqli_fetch_array($res5);
$bb=$row5[0];

//echo $b;
$nqty=($bb-$qty);

//$select="select cardno from debit where userid='$userid'";
//$res=mysqli_query($con,$select);
//$rwh=mysqli_fetch_array($res);

						//if(($rwh['0']='$cardno') && ($rwh['1']='$cvv'))
						//{
              $newPrice = ($price * $qty) * $dateDiff;
						$sql="insert into booking values(NULL,'$date',$pid,$userid,$qty,$newPrice,0,'$fdate','$tdate')";
$res1=mysqli_query($con,$sql);
$sql3 = "SELECT seller_id FROM product where product_id='$pid';";
$results = mysqli_query($con, $sql3);
$row = mysqli_fetch_assoc($results);
$seller_id = $row['seller_id'];
// $sql2 = "INSERT INTO receipt(date,userid,product_id,seller_id,quantity,price,fdate, tdate) VALUES('$date','$userid','$pid','$seller_id','$qty','$newPrice','$fdate','$tdate');";
// mysqli_query($con, $sql2);
$update="update stock set quantity=$nqty where product_id='$pid'";
$resu=mysqli_query($con,$update);
$update1="update product set quantity=$nqty where product_id='$pid'";
$resu1=mysqli_query($con,$update1);
$update2="update wishlist set status=0 where wid='$wid'";
$resu2=mysqli_query($con,$update2);

?>
<script>
alert(' Successfull!! Your Receipt Will Generate Soon ');
window.location="buyerhome.php";

</script>
						
								
							
								
