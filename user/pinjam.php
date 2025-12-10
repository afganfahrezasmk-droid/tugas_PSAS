<?php
include 'header.php';
include '../koneksi.php';

if (!isset($_SESSION['user_status'])) {
    header("location:../login.php");
exit;
}

if ($_SESSION['user_status'] != 2) {
    header("location:../admin/index.php");
exit;
    }

$id = $_SESSION['user_id'];
?>

<div class="container">
    <div class ="panel">
        <div class="panel-heading">
            <h4>Data Pinjaman Saya</h4>
</div>
<div class="panel-body">
    <a href="pinjam_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
    <br><br>
    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Nama Kendaraan</th>
            <th>Tipe</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>    
            <th>Status</th>
            <th>OPSI</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM pinjam JOIN kendaraan ON pinjam.kendaraan_nomor = kendaraan.kendaraan_nomor WHERE pinjam.user_id='$id' ORDER BY pinjam.pinjam_id DESC");
while ($d=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['kendaraan_nama']; ?></td>
        <td><?php echo $d['kendaraan_tipe']; ?></td>
        <td><?php echo $d['tgl_pinjam']; ?></td>
        <td><?php echo $d['tgl_kembali']; ?></td>
        <td>
            <?php
            if ($d['pinjam_status']=='1'){
                 echo "<div class='label label-success'>TERSEDIA</div>";
            }elseif ($d['pinjam_status']=='2'){
                 echo"<div class='label label-danger'>DIPINJAM</div>";
            }
            ?>
        </td>
        <td>
            <a href="invoice.php?id=<?php echo $d['pinjam_id']; ?>" class="btn btn-sm btn-warning">Invoice</a>
        </td>
    </tr>
<?php
}
?>
</table>
</div>
</div>