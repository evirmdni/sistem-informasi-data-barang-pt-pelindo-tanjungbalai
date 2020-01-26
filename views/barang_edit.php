<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_barangmasuk WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Barang Masuk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                     
                       <div class="form-group">
                         <table class="table table-responsiv">
                         <tr>
                           <td colspan="2"><label for="">ID Barang Masuk</label></td>
                           <td colspan="4"><input type="text" class="form-control" name = "id" id="" value="<?=$data['id']?>" readonly="true"></td>                     
                         </tr>
                         <tr>
                           <td colspan="2"><label for="">Nama Kapal</label></td>
                           <td colspan="4"><input type="text" class="form-control" name = "nama_kapal" id="" value="<?=$data['nama_kapal']?>" ></td>                     
                         </tr>
                         <tr>
                           <td colspan="2"><label for="">Tanggal Masuk</label></td>
                           <td colspan="4"><input type="date" class="form-control" name="tgl_masuk" value="<?= $data['tgl_masuk'] ?>" ></td>                     
                         </tr>
                         <tr>
                           <td colspan="4"><label for="">Jenis Barang</label></td>
                           <td colspan="2"><label for="">Jumlah Barang</label></td>
                         </tr>
                         <tr>
                           <td colspan="4"><input type="text" class="form-control" name="jenis_barang" widht="10px" value="<?=$data['jenis_barang']?>"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jlh_barang" value="<?=$data['jlh_barang']?>" ></td>
                         </tr>
                          <tr>
                           <td colspan="4"><input type="text" class="form-control" name="jenis_barang2" value="<?=$data['jenis_barang2']?>"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jlh_barang2"value="<?=$data['jlh_barang2']?>" ></td>
                         </tr>
                         <tr>
                           <td colspan="4"><input type="text" class="form-control" name="jenis_barang3" value="<?=$data['jenis_barang3']?>"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jlh_barang3" value="<?=$data['jlh_barang3']?>"></td>
                         </tr>
                         <tr>
                           <td colspan="4"><input type="text" class="form-control" name="jenis_barang4" value="<?=$data['jenis_barang4']?>"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jlh_barang4" value="<?=$data['4']?>"></td>
                         </tr>
                         <tr>
                           <td colspan="4"><input type="text" class="form-control" name="jenis_barang5" value="<?=$data['5']?>"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jlh_barang5" value="<?=$data['jlh_barang5']?>"></td>
                         </tr>
                       
                         <tr>
                         <tr>
                           <td colspan="4"><label for="">Jenis Barang Mengganggu</label></td>
                           <td colspan="2"><label for="">Jumlah Barang Mengganggu</label></td>
                         </tr>
                           <td colspan="4"><input type="text" class="form-control" name="barang_mengganggu" value="<?=$data['barang_mengganggu']?>"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jmlh_barangmengganggu" value="<?=$data['jmlh_barangmengganggu']?>"></td>
                         </tr>
                         <tr>
                           <td colspan="4"><input type="text" class="form-control" name="barang_mengganggu2" value="<?=$data['barang_mengganggu2']?>"></td>
                           <td colspan="4"><input type="text" class="form-control" name="jmlh_barangmengganggu2" value="<?=$data['jmlh_barangmengganggu2']?>"></td>
                         </tr>
                       </table>
                    </div>

                        </div>
                        <!--end tanggal lahir-->           

                        
                        <!--Status-->
                        
                       
                        <!--Akhir Status-->
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Barang Masuk</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=barang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Barang Masuk
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
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
    $tgl_masuk=$_POST['tgl_masuk'];
    //buat sql
    $sql="UPDATE tbl_barangmasuk SET nama_kapal    ='$nama_kapal',
                                     jenis_barang  ='$jenis_barang',
                                     jlh_barang ='$jlh_barang',
                                     jenis_barang2 ='$jenis_barang2',
                                     jlh_barang2   ='$jlh_barang2',
                                     jenis_barang3 ='$jenis_barang3',
                                     jlh_barang3   ='$jlh_barang3',
                                     jenis_barang4 ='$jenis_barang4',
                                     jlh_barang4   ='$jlh_barang4',
                                     jenis_barang5 ='$jenis_barang5',
                                     jlh_barang5   ='$jlh_barang5',
                                     barang_mengganggu      ='$barang_mengganggu',
                                     jmlh_barangmengganggu  ='$jmlh_barangmengganggu',
                                     barang_mengganggu2     ='$barang_mengganggu2',
                                     jmlh_barangmengganggu2 ='$jmlh_barangmengganggu2',
	                                 tgl_masuk ='$tgl_masuk' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=barang&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



