<?php
    include 'koneksi.php';
    $listBarang = mysqli_query($db,"SELECT * FROM barang" );
    include 'master.php';
?>
    <div class="container">
    <div class="row">
        <div class="col-lg-10">
            <center><h1 class="greet">Daftar Menu</h1>
        </div>
        <div class="col-lg-5">
            <a href="tambahBarang.php"><button type="button" class="btn btn-primary btn-lg">Tambah Barang</button></a>
        <br><br>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <table class="table table-dark">
        <tr>
            <th>Kode </th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
            foreach ($listBarang as $barang) {
                echo "
                    <tr>
                        <td>$barang[kode]</td>
                        <td>$barang[nama]</td>
                        <td>$barang[harga]</td>
                        <td>
                            <a href=\"editBarang.php?kode=$barang[kode]\">Edit</a> |
                            <a href=\"hapusBarang.php?kode=$barang[kode]\">Hapus</a> 
                        </td>
                    </tr>
                ";
            }
        ?>
    </table>
    </div>
    </div>
    </div>
<?php
    include 'footer.php';
?>