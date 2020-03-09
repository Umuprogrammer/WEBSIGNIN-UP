<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<div class="container">
		<div class="row">
			
		    	<div class="col-md-6 login-box">
					<h2>login form</h2>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label>Usename</label>
							<input type="text" name="user" class="form-control" required>
						</div>
				    	<div class="form-group">
						<label>password</label>
						<input type="password" name="password" class="form-control" required>
						</div>
				    	<button type="submit" class="btn btn-primary">login</button>
					</form>
			
				
			</div>
		
		<div class="col-md-6 signin-box">
				<h2>Registration form</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>first name</label>
						<input type="text" name="fname" class="form-control" required>
					</div>
					<div class="form-group">
						<label>last name</label>
						<input type="text" name="lname" class="form-control" required>
					</div>
				    <div class="form-group">
						<label>gender</label>
						<div class="col-md-6">
							<label>male</label>
							<input type="radio" name="gender" value="male"  required>
						</div>
						<div class="col-md-6">
							<label>female</label>
							<input type="radio" name="gender" value="female" required >
						</div>
					</div>
					<div class="form-group">
						<label>birthday</label>
						<input type="date" name="bd" class="form-control" required>
					</div>
					<div class="form-group">
						<label>nationality</label>
						<input type="text" name="nationality" class="form-control" required>
					</div>
					<div class="form-group">
						<label>residence</label>
						<input type="text" name="residence" class="form-control" required>
					</div>
					<div class="form-group">
						<label>address</label>
						<input type="text" name="address" class="form-control" required>
					</div>
					<div class="form-group">
						<label>E-mail</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>phone-number</label>
						<input type="tel" name="phone" class="form-control" required>
					</div>
					
					
					<br>
					<br>
					
					<div class="form-group">
						<label>set a username</label>
						<input type="text" name="usern" class="form-control" required>
					</div>
					<div class="form-group">
						<label>set a password</label>
						<input type="password" name="pwd" class="form-control" required>
					</div>
					<div class="form-group">
						<label>retype password</label>
						<input type="password" name="repwd" class="form-control" required>
					</div>
				    <button type="submit" class="btn btn-primary">create</button>
				</form>
			</div> 
			</div>
		
		</div>
		
		
		
	</div>
	
	
	
	
	
</body>
</html>