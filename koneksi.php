<?php

    $hostname="localhost";
    $username="root";
    $password="";
    $database_name="data literasi kelas";

$koneksi = new mysqli($hostname, $username, $password, $database_name);

if($koneksi->connect_error) {
    echo "koneksi database rusak";
    die("erros!");
}
 


?>