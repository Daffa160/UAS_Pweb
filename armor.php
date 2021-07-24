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
    <table width="100%" cellspacing="0" border="1" align="center">
        <thead>
            <th>ID Penjual</th>
            <th>Nama Item</th>
            <th>Level</th>
            <th>Harga</th>
        </thead>
        <?php
          $ambilsemuadata = mysqli_query($conn, "select * from armor");
          while($data=mysqli_fetch_array($ambilsemuadata))
          {
            $idgame = $data['idgame'];
            $namabarang = $data['namabarang'];
            $level = $data['level'];
            $harga = $data['harga'];
            
        ?>
        <tr>
          <td align="center"><?=$idgame;?></td>
          <td align="center"><?=$namabarang;?></td>
          <td align="center"><?=$level;?></td>
          <td align="center"><?=$harga;?></td>
        </tr>
        <?php
          };
        ?>
        <tfoot>
            <th>ID Penjual</th>
            <th>Nama Item</th>
            <th>Level</th>
            <th>Harga</th>
        </tfoot>
    </table>
    <tbody>
    </tbody>
      
</body>
</html>