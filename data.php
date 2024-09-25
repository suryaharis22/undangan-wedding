<style>
div.scroll {
    margin:4px, 4px;
    padding:4px;
    height: 700px;
    overflow-x: hidden;
    overflow-y: auto;
    text-align:justify;
}
</style>

<div class="container my-5 py-5">
    <div class="scroll">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="card text-dark">

<?php
    include 'koneksi.php';
    $no = 1;
    $query = "SELECT * FROM pesan ORDER BY id DESC";
    $dewan1 = $db1->prepare($query);
    $dewan1->execute();
    $res1 = $dewan1->get_result();

    if ($res1->num_rows > 0) {
        while ($row = $res1->fetch_assoc()) {
            $id = $row['id'];
            $nama = $row['nama'];
            $isi_pesan = $row['isi_pesan'];
            $kehadiran = $row['kehadiran'];
    ?>
    <div class="card-body p-4  border">
            <div class="d-flex flex-start">
              <div>
                <h6 class="fw-bold mb-1"><?php echo $nama ?>
                <?php
                if ($kehadiran == "Hadir") {
                    echo "<span class='badge bg-info' style='color:white'>$kehadiran</span>";
                } else {
                    echo "<span class='badge bg-warning' style='color:white'>$kehadiran</span>";
                }
                ?>
                </h6>
                <p class="mb-0">
                    <?php echo $isi_pesan ?>
                </p>
              </div>
                <hr class="my-0" />
            </div>
    </div>

        <?php }
    } else { 
    ?>
        <tr>
            <td colspan='7'>Tidak ada data ditemukan</td>
        </tr>
    <?php 
    } 
?>
