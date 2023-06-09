<?php
include 'koneksi.php';
$kategori = $_POST['kategori'];
mysqli_query($conn, "insert into categorytabel (CatName) Values ('$kategori')");
header("location:./dashboard.php");
