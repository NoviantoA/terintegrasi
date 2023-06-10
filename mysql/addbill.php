<?php
include "../koneksi.php";
$id = (int)$_POST['idIt'];
$stok = $_POST['stok'];
$kurang = (int)$_POST['itQty'];
$itQty = $stok - $kurang;
$total = (int)$_POST['total'];
$result = mysqli_query($mysqli, "INSERT INTO ordertabel(OrdDate, OrdAmt) values('$_POST[date]','$total' );");
$result = mysqli_query($mysqli, "update itemtabel set itQty='$itQty' where itId=$id");
header("location:../item.php");
