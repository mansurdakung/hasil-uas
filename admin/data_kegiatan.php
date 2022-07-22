<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
 <div
 class="d-flex justify-content-between flex-wrap flex-md-nowrap alignitems-center pt-3 pb-2 mb-3 border-bottom">
 <h1 class="h2">Data kegiatan</h1>
 </div>
 <?php if (isset($_GET['pesan'])) : ?>
 <div class="alert alert-success" role="alert">
 <?php echo $_GET['pesan']; ?>
 </div>
 <?php endif; ?>
 <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
 <!-- <h4>Data Jadwal Kegiatan</h4> -->
 <a href="frm_tambah_kegiatan.php" class="btn btn-sm btn-primary">Tambah
Data</button></a>
 <br> <br>
 <div class="table-responsive">
 <table class="table table-striped table-bordered display nowrap"
id="example" style="width:100%">
 <thead class="table-light">
 <tr>
 <th scope="col">#</th>
 <th scope="col">id_kegiatan</th>
 <th scope="col">nama_kegiatan</th>
 <th scope="col">jenis_kegiatan</th>
 <th scope="col">tgl_kegiatan</th>
 <th scope="col">lokasi_kegiatan</th>
 <th scope="col">id_pemateri</th>
 <th scope="col">Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $no = 1;
 $query = mysqli_query($koneksi, "SELECT * FROM kegiatan");
 while ($rs = mysqli_fetch_assoc($query)) {
 ?>
 <tr>
 <td><?php echo $no; ?></td>
 <td><?php echo $rs['id_kegiatan']; ?></td>
 <td><?php echo $rs['nama_kegiatan']; ?></td>
 <td><?php echo $rs['jenis_kegiatan']; ?></td>
 <td><?php echo $rs['tgl_kegiatan']; ?></td>
 <td><?php echo $rs['lokasi_kegiatan']; ?></td>
 <td><?php echo $rs['id_pemateri']; ?></td>
 <td>
 <a href="frm_ubah_data_kegiatan.php?id_kegiatan=<?=
$rs['id_kegiatan']; ?>"
 class="btn btn-info btn-sm">Ubah</a>
 <a href="hapus_data_kegiatan.php?id_kegiatan=<?=
$rs['id_kegiatan']; ?>" class=" btn btn-danger
 btn-sm">Hapus</a>
 </td>
 </tr>
 <?php
 $no++;
 }
 ?>
 </tbody>
 </table>
 </div>
</main>
<?php
include "../layout/footer.php";
?>