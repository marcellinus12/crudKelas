<?php 
include 'database.php';
$db = new database();

// POST = FORM
$nama_kls= $_POST['nama_kls'];

$insert = $db->storeKelas($nama_kls);

// Membuat response
if($insert) {
    $response = array(
        'status' => 200,
        'message' => 'Success create kelas',
        'data' => ""
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed create kelas',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);