u<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_log = $_GET['id_log'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM logkegiatan where
id_log=$id_log");
if ($hapus_data) {
 header('location:data_logkegiatan.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_logkegiatan.php?pesan=Data Gagal Di Ubah');
}