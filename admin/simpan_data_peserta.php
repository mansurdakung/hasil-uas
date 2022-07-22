<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_peserta = $_POST['id_peserta'];
$nama_peserta = $_POST['nama_peserta'];
$tlp_peserta = $_POST['tlp_peserta'];
$email_peserta = $_POST['email_peserta'];
$username = $_POST['username'];
$password = $_POST['password'];
$insert_data = mysqli_query($koneksi, "INSERT INTO peserta
(id_peserta,nama_peserta,tlp_peserta,email_peserta,username,password)
values ('$id_peserta','$nama_peserta','$tlp_peserta','$email_peserta','$username','$password')");
if ($insert_data) {
 header('location:data_peserta.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_peserta.php?pesan=Data Gagal Di simpan');
}