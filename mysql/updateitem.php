<?php
include "../koneksi.php";
$id = $_GET['itId'];
$name = $_GET['name'];
$itcat = $_GET['itcat'];
$itPrice = $_GET['itPrice'];
$itQty =  $_GET['itQty'];

$result = mysqli_query($mysqli, "update itemtabel set name='" . $name . "', itCat='" . $itcat . "', itPrice='" . $itPrice . "', itQty='" . $itQty . "' where itId='" . $id . "'");
