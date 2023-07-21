<?php session_start();
 ?>
<?php include('connection.php'); ?>

<?php 
if(isset($_POST['change']))
{
    $pass=mysqli_real_escape_string($conn,$_POST['password']);
        
    $cpass=mysqli_real_escape_string($conn,$_POST['cpassword']);
    $usernm = mysqli_real_escape_string($conn,$_POST['user']);
    if($pass!=$cpass)
    {
         ?><script>alert('Password does not match');</script><?php
    }
    else{
        
        $sql="UPDATE users SET passwd='$pass' WHERE username='$usernm' ";
        mysqli_query($conn,$sql);
     ?><script>alert('Successfully Changed');</script><?php
         header('location: login.php');

    }
    
}

?>
<form method="post" action="change.php">
<div><label>Enter Username:</label>
    <input type="text" name="user"></div>
    <div><label>Change Password:</label>
<input type="password" name="password" ></div>
<div><label>Confirm Password:</label>
    <input type="password" name="cpassword"></div>
<input type="submit" name="change" value="CHANGE"></form>