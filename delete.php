<?php
// koneksi database
include 'connection.php';

// menangkap data id yang di kririm dari url
$id = $_GET['id'];

//Menghapus data dari database
mysqli_query($conn,"delete from tb_upload where id='$id'");

//mengalihkan halaman kembali ke main.php
header("location:index.php");
?>