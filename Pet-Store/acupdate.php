<?php 


include('connection.php');




?>
<!DOCTYPE html>
<html>
<style>
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
input[type=text], select, input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
    width: 500px;
  
        
  background-color: #E6E6FA;
  padding: 20px;
}
</style>
<body style=" background-image: url(image/b4.png); background-color: #cccccc;
        background-size: cover" >

<center>
<div>
  <form action="updation.php" method="get">
      <input type="hidden"  name="ahid" value="<?php echo $_GET['id'] ?>">
      
      <label >NAME</label>
    <input type="text" id="fname" name="aname" value="<?php echo $_GET['an'] ?>">
    
    <label >IMAGE URL</label>
    <input type="text" id="fname" name="aimage" value="<?php echo $_GET['ai']?>">
<label >PRICE</label>
    <input type="number" id="fname" name="aprice" value="<?php echo $_GET['ap'] ?>">
 <input type="submit" name="acsubmit" value="Submit" />
  </form>
</div></center> <center><a href="acview.php"><button id="cbtn">GO BACK</button></a></center>
</body>
</html>

<?php include('connection.php') ?>
<?php

?>
