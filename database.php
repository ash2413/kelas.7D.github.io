<?php

    $hostname="localhost";
    $Username="root";
    $Password="";
    $database_name="data literasi kelas";

$db = mysqli_connect($hostname, $Username, $Password, $database_name);

if($db->connect_error) {
    echo "koneksi database rusak";
    die("erros!");
}

?>