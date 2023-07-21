
<?php include('connection.php')?>
<?php
session_start();
$username="";
$email="";

// initializing variables

$errors = array(); 
$conn=mysqli_connect('localhost','root','','petstore');

// connect to the database

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn,$_POST['password_2']);
    $num=mysqli_real_escape_string($conn,$_POST['num']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if(empty($username)) { array_push($errors, "Username is required"); }
  if(empty($email)) { array_push($errors, "Email is required"); }
  if(empty($password_1)) { array_push($errors, "Password is required"); }
  if(empty($num)) { array_push($errors, "Phone Number is is required"); }

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//encrypt the password before saving in the database
  	
     $query = "INSERT INTO users (username,email,passwd,phone) 
     VALUES ('$username', '$email', '$password_1', '$num')";
  	mysqli_query($conn, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: shopping.php');
      
  }
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password_1)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	
  	$query = "SELECT * FROM users WHERE username='$username' AND passwd='$password_1' limit 1";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: shopping.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
if (isset($_POST['login_admin'])) {
  $adname = mysqli_real_escape_string($conn, $_POST['adname']);
  $adpassword_1 = mysqli_real_escape_string($conn, $_POST['adpassword']);

  if (empty($adname)) {
  	array_push($errors, "Username is required");
  }
  if (empty($adpassword_1)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	
  	$adquery = "SELECT * FROM admin WHERE adminname='$adname' AND apassword='$adpassword_1' limit 1";
  	$adres = mysqli_query($conn, $adquery);
  	if (mysqli_num_rows($adres) == 1) {
  	  
  	  header('location: adminoptions.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>