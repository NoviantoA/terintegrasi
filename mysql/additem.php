<?php
error_reporting(E_ALL & ~E_NOTICE);

include "../koneksi.php";
$name = $_GET['name'];
$itcat = $_GET['itcat'];
$itPrice = $_GET['itPrice'];
$itQty = $_GET['itQty'];

$result = mysqli_query($mysqli, "INSERT INTO itemtabel(name, itCat, itPrice, itQty) values('" . $name . "','" . $itcat . "','" . $itPrice . "','" . $itQty . "')");
