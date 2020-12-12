<?php
$user = "techkuym";
$host = "localhost";
$pass = "1UU9(5n#uYfrE2";
$db = "techkuym_data_air";
$connect = mysqli_connect($host, $user, $pass) or die("koneksi gagal");
mysqli_select_db($connect, $db) or die("database tidak ditemukan");
