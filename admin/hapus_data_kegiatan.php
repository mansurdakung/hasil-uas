u<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_kegiatan = $_GET['id_kegiatan'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM kegiatan where
id_kegiatan=$id_kegiatan");
if ($hapus_data) {
 header('location:data_kegiatan.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_kegiatan.php?pesan=Data Gagal Di Ubah');
}