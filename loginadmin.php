<?php
require 'connection.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: index.php");
} else {
    echo "<center><h1>Email atau Password Anda Salah</h1></center>";
}
?>