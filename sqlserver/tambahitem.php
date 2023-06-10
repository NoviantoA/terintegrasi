<?php
include "../koneksi.php";
$result = sqlsrv_query($kon, "INSERT INTO itemtabel(name, itCat, itPrice, itQty) values('$_POST[name]','$_POST[itcat]',$_POST[itPrice], $_POST[itQty] );""INSERT INTO categorytabel(CatName) values('$_POST[CatNames]');");
header("location:../tambahkategori.php");
