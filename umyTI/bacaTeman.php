<?php

include "./koneksi.php";

$baca = mysqli_query($koneksi,"SELECT * FROM teman");
$json = array();

while ($row = mysqli_fetch_assoc($baca)){
    $json[] = $row;
}

echo json_encode($json);
mysqli_close($koneksi);

?>