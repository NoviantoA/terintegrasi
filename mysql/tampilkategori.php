<?php
// Koneksi ke database
include "../koneksi.php";

// Mengambil data POST dari DataTables
$draw = $_POST['draw'];
$start = $_POST['start'];
$length = $_POST['length'];

// Menghitung jumlah total data dalam tabel
$recordsTotal = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM categorytabel"));

// Mengambil data dengan menggunakan LIMIT dan OFFSET
$result = mysqli_query($mysqli, "SELECT * FROM categorytabel LIMIT $start, $length");
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Membuat response yang dikirim kembali ke DataTables
$response = array(
    "draw" => intval($draw),
    "recordsTotal" => intval($recordsTotal),
    "recordsFiltered" => intval($recordsTotal),
    "data" => $data
);

// Mengubah response menjadi format JSON dan mengirimkannya
echo json_encode($response);
