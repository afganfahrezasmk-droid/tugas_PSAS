<?php
include 'header.php';
?>
<div class="container">
    <div class ="panel">
        <div class="panel-heading">
            <h4>Data Pinjam</h4>
</div>
<div class="panel-body">
    <a href="pinjam_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
    <br><br>
    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Nama Kendaraan</th>
            <th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>    
            <th>Status</th>
            <th>OPSI</th>
</tr>
<?php
include '../koneksi.php';
$data = mysqli_query($koneksi, "SELECT pinjam.*, user.user_nama, kendaraan.kendaraan_nama FROM pinjam LEFT JOIN user ON pinjam.user_id = user.user_id LEFT JOIN kendaraan ON pinjam.kendaraan_nomor = kendaraan.kendaraan_nomor ORDER BY pinjam.pinjam_id DESC");
$no=1;
while ($d=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['user_nama']; ?></td>
        <td><?php echo $d['kendaraan_nama']; ?></td>
        <td><?php echo $d['tgl_pinjam']; ?></td>
        <td><?php echo $d['tgl_kembali']; ?></td>
        <td>
            <?php
            if ($d['pinjam_status']=='1'){
                 echo "<div class='label label-success'>Tersedia</div>";
            }elseif ($d['pinjam_status']=='2'){
                 echo"<div class='label label-danger'>Dipinjam</div>";
            }
            ?>
        </td>
        <td>
            <a href="pinjam_edit.php?id=<?php echo $d['pinjam_id']; ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="pinjam_hapus.php?id=<?php echo $d['pinjam_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
        </td>
    </tr>
<?php
}
?>
</table>
</div>
</div>