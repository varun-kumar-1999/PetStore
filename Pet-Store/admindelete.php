<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body style="background-color:#464A52;">

<center>
<br><br><br><br>
<a href="anidelete.php"><button class="button"><span>Animals </span></button></a><br><br><br>
    <a href="fdelete.php"><button class="button"><span>Food </span></button></a><br><br><br>
    <a href="accdelete.php"><button class="button"><span>Accessory </span></button></a>
</center>
</body>
</html>
