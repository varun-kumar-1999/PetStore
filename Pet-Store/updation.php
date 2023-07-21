<?php include('connection.php') ?>
<?php

if(isset($_GET['asubmit']))
{
    $hid=mysqli_real_escape_string($conn,$_GET['hid']);
    $uname=mysqli_real_escape_string($conn,$_GET['name']);
$uimage=mysqli_real_escape_string($conn,$_GET['image']);
$uprice=mysqli_real_escape_string($conn,$_GET['price']);
    
    $sql="UPDATE animals SET ani_name='$uname', ani_images='$uimage', aprice='$uprice' WHERE aid='$hid'";
        $res=mysqli_query($conn,$sql);
    if(isset($res)){
        $ss=1;
        ?><script>alert('updated successfully');</script><?php
          
        
    }
    if(isset($ss)){header('location: aniview.php' );}
                   
}
if(isset($_GET['fsubmit']))
{
    $hid=mysqli_real_escape_string($conn,$_GET['fhid']);
    $uname=mysqli_real_escape_string($conn,$_GET['fname']);
$uimage=mysqli_real_escape_string($conn,$_GET['fimage']);
$uprice=mysqli_real_escape_string($conn,$_GET['fprice']);
    
    $sql="UPDATE food SET fname='$uname', fimage='$uimage', fprice='$uprice' WHERE fid='$hid'";
        $res=mysqli_query($conn,$sql);
    if(isset($res)){
        $ss=1;
        ?><script>alert('updated successfully');</script><?php
          
        
    }
    if(isset($ss)){header('location: fview.php' );}
                   
}
if(isset($_GET['acsubmit']))
{
    $hid=mysqli_real_escape_string($conn,$_GET['ahid']);
    $uname=mysqli_real_escape_string($conn,$_GET['aname']);
$uimage=mysqli_real_escape_string($conn,$_GET['aimage']);
$uprice=mysqli_real_escape_string($conn,$_GET['aprice']);
    
    $sql="UPDATE accessory SET acname='$uname', acimage='$uimage', acprice='$uprice' WHERE acid='$hid'";
        $res=mysqli_query($conn,$sql);
    if(isset($res)){
        $ss=1;
        ?><script>alert('updated successfully');</script><?php
          
        
    }
    if(isset($ss)){header('location: acview.php' );}
                   
}
?>