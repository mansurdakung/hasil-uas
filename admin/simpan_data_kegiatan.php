<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_kegiatan = $_POST['id_kegiatan'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$jenis_kegiatan = $_POST['jenis_kegiatan'];
$tgl_kegiatan = $_POST['tgl_kegiatan'];
$lokasi_kegiatan = $_POST['lokasi_kegiatan'];
$id_pemateri = $_POST['id_pemateri'];
$insert_data = mysqli_query($koneksi, "INSERT INTO kegiatan
(id_kegiatan, nama_kegiatan, jenis_kegiatan,tgl_kegiatan, lokasi_kegiatan, id_pemateri)
values ('$id_kegiatan', '$nama_kegiatan', '$jenis_kegiatan', '$tgl_kegiatan','$lokasi_kegiatan', '$id_pemateri')");
if ($insert_data) {
 header('location:data_kegiatan.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_kegiatan.php?pesan=Data Gagal Di simpan');
}