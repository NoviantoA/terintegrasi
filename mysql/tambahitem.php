<?php
include "../koneksi.php";
$result = mysqli_query($mysqli, "INSERT INTO itemtabel(name, itCat, itPrice, itQty) values('$_POST[name]','$_POST[itcat]',$_POST[itPrice], $_POST[itQty] );");
$result = sqlsrv_query($kon, "INSERT INTO itemtabel(name, itCat, itPrice, itQty) values('$_POST[name]','$_POST[itcat]',$_POST[itPrice], $_POST[itQty] );");
header("location:../item.php");
