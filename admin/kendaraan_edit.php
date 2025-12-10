<?php
include 'header.php';
?>

<div class="container">
    <br><br><br>
    <div class ="col-md-5 col-md-offset-3">
        <div class="panel">
             <div class="panel-heading">
                <h4>EDIT Kendaraan </h4>
                </div>
            <div class="panel-body">

                        <?php
                        include '../koneksi.php';
                        $id = $_GET['id'];
                        $data = mysqli_query($koneksi,"select * from kendaraan where kendaraan_nomor='$id'");
                         while($d=mysqli_fetch_array($data)){
                            ?>
                            
                    <form method="POST" action="kendaraan_update.php">
                    <div class="form-group">
                        <input type="hidden" name="kendaraan_nomor" value=" <?php echo $d['kendaraan_nomor'];?>">
                    <div class="form-group">
                        <label>Nama Kendaraan</label>
                        <input type="text" name="kendaraan_nama" class="form-control" placeholder="Masukkan Nama Kendaraan"  value="<?php echo $d['kendaraan_nama'];?>">
                    </div>
                    <div class="form-group">
                        <label>Tipe Kendaraan</label>
                        <input type="text" name="kendaraan_tipe" class="form-control" placeholder="Masukan Tipe Kendaraan" value="<?php echo $d['kendaraan_tipe'];?>">
                    </div>
                    <div class="form-group">
                        <label>Harga per Hari</label>
                        <input type="text" name="kendaraan_harga_perhari" class="form-control" placeholder="Masukan Harga per Hari" value="<?php echo $d['kendaraan_harga_perhari'];?>">
                    </div>
                   <br>
                    <input type="submit" class="btn btn-primary" value="Simpan"></input>
                </form>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</div>
