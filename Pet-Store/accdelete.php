<?php include('connection.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
    body  {
  background-image: url("image/admdel.png");
  background-color: #cccccc;
}
    #cbtn{
        
        border-radius: 15px;
         padding: 15px;
        text-align: center;
        background-color: red;
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
color: white;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: blueviolet;
color: white;
}
tr:nth-child(even) {background-color: black}
</style>
</head>
<body>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Image url</th>
    <th>Price</th>
    <th>Delete</th>
</tr>
<?php
 session_start();
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['rm']))
{
    $hname=$_POST["hidden_name"];
    $rm="DELETE FROM accessory WHERE acname='$hname'";
    mysqli_query($conn,$rm);
$rpm="DELETE FROM product WHERE product_name='$hname'";
    mysqli_query($conn,$rpm);

}
    
  
$sql = "SELECT  * FROM accessory";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {

while($row = $result->fetch_assoc()) {
 ?><tr>
      
     <?php echo "<td>".$row["acid"]."</td><td>".$row["acname"]."</td><td>".$row["acimage"]."</td><td>Rs:".$row["acprice"]."</td>" ?>
  
       
          <td> <form method="post" action="accdelete.php?action=add&id=<?php echo $row["acid"]; ?>">
               <input type="hidden" name="hidden_name" value="<?php echo $row["acname"]; ?>">
                <input type="submit" id="cbtn" name="rm" value="Remove"></form></td></tr><?php
}

} 
?>
   
</table>
</body>
   
</html>