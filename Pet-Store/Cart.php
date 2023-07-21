<?php include('connection.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
    body  {
  background-image: url("image/b1.png");
  background-color: #cccccc;
}
    #cbtn{
        width: 100px;
  height: 40px; 
        border-radius: 15px;
         padding: 15px;
        text-align: center;
        background-color: #87CEFA;
        color: azure;
        border:none;
        display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
    }
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Item Name</th>
<th>Quantity</th>
<th>price</th>
    <th>Alter</th>
</tr>
<?php
 session_start();
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['rm']))
{
    $hid=$_POST["hidden_cid"];
    $rm="DELETE FROM cart WHERE cid='$hid'";
    mysqli_query($conn,$rm);
}
    
  
$sql = "SELECT  * FROM cart";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
 ?><tr>
      
     <?php echo "<td>".$row["pname"]."</td><td>".$row["quantity"]."</td><td>Rs:".$row["price"]."</td>" ?>
  
       
          <td> <form method="post" action="Cart.php?action=add&id=<?php echo $row["cid"]; ?>">
               <input type="hidden" name="hidden_cid" value="<?php echo $row["cid"]; ?>">
                <input type="submit" name="rm" value="Remove"></form></td></tr><?php
}

} 
?>
   
</table>
</body>
   <center><br><br><br><br> <a href="Checkout.php"><button id="cbtn">Checkout</button></a> </center>
</html>