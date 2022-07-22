<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_kegiatan = $_POST['id_kegiatan'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$jenis_kegiatan = $_POST['jenis_kegiatan'];
$tgl_kegiatan = $_POST['tgl_kegiatan'];
$lokasi_kegiatan = $_POST['lokasi_kegiatan'];
$id_pemateri = $_POST['id_pemateri'];
$update_data = mysqli_query($koneksi, "UPDATE kegiatan set
id_kegiatan='$id_kegiatan', nama_kegiatan='$nama_kegiatan', jenis_kegiatan='$jenis_kegiatan', lokasi_kegiatan='$lokasi_kegiatan',
tgl_kegiatan='$tgl_kegiatan', id_pemateri='$id_pemateri' where id_kegiatan=$id_kegiatan");
if ($update_data) {
 header('location:data_kegiatan.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_kegiatan.php?pesan=Data Gagal Di Ubah');
}