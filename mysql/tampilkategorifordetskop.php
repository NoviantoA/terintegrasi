<?php
include "./koneksi.php";
$query = mysqli_query($mysqli, "SELECT * FROM categorytabel");
if (mysqli_num_rows($result) > 0) {
    while ($record = mysqli_fetch_array($result)) {
        echo $record["CatId"] . "*" . $record["CatName"] . ";";
    }
}
