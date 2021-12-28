<?php 
    $server = "10.0.0.81";
    $user = "admin";
    $password = "Admin123_";
    $nama_database = "penjualan";

    $db = mysqli_connect ($server, $user, $password, $nama_database);

    
    if( !$db ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
?>