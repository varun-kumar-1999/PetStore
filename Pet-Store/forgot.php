<?php session_start(); ?>
<?php include('connection.php');?>


<?php

if(isset($_POST['sub']))
                {
    
    
               $usn=mysqli_real_escape_string($conn,$_POST['usernm']);
               $email=mysqli_real_escape_string($conn,$_POST['mail']);
   
    $sql="SELECT * FROM users WHERE username='$usn' AND email='$email'";
                    $res=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($res)>0)
                    {
                        
                     header('location: change.php');

                     }
            
                }
?>

<form method="post" action="forgot.php" >
<div>username: <input type="text" name="usernm"></div><br>
<div>email:    <input type="email" name="mail"></div>
<div><input type="submit" name="sub" value="submit"></div>
    </form>