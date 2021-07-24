<?php

//koneksi ke database
$conn = mysqli_connect("localhost","root","","UAS");


if(isset($_POST['jual']))
{
    $idgame = $_POST['idgame'];
    $namabarang = $_POST['namabarang'];
    $level = $_POST['level'];
    $harga = $_POST['harga'];

    $addtotable = mysqli_query($conn, "insert into game (idgame, namabarang, level, harga) values('$idgame','$namabarang','$level','$harga')");
    
};

?>
