<?php
include "../koneksi.php";
$amt = $_GET['OrdAmt'];
$result = mysqli_query($mysqli, "INSERT INTO ordertabel(OrdAmt) values('" . $amt . "')");
