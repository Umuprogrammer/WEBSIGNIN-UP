<?php
$dbuser='root';
$dbpass='';

$dbname='webtest';
$db=new mysqli('localhost',$dbuser,$dbpass,$dbname) or die(mysql_error());
//mysql_connect("localhost","root","Umunyeshuri1") or die(mysql_error());
//mysql_select_db("webuser") or die("could not find db!");
 
$output='';


	

?>


<!doctype html> 
<html>
<head>
<meta charset="utf-8">
<title>inpalm</title>
<link href="css/inpalm.css" rel="stylesheet" type="text/css">
</head>
	<body>

<header>
	
	<a href="#" ><img src="img/icon.png" alt="logo" width="49" height="45" class="logo x_arrang" id="pic"><h1 class="x_arrang" id="nm">inpalm</h1></a>
	<nav>
		<ul class="nav_links">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact Us</a></li>
			
		</ul>
	</nav>
	
	
	</header>
		<form  action="index1.php"  method="GET">
			<input name="search" type="text" placeholder="search..."  >
			<input  type="submit" value="search" >
	    </form>
		<?php 
		$db;
		$query=mysqli_query($db,"select * from webuserss") ;
if($_GET['search']!=='')
	{
	
	
$s=$_GET['search']	;
$queryi =mysqli_query($db,"select * from webuserss where name like'%$s%'") or die(error_log());
$count=mysqli_num_rows($queryi) ;
print("$count");}
		while($row=mysqli_fetch_array($queryi))
				{
					$username=$row['id'];
					$pasword=$row['pasword'];
					$name=$row['name'];
					$items=$row['items'];
					$output .= '<div>'.$username.' '.$name.' '.$items.'</div>';
				print("$output");}
		
		?>
		<div>
			<form class="box" action="index.html" method="post">
				<h2>login</h2>
				<input type="text" name="" placeholder="username">
				<input type="password" name="" placeholder="password">
			  <input type="submit" name="" value="login">
			
			</form>
</div>

</body>
</html>
