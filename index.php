<?php
  require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gaming Shop</title>
</head>
<body background="https://pbs.twimg.com/media/EL3RUttXsAA_pFA.jpg">
<div class="navbar">
    <a href="index.php">Home Page</a>
    <div class="dropdown" >
      <button class="dropbtn" >Beli
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="material.php">Material</a>
        <a href="weapon.php">Weapon</a>
        <a href="armor.php">Armor</a>
      </div>
    </div>
    <a href="jual.php">Jual Item</a>
    <a href="#logout" style="float: right;">Logout</i></a>
    
</div>     
    <br><br>
    <center>
      <h1 style="color: white;">Welcom to Gaming Shop</h1>
      <hr style="margin:auto;width:40%">
      <p style="color: white;">Buy Anything Or Sell Item You Want</p>
      <p style="color: white;">With a High Price Or Lower Price</p>
      <p style="color: white;">Whatever you are looking for will be found in the Gaming Shop</p>
    </center>
</body>
</html>
