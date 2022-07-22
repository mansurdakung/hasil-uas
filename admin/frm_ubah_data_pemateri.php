<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$id = $_GET['id_pemateri'];
$queri = mysqli_query($koneksi, "SELECT * FROM pemateri where id_pemateri=$id");
$rs = mysqli_fetch_assoc($queri);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div

class="d-flex justify-content-between flex-wrap flex-md-nowrap align-
items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Form Ubah Pemateri</h1>

</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
<div class="table-responsive">
<form action="simpan_ubah_data_pemateri.php" method="POST">
<div class="col-6">
<div class="mb-3">

<label for="exampleFormControlInput1" class="form-
label">id_pemateri</label>

<input type="text" name="id_pemateri" value="<?php echo
$rs['id_pemateri']; ?>" class="form-control">
</div>
<div class="mb-3">

<label for="exampleFormControlTextarea1" class="form-
label">nama_pemateri</label>

<input type="text" name="nama_pemateri" value="<?php echo
$rs['nama_pemateri']; ?>" class="form-control">
</div>
<div class="mb-3">

<label for="exampleFormControlTextarea1" class="form-
label">tlp_pemateri</label>

<input type="text" name="tlp_pemateri" value="<?php echo
$rs['tlp_pemateri']; ?>" class="form-control">
</div>
<div class="mb-3">
<input type="hidden" name="id_pemateri" value="<?php echo
$rs['id_pemateri']; ?>" class="form-control">
<button type="submit" class="btn btn-sm btn-primary">
Simpan</button>
				</div>
			</div>
		</form>
	</div>
</main>
<?php
include "../layout/footer.php";
?>