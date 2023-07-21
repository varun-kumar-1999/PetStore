<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<style>
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
<body >

<center>
<div>
  <form method="post" action="admininsert.php">
    <label >NAME</label>
    <input type="text" id="fname" name="name" placeholder="Enter a Name">

    <label >IMAGE URL</label>
    <input type="text" id="fname" name="image" placeholder="Url of image">
<label >PRICE</label>
    <input type="number" id="fname" name="price" placeholder="Price of the item">
<label for="country">Category</label>
    <select id="category" name="category">
      <option value="animal">Animal</option>
      <option value="food">Food</option>
      <option value="accessory">Accessory</option>
    </select>
  <input type="submit" name="submit" value="Submit">
  </form>
</div></center>
</body>
</html>

<?php 

$errors = array(); 
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $image = mysqli_real_escape_string($conn,$_POST['image']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);
  
    $category=mysqli_real_escape_string($conn,$_POST['category']);

  if(empty($name)) { array_push($errors, "Enter the name"); }
  if(empty($image)) { array_push($errors, "Enter image url"); }
  if(empty($price)) { array_push($errors, "Enter price"); }
  if(empty($category)) { array_push($errors, "select category"); }
  
    
if(count($errors)==0){
 if($category == "animal")
 {  
     $a="INSERT INTO animals (ani_name,ani_images,aprice) VALUES ('$name','$image','$price')";
                        $res=mysqli_query($conn,$a);
        if(!empty($res)){echo "inserted successfully";}
                         }
    
 if($category == "food")
 {  
     $c="INSERT INTO food (fname,fimage,fprice) VALUES ('$name','$image','$price')";
                        $res=mysqli_query($conn,$c);
        if(!empty($res)){echo "inserted successfully";}
                         }
    
 if($category == "accessory")
 {  
     $b="INSERT INTO accessory (acname,acimage,acprice) VALUES ('$name','$image','$price')";
                        $res=mysqli_query($conn,$b);
        if(!empty($res)){echo "inserted successfully";}
                         }
}
    
}
?>
<?php include('error.php'); ?>
