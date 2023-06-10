<?php
include "../koneksi.php";
$id = (int)$_POST['idIt'];
$name = $_POST['name'];
$itPrice = (int)$_POST['itPrice'];
$itQty =  (int)$_POST['itQty'];

$result = mysqli_query($mysqli, "update itemtabel set name='$name', itPrice='$itPrice', itQty='$itQty' where itId='$id'");
header("location:../dataitem.php");
