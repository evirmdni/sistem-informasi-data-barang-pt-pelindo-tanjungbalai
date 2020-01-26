<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Barang Masuk</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
            
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--dalam tabel-->
                    <div class="">
                        <table>
                        <tr>
                        <td width="17%"></td>
                        <td colspan=""><img src="../img/images.png" width="200px" height="150px"></td>
                        <td width=""><center><h2>PT. Pelabuhan Indonesia I (Persero)<br>
                        Cabang Tanjung Balai Asahan</h2>
                        Jl. Pelabuhan Teluk Nibung, Kota Tanjung Balai, Sumatra Utara - Indonesia 21352 <br>
                        Telepon : (0623) 92038 || Email : pelindo1persero@example.com</center>
                        </td>
                        </tr>
                        </table>
                        
                        <hr>
                        <b><center><h4><u>Laporan Data Barang Masuk</u></h4></center></b><br>
                        <table class="table table-bordered table-striped"> 
                        <tbody>
                                <thead>
								<tr>
									<th width="1%"><center>No.</center></th>
                                    <th width="8%"><center>ID Barang Masuk</center></th>
                                    <th width="10%"><center>Nama Kapal</center></th>
                                    <th width="10%"><center>Jenis Barang</center></th>
                                    <th width="10%"><center>Tanggal Masuk</center></th>
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
                                    <td><center><?= $nomor ?></center></td>
									<td><center><?= $data['id'] ?></center></td>
                                    <td><center><?= $data['nama_kapal'] ?></center></td>
                                    <td>
                                    <center>
                                        &nbsp<?= $data['jenis_barang']  ?> &nbsp (<?=  $data['jlh_barang']  ?>) <br> 
                                        &nbsp<?= $data['jenis_barang2'] ?> &nbsp (<?=  $data['jlh_barang2'] ?>) <br>
                                        &nbsp<?= $data['jenis_barang3'] ?> &nbsp (<?=  $data['jlh_barang3'] ?>) <br>
                                        &nbsp<?= $data['jenis_barang4'] ?> &nbsp (<?=  $data['jlh_barang4'] ?>) <br>
                                        &nbsp<?= $data['jenis_barang5'] ?> &nbsp (<?=  $data['jlh_barang5'] ?>) <br>
                                        -------------------------------<br>
                                        <label>Barang Mengganggu</label> <br>
                                        &nbsp<?= $data['barang_mengganggu']  ?> &nbsp (<?=  $data['jmlh_barangmengganggu']  ?>) <br> 
                                        s&nbsp<?= $data['barang_mengganggu2'] ?> &nbsp (<?=  $data['jmlh_barangmengganggu2'] ?>) <br>
                                    </td>
                                    
									<td><center><?= $data['tgl_masuk'] ?></center></td>
									
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                    <br>
                                       TanjungBalai,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Ali Munjar, SP<strong></u><br>
                                        NIP.122634593217719
                                                
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>