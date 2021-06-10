<?php

include "./koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$telpon = $_POST['telpon'];

class emp{}
$query = mysqli_query($koneksi, " UPDATE teman set nama = '".$nama."', telpon = '".$telpon."' WHERE id = '".$id."' ");

if($query){
    $response = new emp();
    $response->success = 1;
    $response->message = "Data berhasil di ubah";
    die(json_encode($response));
}
else{
    $response = new emp();
    $response->success = 0;
    $response->message = "Gagal mengubah data";
    die(json_encode($response));
}

?>