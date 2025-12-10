<?php
include 'header.php';
?>

<div class="container">
    <br><br><br>
    <div class ="col-md-5 col-md-offset-3">
        <div class="panel">
             <div class="panel-heading">
                <h4>Tambah Peminjaman</h4>
                </div>
            <div class="panel-body">
                <form method="POST" action="pinjam_aksi.php">
                    <div class="form-group">
                        <label>User ID</label>
                        <input type="text" name="user_id" class="form-control" placeholder="Masukkan User ID">
                    </div>
                    <div class="form-group">
                        <label>Kendaraan Nomor</label>
                        <input type="text" name="kendaraan_nomor" class="form-control" placeholder="Masukan Nomor Kendaraan">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input type="date" name="tgl_pinjam" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" class="form-control" required>
                    </div>
                    <div class="form-group">
                         <label>Status Pinjam</label>
                         <select name="pinjam_status" class="form-control">
                             <option value="1">Tersedia</option>
                             <option value="2">Dipinjam</option>
                         </select>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Simpan"></input>
                </form>
            </div>
        </div>
    </div>
</div>
