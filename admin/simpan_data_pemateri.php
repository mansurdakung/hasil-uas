<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pemateri = $_POST['id_pemateri'];
$nama_pemateri = $_POST['nama_pemateri'];
$tlp_pemateri = $_POST['tlp_pemateri'];
$insert_data = mysqli_query($koneksi, "INSERT INTO pemateri
(id_pemateri,nama_pemateri,tlp_pemateri)
values ('$id_pemateri','$nama_pemateri','$tlp_pemateri')");
if ($insert_data) {
 header('location:data_pemateri.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_pemateri.php?pesan=Data Gagal Di simpan');
}