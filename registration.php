<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'usersrg');
$name=$_POST['usern'];
$pass=$_POST['pwd'];

$s="select username, password from usertable where username='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num >= 1){
	echo"username already taken";
}else{$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$bd=$_POST['bd'];
$nationality=$_POST['nationality'];
$residence=$_POST['residence'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$usern=$_POST['usern'];
$pwd=$_POST['pwd'];
	
	
	
	
	$reg="insert into usertable value('$fname','$lname','$gender','$bd','$nationality','$residence','$address','$email','$phone','$usern','$pwd')";
	mysqli_query($con,$reg);
	  
	  $_SESSION['username']=$usern;
	  header('location:home.php');
	echo"Registration successfull";
}


?>
			 