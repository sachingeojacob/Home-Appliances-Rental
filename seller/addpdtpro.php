<?php
include("../dbcon.php");

$sid=$_POST['sid'];
$name=$_POST['pname'];
$pcat=$_POST['cat'];
$rate=$_POST['qty'];
$dis=$_POST['cost'];
$cmp=$_POST['cmpname'];
$size=$_POST['size'];
$color=$_POST['color'];
$yom=$_POST['yom'];

$dea=$_POST['des'];
//$img=$_POST['img'];


if(isset($_POST['submit']))
{ 
$y=$_FILES['img']['name'];
$r=$_FILES['img']['tmp_name'];
move_uploaded_file($r,"../uploads/".$y);

$a=$_FILES['img1']['name'];
$q=$_FILES['img1']['tmp_name'];
move_uploaded_file($q,"../uploads/".$a);

$b=$_FILES['img2']['name'];
$w=$_FILES['img2']['tmp_name'];
move_uploaded_file($w,"../uploads/".$b);

$c=$_FILES['img3']['name'];
$t=$_FILES['img3']['tmp_name'];
move_uploaded_file($t,"../uploads/".$c);

} 


$insert1="insert into product values(NULL,$pcat,'$name','$dea',$rate,$dis,'$y',0,0,'$a','$b','$c',$sid,'$cmp','$size','$color','$yom')";
$res=mysqli_query($con,$insert1);

//$obj->exe($insert2);
?>
<script>
alert('Product Details Added');
window.location="addpdt.php";

</script>