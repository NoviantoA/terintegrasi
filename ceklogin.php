<?php
if ($_POST['username'] = "admin" && $_POST['password'] == "admin") {
    header("location:./tambahkategori.php");
} else
    header("location:./index.php?pesan=gagal");
