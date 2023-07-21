<?php include('home.php') ?>

<?php include('server.php')  ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>



  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="lstyle.css">
</head>
<body>
    <div class="loginbox">
    <img src="image/adminlogo.png" class="avatar">
  
  	<h2>ADMINISTRATOR</h2>
  
	 
  <form method="post" action="admin.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="adname" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="adpassword">
  	</div>
  	<div class="input-group">
  		<input type="submit"  name="login_admin" value="Login">
  	</div>
  	
  </form>
    </div>
        </body>
    <style>
        .loginbox{
    width: 320px;
    height: 420px;
    background: 	#008080;
    color: #fff;
    top: 50%;
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
    background: 	#FF7F50;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
   </style>
</html>
