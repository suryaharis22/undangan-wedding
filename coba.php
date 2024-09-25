<html>

<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />

    <form action="coba.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>isi_pesan</td>
                <td><input type="text" name="isi_pesan"></td>
            </tr>
            <tr>
                <td>kehadiran</td>
                <td><input type="text" name="kehadiran"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $name = $_POST['nama'];
        $email = $_POST['isi_pesan'];
        $mobile = $_POST['kehadiran'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pesan(nama,isi_pesan,kehadiran) VALUES('$nama','$isi_pesan','$kehadiran')");

        // Show message when user added
        echo "User added successfully. <a href='coba.php'>View Users</a>";
    }
    ?>
</body>

</html>