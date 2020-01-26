<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Barang Masuk</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>ID Barang Masuk</th><th>Nama Kapal</th><th>Barang Masuk</th><th>Tanggal Masuk</th><th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_barangmasuk";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['id'] ?></td>
									<td><?= $data['nama_kapal'] ?></td>
									<td>
                                        1.&nbsp<?= $data['jenis_barang']  ?> &nbsp (<?=  $data['jlh_barang']  ?>) <br> 
                                        2.&nbsp<?= $data['jenis_barang2'] ?> &nbsp (<?=  $data['jlh_barang2'] ?>) <br>
                                        3.&nbsp<?= $data['jenis_barang3'] ?> &nbsp (<?=  $data['jlh_barang3'] ?>) <br>
                                        4.&nbsp<?= $data['jenis_barang4'] ?> &nbsp (<?=  $data['jlh_barang4'] ?>) <br>
                                        5.&nbsp<?= $data['jenis_barang5'] ?> &nbsp (<?=  $data['jlh_barang5'] ?>) <br>
                                        -------------------------------<br>
                                        <label>Barang Mengganggu</label> <br>
                                        1.&nbsp<?= $data['barang_mengganggu']  ?> &nbsp (<?=  $data['jmlh_barangmengganggu']  ?>) <br> 
                                        2.&nbsp<?= $data['barang_mengganggu2'] ?> &nbsp (<?=  $data['jmlh_barangmengganggu2'] ?>) <br>
                                    </td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                    <td>
                                        <a href="?page=barang&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=barang&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=barang&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

