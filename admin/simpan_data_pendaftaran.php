<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pendaftaran = $_POST['id_pendaftaran'];
$id_kegiatan = $_POST['id_kegiatan'];
$id_peserta = $_POST['id_peserta'];
$tgl_pendaftaran = $_POST['tgl_pendaftaran'];
$insert_data = mysqli_query($koneksi, "INSERT INTO pendaftarankegiatan
(id_pendaftaran, id_kegiatan, id_peserta, tgl_pendaftaran)
values ('$id_pendaftaran', '$id_kegiatan', '$id_peserta', '$tgl_pendaftaran')");
if ($insert_data) {
 header('location:data_pendaftaran.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_pendaftaran.php?pesan=Data Gagal Di simpan');
}