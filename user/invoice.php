<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Peminjaman Kendaraan</title>
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">
    <script type="text/javascript" src="../asset/js/jquery.js"></script>
    <script type="text/javascript" src="../asset/js/bootstrap.js"></script>
</head>
<body>

<?php
session_start();
if (!isset($_SESSION['user_status'])) {
    header("location:../login.php");
    exit;
}

include '../koneksi.php';

$id = $_GET['id']; // id pinjam

// Ambil data pinjaman
$data = mysqli_query($koneksi, "SELECT * FROM pinjam, kendaraan WHERE pinjam.kendaraan_nomor = kendaraan.kendaraan_nomor AND pinjam.pinjam_id='$id' ORDER BY user_id DESC");
$d = mysqli_fetch_assoc($data);
?>

<div class="col-md-10 col-md-offset-1">

    <center>
        <h2>SISTEM INFORMASI RENTAL KENDARAAN</h2>
    </center>

    <a href="invoice_cetak.php?id=<?php echo $id; ?>" target="_blank" class="btn btn-primary pull-right">Cetak</a>
    <br><br>

    <table class="table">
        <tr>
            <th width="25%">No. Invoice</th>
            <th> : </th>
            <td>INV-<?= $d['pinjam_id']; ?></td>
        </tr>
        <tr>
            <th>ID Peminjam</th>
            <th> : </th>
            <td><?= $d['user_id']; ?></td>
        </tr>
        <tr>
            <th>Nama Kendaraan</th>
            <th> : </th>
            <td><?= $d['kendaraan_nama']; ?></td>
        </tr>
        <tr>
            <th>Tipe Kendaraan</th>
            <th> : </th>
            <td><?= $d['kendaraan_tipe']; ?></td>
        </tr>
        <tr>
            <th>Tanggal Pinjam</th>
            <th> : </th>
            <td><?= $d['tgl_pinjam']; ?></td>
        </tr>
        <tr>
            <th>Tanggal Kembali</th>
            <th> : </th>
            <td><?= $d['tgl_kembali']; ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <th> : </th>
            <td>
                <?php
                if ($d['pinjam_status'] == '1') {
                    echo "<span class='label label-success'>TERSEDIA</span>";
                } elseif ($d['pinjam_status'] == '2') {
                    echo "<span class='label label-danger'>DIPINJAM</span>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <th>Harga Perhari</th>
            <th> : </th>
            <td>Rp <?= number_format($d['kendaraan_harga_perhari']); ?></td>
        </tr>
    </table>

    <br>
    <center><i>"Terimakasih telah menggunakan layanan Rental Kendaraan"</i></center>

</div>

</body>
</html>