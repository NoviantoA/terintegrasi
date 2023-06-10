<?php
include "../koneksi.php";
$result = sqlsrv_query($kon, "INSERT INTO categorytabel(CatName) values('$_POST[CatNames]');");
header("location:../tambahkategori.php");
