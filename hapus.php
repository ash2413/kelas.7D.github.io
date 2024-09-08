<?php
    include "koneksi.php";

    $kode = $_GET['kode'];

    $hapus = mysqli_query($koneksi, "DELETE FROM `akun` WHERE username ='$kode'");

    if($hapus) {
        header("location: data akun.php");
    }else{
        echo "Data gaga di hapus";
    }

?>