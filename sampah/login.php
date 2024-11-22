<?php
require 'connection.php';
$gmail = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM user WHERE email = '$gmail' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: main.php");
} else {
    echo "<center><h1>Email atau Password Anda Salah. Silahkan Coba Login Kembali.</h1>
            <button><strong><a href='login.html'>Login</a></strong></button></center>";
}
?>