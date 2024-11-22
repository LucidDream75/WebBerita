<?php
require 'connection.php';
$username = $_POST["username"];
$gmail = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$gmail', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("location: login.html");
} else {
    echo "Pendaftaran gagal : " . mysqli_error($connection);
}
?>