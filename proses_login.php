<?php
include 'koneksi.php';
session_start();
//include 'login.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT id, role FROM tbl_user WHERE username = '$user'
    and password = '$pass'";
    $hasil = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($hasil);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION['login_user'] = $user;
        $_SESSION['role'] = $row['role'];
        header("location:index.php");
    } else {
        $error = "Username atau Password Salah";
    }
}