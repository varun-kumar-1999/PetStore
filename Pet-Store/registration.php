<?php include('home.php') ?>
<?php include('connection.php')?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="lstyle.css">
</head>
<body>
   <br><br><br><br>
    
    
    <div class="loginbox">
    <img src="image/registration.png" class="avatar">
        <h1>Register</h1>
  	<form method="post" action="registration.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
      	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="number" name="num">
  	</div>
    
  	<div class="input-group">
  	  <input type="submit" class="btn" name="reg_user" value="Register">
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
 
    </form>
        </div>
</body>
    <style>
    .loginbox{
    width: 350px;
    height: 620px;
    background: 	#4B0082;
    color: #fff;
    top: 55%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
    .loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: 	#7FFF00;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}</style>
</html>