<?php

include "./koneksi.php";

$nama = $_POST['nama'];
$telpon = $_POST['telpon'];

class emp{}
$query = mysqli_query($koneksi, "INSERT INTO teman (nama,telpon) values('$nama','$telpon')");

if ($query) {
    $response = new emp();
    $response->success = 1;
    $response->message = "Data berhasil disimpan";
    die(json_encode($response));
} else {
    $response = new emp();
    $response->success = 0;
    $response->message = "Data Gagal disimpan";
    die(json_encode($response));
}

?>