<?php include('connection.php')?>
<?php
if(isset($_POST['add']))
{
   $product_name = $_POST['hidden_name'];
   $price = $_POST['hidden_price'];
    $quantity = $_POST['quantity'];
    $price = $quantity * $price;
     $product_check_query = "SELECT * FROM cart WHERE pname='$product_name' LIMIT 1";
  $result = mysqli_query($conn, $product_check_query);
  $repeat = mysqli_fetch_assoc($result);
  
  if ($repeat) { // if user exists
   
    ?><script>alert('already exits');</script><?php
    }
    else{
    $sql = "INSERT INTO cart (pname,quantity,price) VALUES ('$product_name','$quantity','$price')";
    mysqli_query($conn,$sql);
}}
?>


<!doctype html>
<html>
<head>
  <center>  <a href="shopping.php"><h1>BeMyPet.in</h1></a></center>

 <div class="btn-group btn-group-justified">
    <a  href="animal.php" class="btn btn-primary">Animals</a>
    <a href="food.php" class="btn btn-primary">Food</a>
    <a href="accessory.php" class="btn btn-primary">Accessory</a>
      <a style="background-color: black" href="Cart.php" class="btn btn-primary">Cart</a>
  </div>
  
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeMyPet.in</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');
        *{
            font-family: 'Titillium Web', sans-serif;
        }
 
body  {
  background-image: url("image/b3.png");
  background-color: #cccccc;
}
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
        h1{
            
            
            background-color:cornflowerblue;
            font-style: italic;
            color: azure;
            font-size: 50px;
        }
    </style>
</head>
<body>

    <div class="container" style="width: 65%">
        <h2>Pet Store</h2>
        <?php
            $query = "SELECT * FROM animals ORDER BY ani_name ASC ";
            $result = mysqli_query($conn,$query);
        $count=0;
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    
                    
                    ?>
                    <div class="col-md-3">

                        <form method="post" action="animal.php?action=add&id=<?php echo $row["aid"]; ?>">

                            <div class="product">
                                
                                <img src="<?php echo $row["ani_images"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["ani_name"]; ?></h5>
                               <h5 class="text-danger">Rs: <?php echo $row["aprice"]; ?></h5>
                                
                                Qty: <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["ani_name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["aprice"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div><br>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

    </div>    

</body>
</html>