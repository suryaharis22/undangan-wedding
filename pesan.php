<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $tanggal = $_POST['isi_pesan'];
    $status = $_POST['kehadiran'];

    // include database connection file
    include_once("koneksi.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO pesan(nama,isi_pesan,kehadiran) VALUES('$nama','$isi_pesan','$kehadiran')");

    // Show message when user added
    echo '<script language="javascript">
            alert ("Terimakasi");
            window.location="undangan.php";
            </script>';
} else {
    echo '<script language="javascript">
            alert ("gagal");
            window.location="undangan.php";
            </script>';
}
