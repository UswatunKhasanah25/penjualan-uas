<?php
    include 'koneksi.php';
    $data = mysqli_query($db,"SELECT * FROM barang WHERE kode='$_GET[kode]'");
    $barang = mysqli_fetch_array($data);

    if (isset($_POST['submit'])) {
        mysqli_query($db, "UPDATE barang SET
        nama='$_POST[nama]', 
        harga='$_POST[harga]' 
        WHERE kode='$_GET[kode]'");
        echo "update berhasil";
        header("Location: daftarBarang.php");
    }
    include 'master.php';
?>
<div class="container">
    <form action="" method="POST">
        <label for="Kode">Kode </label>
        <input type="text" name="kode" id="kode" value="<?php echo $barang['kode'];?>" disabled class="form-control">
        <label for="Kode">Nama Menu </label>
        <input type="text" name="nama" id="nama" value="<?php echo $barang['nama']; ?>" class="form-control">
        <label for="Kode">Harga</label>
        <input type="number" name="harga" id="harga" value="<?php echo $barang['harga']; ?>"
            class="form-control">
        <br>
        <input type="submit" value="submit" name="submit" class="btn btn-primary btn-lg btn-block">
    </form>
</div>
<?php
    include 'footer.php';
?>