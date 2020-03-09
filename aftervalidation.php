<? session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>homepage</title>
<link rel="stylesheet" href="style.css" type="text/css" >
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>welcome<?php echo "Mr". $_SESSION['username'] .".<br>";?>  </h1>
	
</body>
</html>