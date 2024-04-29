<?php
session_start();
include('connect.php');

$username = $_POST['username'];
$mail = $_POST['mail'];
$password = $_POST['password'];

if (!empty($username) && !empty($mail) && !empty($password)) {

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    } else {
        $query = "INSERT INTO `users` (username, mail, password) VALUES ('$username', '$mail', '$password')";

        if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit();
        }
        $conn->close();
    }
}
?>