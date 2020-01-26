<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Barang Masuk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
						 <table class="table table-responsiv">
                         <tr>
                           <td colspan="2"><label for="">Nama Kapal</label></td>
                           <td colspan="4"><input type="text" class="form-control" name = "nama_kapal" id=""></td>                     
                         </tr>
                         <tr>
                         <tr>
                         <td colspan="2">
                           <label>Tanggal Masuk</label>
                            <!--untu tahun-->
                            </td>
                            <td colspan="">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2100;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>
                                <td colspan="2">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>
                                </td>
                            <!--Untuk Tanggal-->
                                <td colspan="2">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>
                                </td>
                            </div>
                            </td>
                         </tr>
                           <td colspan="4"><label for="">Jenis Barang</label></td>
                           <td colspan="2"><label for="">Jumlah Barang</label></td>
                         </tr>
                         <tr>
                           <td colspan="4"><input type="text" class="form-control" name="jenis_barang" widht="10px"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jlh_barang" ></td>
                         </tr>
                          <tr>
                           <td colspan="4"><input type="text" class="form-control" name="jenis_barang2" ></td>
                           <td colspan="4"><input type="text" class="form-control" name="jlh_barang2" ></td>
                         </tr>
                         <tr>
                           <td colspan="4"><input type="text" class="form-control" name="jenis_barang3" ></td>
                           <td colspan="4"><input type="text" class="form-control" name="jlh_barang3" ></td>
                         </tr>
                         <tr>
                           <td colspan="4"><input type="text" class="form-control" name="jenis_barang4"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jlh_barang4" ></td>
                         </tr>
                         <tr>
                           <td colspan="4"><input type="text" class="form-control" name="jenis_barang5"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jlh_barang5" ></td>
                         </tr>
                       
                         <tr>
                         <tr>
                           <td colspan="4"><label for="">Jenis Barang Mengganggu</label></td>
                           <td colspan="2"><label for="">Jumlah Barang Mengganggu</label></td>
                         </tr>
                           <td colspan="4"><input type="text" class="form-control" name="barang_mengganggu"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jmlh_barangmengganggu"></td>
                         </tr>
                         <tr>
                           <td colspan="4"><input type="text" class="form-control" name="barang_mengganggu2"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jmlh_barangmengganggu2" ></td>
                         </tr>
                       </table>
                    </div>

                        <!--Status-->

                        
                        <!--Akhir Status-->

						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Barang</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=barang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Barang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
 
	$id            =$_POST['id'];
	$nama_kapal    =$_POST['nama_kapal'];
    $jenis_barang  =$_POST['jenis_barang'];
    $jlh_barang    =$_POST['jlh_barang'];

    $jenis_barang2 =$_POST['jenis_barang2'];
    $jlh_barang2   =$_POST['jlh_barang2'];

    $jenis_barang3 =$_POST['jenis_barang3'];
    $jlh_barang3   =$_POST['jlh_barang3'];

    $jenis_barang4 =$_POST['jenis_barang4'];
    $jlh_barang4   =$_POST['jlh_barang4'];

    $jenis_barang5 =$_POST['jenis_barang5'];
    $jlh_barang5   =$_POST['jlh_barang5'];

    $barang_mengganggu      =$_POST['barang_mengganggu'];
    $jmlh_barangmengganggu         =$_POST['jmlh_barangmengganggu'];

    $barang_mengganggu2     =$_POST['barang_mengganggu2'];
    $jmlh_barangmengganggu2        =$_POST['jmlh_barangmengganggu2'];
    $tgl_masuk=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];

	
    //buat sql
    $sql="INSERT INTO tbl_barangmasuk VALUES ('','$nama_kapal','$jenis_barang','$jenis_barang2','$jenis_barang3','$jenis_barang4','$jenis_barang5',
                                                 '$jlh_barang','$jlh_barang2','$jlh_barang3','$jlh_barang4','$jlh_barang5',
                                                 '$barang_mengganggu','$barang_mengganggu2',
                                                 '$jmlh_barangmengganggu','$jmlh_barangmengganggu2','$tgl_masuk')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Barang Error");

    
        echo "<script>window.location.assign('?page=barang&actions=tampil');</script>";
   }
?>
