u<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pemateri = $_GET['id_pemateri'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM pemateri where
id_pemateri=$id_pemateri");
if ($hapus_data) {
 header('location:data_pemateri.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_pemateri.php?pesan=Data Gagal Di Ubah');
}