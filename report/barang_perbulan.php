<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        $ambilthn=$_POST['tahun'];
        $bulanNama;
        if ($ambilbln==12) {
          $bulanNama="DESEMBER";
        } elseif ($ambilbln==11) {
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==1) {
          $bulanNama="JANUARI";
        }

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


                <b><center><h4><u>DATA LAPORAN PERBULAN   <? echo "$bulanNama $ambilthn"; ?></u></h4></center></b><br>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
                                <tr>
                                    <th><center>No.</center></th><th width="18%"><center>Nama Kapal</center></th><th><center>Jenis Barang</center></th><th width="10%">Tgl. Masuk</th>
                                </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_barangmasuk WHERE substr(tgl_masuk,1,7)='$ambilthn-$ambilbln'";
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
                                   
                                    <td><?= $data['nama_kapal'] ?></td>
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
                                    &nbsp<?= $data['barang_mengganggu2'] ?> &nbsp (<?=  $data['jmlh_barangmengganggu2'] ?>) <br>
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
                                        Kisaran  <?= date("d-m-Y") ?>
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
