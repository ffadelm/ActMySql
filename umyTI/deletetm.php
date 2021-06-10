<?php

include "./koneksi.php";

$id = $_POST['id'];

class emp
{
}
$query = mysqli_query($koneksi, "DELETE from teman where id = '$id'");

if ($query) {
    $response = new emp();
    $response->success = 1;
    $response->message = "Data berhasil dihapus";
    die(json_encode($response));
} else {
    $response = new emp();
    $response->success = 0;
    $response->message = "Gagal menghapus data";
    die(json_encode($response));
}

?>
