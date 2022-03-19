<?php 
include 'database.php';
$db = new database();

// POST = FORM
$id = $_GET['id_kls'];

$nama_kls = $_POST['nama_kls'];

$insert = $db->updateKelas($id,$nama_kls);

// Membuat response
if($insert) {
    $response = array(
        'status' => 200,
        'message' => 'Success update kelas',
        'data' => ""
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed update kelas',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);