<?php
include("koneksi.php");
$sql = mysqli_query ($db,"DELETE FROM barang WHERE kode='$_GET[kode]'");
header("Location: daftarBarang.php");
?>
