<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$kehadiran = stripslashes(strip_tags(htmlspecialchars($_POST['kehadiran'], ENT_QUOTES)));
$isi_pesan = stripslashes(strip_tags(htmlspecialchars($_POST['isi_pesan'], ENT_QUOTES)));

$sql = "INSERT into pesan (nama, isi_pesan, kehadiran) VALUES ('$nama', '$isi_pesan', '$kehadiran')";
if (mysqli_query($db1, $sql)) {
    echo json_encode(['success' => 'Sukses']);
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db1);
}

$db1->close();
