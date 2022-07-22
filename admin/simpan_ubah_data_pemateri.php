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
$update_data = mysqli_query($koneksi, "UPDATE pemateri set
id_pemateri='$id_pemateri', nama_pemateri='$nama_pemateri', tlp_pemateri='$tlp_pemateri' where id_pemateri=$id_pemateri");
if ($update_data) {
 header('location:data_pemateri.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_pemateri.php?pesan=Data Gagal Di Ubah');
}