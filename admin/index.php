<?php
include 'header.php';
include '../koneksi.php';

if (!isset($_SESSION['user_status'])) {
    header("location:../login.php?pesan=belum_login");
exit;
}

if ($_SESSION['user_status'] != 1) {
    header("location:../user/index.php?pesan=bukan_admin");
exit;
}
?>

<div class="container">
    <div class="alert alert-info text-center">
        <h4 style="margin-bottom: 0px;"> <b>Sistem Informasi Rental Kendaraan RPL Skanega</b></h4>
    </div>
<div class="panel">
    <div class="panel-heading">
        <h4>Dashboard</h4>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>
                            <i class="glyphicon glyphicon-road"></i>
                            <span class="pull-right">
                                <?php
                                     $kendaraan=mysqli_query($koneksi, "select *from kendaraan");
                                     echo mysqli_num_rows($kendaraan);
                                ?>
                                </span>
                        </h1>
                        Jumlah Kendaraan
                    </div>
                </div>
            </div>

             <div class="col-md-3">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h1>
                            <i class="glyphicon glyphicon-ok-circle"></i>
                            <span class="pull-right">
                                <?php
                                     $tersedia=mysqli_query($koneksi, "select *from pinjam where pinjam_status='1'");
                                     echo mysqli_num_rows($tersedia);
                                ?>
                                </span>
                        </h1>
                        Kendaraan Tersedia
                    </div>
                </div>
            </div>

 <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h1>
                            <i class="glyphicon glyphicon-info-sign"></i>
                            <span class="pull-right">
                                <?php
                                     $dipinjam=mysqli_query($koneksi, "select *from pinjam where pinjam_status='2'");
                                     echo mysqli_num_rows($dipinjam);
                                ?>
                                </span>
                        </h1>
                        Kendaraan di pinjam
                    </div>
                </div>
            </div>

</div>
</div>
</div>
    <div class="panel">
<div class="panel-heading">
    <h4>Data Semua Peminjaman</h4>
</div>
<div class="panel-body">
    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Alamat</th>
            <th>Status Pinjam</th>
            <th>Nama Kendaraan</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>OPSI</th>
        </tr>

      
<?php
$data = mysqli_query($koneksi, "select *from pinjam, user, kendaraan where pinjam.user_id = user.user_id and pinjam.kendaraan_nomor = kendaraan.kendaraan_nomor order by pinjam_id desc");
while ($d=mysqli_fetch_array($data)){
?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['user_nama']; ?></td>
        <td><?php echo $d['user_alamat']; ?></td>
        <td>
    <?php
    if ($d['pinjam_status']=='1'){
        echo "<div class='label label-success'>TERSEDIA</div>";
    }elseif ($d['transaksi_status']=='2'){
        echo"<div class='label label-danger'>DIPINJAM</div>";
    }
    ?>
        </td>
        <td><?php echo $d['kendaraan_nama']; ?></td>
        <td><?php echo $d['tgl_pinjam']; ?></td>
        <td><?php echo $d['tgl_kembali']; ?></td>
        <td>
            <a href="invoice.php?id=<?php echo $d['pinjam_id']; ?>" class="btn btn-sm btn-warning">invoice</a>
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
</div>

        </div>