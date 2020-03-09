<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'usersrg');
$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from usertable where username='$name' && password='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1){
	
	$_SESSION['username']=$name;
	$_SESSION['info']=$s;
	header('location:home.php');
}else{
header('location:test.php');
}


?>