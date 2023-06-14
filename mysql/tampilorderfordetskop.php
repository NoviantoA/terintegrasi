<?php
$host = "localhost:4306";
$user = "root";
$password = "";
$db = "projectuaspi";
$koneksi = new mysqli($host, $user, $password, $db) or die("Gagal koneksi");

$query = "SELECT OrdId, OrdDate, OrdAmt FROM ordertabel";
$result = mysqli_query($koneksi, $query);
if (mysqli_num_rows($result) > 0) {
    while ($record = mysqli_fetch_array($result)) {
        echo $record["OrdId"] . "*" . $record["OrdDate"] .  "*" . $record["OrdAmt"] . ";";
    }
}
