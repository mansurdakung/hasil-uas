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
$insert_data = mysqli_query($koneksi, "INSERT INTO logkegiatan
(id_log, id_kegiatan, id_peserta, keteranganlog)
values ('$id_log', '$id_kegiatan', '$id_peserta', '$keteranganlog')");
if ($insert_data) {
 header('location:data_logkegiatan.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_logkegiatan.php?pesan=Data Gagal Di simpan');
}