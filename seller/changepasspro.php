<?php
session_start();
include("../dbcon.php");
//  function encryptIt($q){
//                 $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
//                 $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
//                 return( $qEncoded );
//             }

// $obj=new db();
$id=$_POST["id"];
$cpass=$_POST["cpwd"];

$npass=$_POST["npwd"];
$password = $cpass;
$sql="select * from login where  password='$cpass' and userid=$id";
$res=mysqli_query($con,$sql);
$no=mysqli_num_rows($res);
if($no==1)
{
	$sql1="update login set password='$npass' where userid=$id";
	mysqli_query($con,$sql1);
	
	?>	 <script>
		alert("password change successfully");
		window.location="index.php";
    </script>
	<?php }
else
{
	?>
    <script>
		alert("password not change try again");
		window.location="changepass.php";
    </script>
    <?php
}
?>