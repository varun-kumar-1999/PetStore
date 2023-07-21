
<?php include('server.php')  ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background-image: url(image/home.png);
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: 	#f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: 	#FF6347;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="home.php">BeMyPet.in</a>
  <a href="login.php">Login</a>
  <a href="registration.php">Register</a>
  <a href="admin.php">Admin Login</a>
</div>


  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="lstyle.css">
</head>
<body>
    <div class="loginbox">
    <img src="image/avatar.png" class="avatar">
  
  	<h2>Login</h2>
  
	 
  <form method="post" action="login.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<input type="submit"  name="login_user" value="Login">
  	</div>
  	<p>
  		Not yet a member? <a href="registration.php">Sign up</a>
  	</p>
    
  </form>
    </div>
        </body>
</html>
