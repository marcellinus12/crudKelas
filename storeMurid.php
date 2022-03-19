<?php 
include 'database.php';
$db = new database();

// POST = FORM
$nama_murid= $_POST['nama_murid'];
$jkel = $_POST['jkel'];
$id_kls = $_POST['id_kls'];

$insert = $db->storeMurid($nama_murid,$jkel,$id_kls);

// Membuat response
if($insert) {
    $response = array(
        'status' => 200,
        'message' => 'Success create murid',
        'data' => ""
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed create murid',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);