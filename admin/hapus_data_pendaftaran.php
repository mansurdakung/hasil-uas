u<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pendaftaran = $_GET['id_pendaftaran'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM pendaftarankegiatan where
id_pendaftaran=$id_pendaftaran");
if ($hapus_data) {
 header('location:data_pendaftaran.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_pendaftaran.php?pesan=Data Gagal Di Ubah');
}