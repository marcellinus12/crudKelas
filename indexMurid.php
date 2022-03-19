<?php 
include 'database.php';
$db = new database();

// Mengambil data
$data = $db->getAllKelas();

// Membuat response
$response = array(
    'status' => 200,
    'message' => 'Success get kelas',
    'data' => $data
);

// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);
