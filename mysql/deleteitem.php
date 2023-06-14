<?php
include "../koneksi.php";
$id = (int)$_GET['id'];
$result = mysqli_query($mysqli, "delete from itemtabel where itId='$id'");
$result = sqlsrv_query($kon, "delete from itemtabel where itId='$id'");

header("location:../dataitem.php");
