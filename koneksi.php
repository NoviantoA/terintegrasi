<?php
$servername = "localhost:4306";
$database = "projectuaspi";
$username = "root";
$password = "";

$mysqli = new mysqli($servername, $username, $password, $database);

$server2 = "YUSUFALMARUF\SQLEXPRESS01";
$connectionInfo = array("Database" => "projectuaspi", "CharacterSet" => "UTF-8");
$kon = sqlsrv_connect($server2, $connectionInfo);
