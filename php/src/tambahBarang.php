<?php
    include 'koneksi.php';
    if (isset($_POST['submit'])){
            $users	= mysqli_query($db,"INSERT INTO barang(kode,nama,harga) values ('$_POST[kode]','$_POST[nama]','$_POST[harga]')");
            echo "berhasil";
            header("Location: daftarBarang.php");
    }
    include 'master.php';
?>
<div class="container">
<form action="" method="post">
    <label for="Kode">Kode </label>
    <input type="text" name="kode" id="kode" class="form-control">
    <br>
    <label for="nama">Nama Menu</label>
    <input type="text" name="nama" id="nama" class="form-control">
    <br>
    <label for="hargaJual">Harga </label>
    <input type="number" name="harga" id="harga" class="form-control">
    <br>
    <input type="submit" value="submit" name="submit" class="btn btn-primary btn-lg btn-block">
    <br>
</form>
<?php
    include 'footer.php';
?>