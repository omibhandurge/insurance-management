<?php
include 'connection.php';
$u=$_POST['username'];
$p=$_POST['passworld'];

$query="select * from admin where username='$u' and passworld='$p'";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)>0)
{
	header("location:index.php");
}

else{
	echo "invalid user/password";
}
?>