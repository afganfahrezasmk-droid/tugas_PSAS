<?php
include 'header.php';
?>
<div class="container">
    <div class ="panel">
        <div class="panel-heading">
            <h4>Data Anggota</h4>
</div>
<div class="panel-body">
    <a href="anggota_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
    <br><br>
    <table class="table table-bordered table-striped">
        <tr>
            <th width="1%">No</th>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Profil</th>            
            <th>Status Keanggotaan</th>
            <th width="15%">OPSI</th>
</tr>
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "select * from anggota");
$no=1;
while ($d=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['id_anggota']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['email']; ?></td>
        <td><?php echo $d['profil']; ?></td>
        <td>
            <?php
            if ($d['status_keanggotaan']=='Aktif'){
                 echo "<div class='label label-success'>Aktif</div>";
            }elseif ($d['status_keanggotaan']=='Nonaktif'){
                 echo"<div class='label label-danger'>Nonaktif</div>";
            }
            ?>
        </td>
        <td>
            <a href="anggota_edit.php?id=<?php echo $d['id_anggota']; ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="anggota_hapus.php?id=<?php echo $d['id_anggota']; ?>" class="btn btn-sm btn-danger">Hapus</a>
        </td>
    </tr>
<?php
}
?>
</table>
</div>
</div>