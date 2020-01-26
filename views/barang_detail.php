<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Laporan Barang Masuk</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_barangmasuk WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel-->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Barang Masuk</td> <td width="70%" colspan="4"><?= $data['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Kapal</td> <td><?= $data['nama_kapal'] ?></td>
                        </tr>
                        <tr>
                          <td>Jenis Barang</td>
                          <td width="30%">
                            <label>Nama Barang</label><br>
                            <?= $data['jenis_barang']  ?> <br>
                            <?= $data['jenis_barang2'] ?> <br>
                            <?= $data['jenis_barang3'] ?> <br>
                            <?= $data['jenis_barang4'] ?> <br>
                            <?= $data['jenis_barang5'] ?> <br>
                          <td>
                          <center>
                              <label>Jumlah Barang</label><br>
                              <?=  $data['jlh_barang']  ?> <br>
                              <?=  $data['jlh_barang2'] ?> <br>
                              <?=  $data['jlh_barang3'] ?> <br>
                              <?=  $data['jlh_barang4'] ?> <br>
                              <?=  $data['jlh_barang5'] ?> <br>
                          </center>
                          </td>
                          <td>
                              <center>
                                  <label>Barang Mengganggu</label> <br>
                                    &nbsp<?= $data['barang_mengganggu']  ?> &nbsp (<?=  $data['jmlh_barangmengganggu']  ?>) <br> 
                                    &nbsp<?= $data['barang_mengganggu2'] ?> &nbsp (<?=  $data['jmlh_barangmengganggu2'] ?>) <br>
                              </center>
                          </td>
						<tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                        </tr>

                      
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=barang&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Barang  </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

