<?php
include 'connection.php';
$id = $_POST['id'];
$nama = $_POST['name'];
$desk = $_POST['deskripsi'];

mysqli_query($conn, "update tb_upload set name='$nama', deskripsi='$desk' where id='$id'");
header("location:index.php");
?>