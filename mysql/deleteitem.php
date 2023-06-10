<?php
include "../koneksi.php";
$id = (int)$_GET['id'];
$data = mysqli_query($mysqli, "delete from itemtabel where itId='$id'");

header("location:../dataitem.php");
