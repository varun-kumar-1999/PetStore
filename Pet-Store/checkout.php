<style>
    body  {
  background-image: url("image/b2.png");
  background-color: #cccccc;
}
    h1{
        font-style: italic;
        background-color: aliceblue;
        color: chartreuse;
      font-size: 50px;
        text-align-last:center;
    }
    input{
          width: 100px;
  height: 40px; 
        border-radius: 15px;
         padding: 15px;
        text-align: center;
        background-color:darkgreen;
        color: azure;
        border:none;
        display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
    }
</style>
<?php include('connection.php'); ?>
<?php
$sql="SELECT price FROM cart";
$res=mysqli_query($conn,$sql);
  if(mysqli_num_rows($res) > 0) {
      $total=0;
                while ($row = mysqli_fetch_array($res))
                {
                    $total=$total+$row['price'];
                   
                    

                }
        }
 echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1>Your total bill is Rs: ".$total."</h1>";
if(isset($_POST['goback']))
{
   
    $gb="DELETE FROM cart";
    mysqli_query($conn,$gb);
    
    	  header('location: shopping.php');
}
?>
<form method="post" action="checkout.php">
<input type="submit" name="goback" value="Go Back"></form>