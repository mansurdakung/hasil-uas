u<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_peserta = $_GET['id_peserta'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM peserta where
id_peserta=$id_peserta");
if ($hapus_data) {
 header('location:data_peserta.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_peserta.php?pesan=Data Gagal Di Ubah');
}