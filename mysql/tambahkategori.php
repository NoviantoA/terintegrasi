<?php
include "../koneksi.php";
$result = mysqli_query($mysqli, "INSERT INTO categorytabel(CatName) values('$_POST[CatNames]');");
header("location:../tambahkategori.php");
