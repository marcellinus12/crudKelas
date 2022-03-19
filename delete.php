<?php 
include 'database.php';
$db = new database();

// Menghapus data
$id = $_GET['id_kls'];
$data = $db->deleteKelas($id);

// Membuat response
if ($data) {
    $response = array(
        'status' => 200,
        'message' => 'Success delete kelas with id = '.$id,
        'data' => ""
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed delete kelas with id = '.$id,
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);
