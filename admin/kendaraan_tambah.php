<?php
include 'header.php';
?>

<div class="container">
    <br><br><br>
    <div class ="col-md-5 col-md-offset-3">
        <div class="panel">
             <div class="panel-heading">
                <h4>Tambah Kendaraan Baru</h4>
                </div>
            <div class="panel-body">
                <form method="POST" action="kendaraan_aksi.php">
                    <div class="form-group">
                        <label>Nomor Kendaraan</label>
                        <input type="text" name="kendaraan_nomor" class="form-control" placeholder="Masukkan Nomor Kendaraan">
                    </div>
                    <div class="form-group">
                        <label>Nama Kendaraan</label>
                        <input type="text" name="kendaraan_nama" class="form-control" placeholder="Masukan Nama Kendaraan">
                    </div>
                    <div class="form-group">
                        <label>Tipe Kendaraan</label>
                        <input type="text" name="kendaraan_tipe" class="form-control" placeholder="Masukan Tipe Kendaraan">
                    </div>
                    <div class="form-group">
                        <label>Harga per Hari</label>
                        <input type="text" name="kendaraan_harga_perhari" class="form-control" placeholder="Isi Harga Perhari">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Simpan"></input>
                </form>
            </div>
        </div>
    </div>
</div>
