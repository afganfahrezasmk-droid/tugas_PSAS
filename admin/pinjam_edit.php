<?php
include 'header.php';
?>

<div class="container">
    <br><br><br>
    <div class ="col-md-5 col-md-offset-3">
        <div class="panel">
             <div class="panel-heading">
                <h4>EDIT User </h4>
                </div>
            <div class="panel-body">

                        <?php
                        include '../koneksi.php';
                        $id = $_GET['id'];
                        $data = mysqli_query($koneksi,"select * from pinjam where pinjam_id='$id'");
                         while($d=mysqli_fetch_array($data)){
                            ?>
                            
                    <form method="POST" action="pinjam_update.php">
                    <div class="form-group">
                        <input type="hidden" name="pinjam_id" value=" <?php echo $d['pinjam_id'];?>">
                    <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input type="date" name="tgl_pinjam" class="form-control" value="<?php echo $d['tgl_pinjam'];?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" class="form-control" value="<?php echo $d['tgl_kembali'];?>">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="pinjam_status" class="form-control">
                             <option value="1" <?php if($d['pinjam_status'] == "1"){ echo "selected"; } ?>>Tersedia</option>
                             <option value="2" <?php if($d['pinjam_status'] == "2"){ echo "selected"; } ?>>Dipinjam</option>
                        </select>
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
