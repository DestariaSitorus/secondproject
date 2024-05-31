<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form - Login</title>
	<link rel="stylesheet" href="logins.css">
</head>
<body>

	<div class="box_login">
	<form action="ceklogin.php" method="POST">
		<p class="tulisan_login">LOGIN</p>
 
            <br>
			<label>Username</label>
			<input type="text" name="username" class="form_login">
            <br>
            <br>
			<label>Password</label>
			<input type="Password" name="Password" value="" class="form_login">
            <br>
            <br>
			<input type="submit" name="submit" class="tombol_login" value="LOGIN">
			<br>
			<br>
			<center>
			<div class="">Don't have an account? <a href="register.php">Sign up</a> </div>
            </center>
			
			
</form>
	</div>

</body>
</html>