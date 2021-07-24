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
<body>
<h1>Gaming Shop</h1>
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
    <a href="login.php" style="float: right;">Logout</i></a>
    
</div>      
    <br><br>
    <div class="kartu">
        <form method="post">
            <table align="center">
                <br>
                <tr>
                    <td>ID Game </td>
                    <td>:
                        <input type="text" name="idgame" placeholder="ex: Xxxx#2020" require>
                    </td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>: 
                    <input type="text" name="namabarang" require>
                    </td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>: 
                    <input type="text" name="level" require>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>: 
                    <input type="text" name="harga" require>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="jual" >Jual</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>