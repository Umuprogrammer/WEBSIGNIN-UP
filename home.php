
		<?php
	session_start();
if(!isset($_SESSION["username"]))
{
	header('location:test.php');
}
	
		?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title><?php
	
	
		echo $_SESSION["username"]." home";
		
		
		
		?></title>

</head>

<body>
<a href="test.php">LOGOUT</a>
	<p>
		<?php
	
	
		echo"<h1>".$_SESSION["username"]." you are in</h1>";
		
		
		
		?>
		</p>
</body>
</html>