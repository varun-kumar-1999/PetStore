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
 

    
  
$sql = "SELECT  * FROM animals";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {

while($row = $result->fetch_assoc()) {
 ?><tr>
      
     <?php echo "<td>".$row["aid"]."</td><td>".$row["ani_name"]."</td><td>".$row["ani_images"]."</td><td>Rs:".$row["aprice"]."</td>" ?>
  
       
          <td> 
               <a href="aniupdate.php?id=<?php echo $row["aid"] ?>&an=<?php echo $row["ani_name"] ?>&ai=<?php echo $row["ani_images"] ?>&ap=<?php echo $row["aprice"] ?>"> <input type="submit" id="cbtn" name="rm"  value="Edit"></a></td></tr><?php
}

} 
?>
   
</table>
     <center><a href="adminupdate.php"><button id="cbtn">GO BACK</button></a></center>
</body>
   
</html>