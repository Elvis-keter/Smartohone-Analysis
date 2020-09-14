<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	
	<?php
		if(@$_GET['Empty']==true) 
		{
	?>
		<div class="alert-light text-danger text-center"><?php echo $_GET['Empty'] ?></div>
	<?php
		}
	?>

	<?php
		if(@$_GET['Invalid']==true) 
		{
	?>
		<div class="alert-light text-danger text-center"><?php echo $_GET['Invalid'] ?></div>
	<?php
		}
	?>

	<div class="input-group">
		<form action="access.php" method="POST">
			<p>
				<label>Username</label>
				<input type="text" name="username"   />
			</p>
			<p>
				<label>Password</label>
				<input type="Password" name="password"   />
			</p>
			<p>
				<button type="submit" name="Login" class="btn">Login</button>
			</p>
		</form>
	</div>
		

</body>
</html>