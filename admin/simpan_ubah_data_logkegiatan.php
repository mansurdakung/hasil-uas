<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_log = $_POST['id_log'];
$id_kegiatan = $_POST['id_kegiatan'];
$id_peserta = $_POST['id_peserta'];
$keteranganlog = $_POST['keteranganlog'];
$update_data = mysqli_query($koneksi, "UPDATE logkegiatan set
id_log='$id_log', id_kegiatan='$id_kegiatan', id_peserta='$id_peserta', keteranganlog='$keteranganlog' where id_log=$id_log");
if ($update_data) {
 header('location:data_logkegiatan.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_logkegiatan.php?pesan=Data Gagal Di Ubah');
}