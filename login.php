<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

	<div class="kotak_login">
		<p class="tulisan_login">LOGIN</p>

		<form method="POST" action="">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username">

			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login"  value="Sign In">

		<div class="form-group">
      	<div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      	</div>
    	</div>

			<br/>
			<br/>
			<center>
				<a href="myfootwear.html" class="badge badge-primary">Back</a> <br>
				<a class="dropdown-item" href="regis.html">Sign up</a><br>
  				<a class="dropdown-item" href="#">Forgot password?</a>
			</center>
		</form>
		
	</div>


</body>
</html>