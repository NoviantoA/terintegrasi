<?php
if ($_POST['username'] = "Admin" && $_POST['password'] == "Password") {
    header("location:./dashboard.php");
} else
    header("location:./index.php?pesan=gagal");
