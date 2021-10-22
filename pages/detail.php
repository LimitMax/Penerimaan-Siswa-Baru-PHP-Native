<!-- css -->
<div class="container m-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 style="text-align: center;">DETAIL PENDAFTARAN</h3>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-5">

                <a href="cetakpendaftaran.php" type="button" class="btn btn-sm btn-primary">Cetak
                    Pendaftaran</a>
            </div>

        </div>
    </div>
    <?php
    // melakukan query untuk mengambil data pada data pendaftaran
        $query="select * from pendaftaran where id_user='$_GET[id]'";
        $mysqli=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($mysqli);

        ?>
    <div class="row">
        <div class="col-3">
            <img src="image/<?= $data['foto']?>" class="img-thumbnail" height="200px" width="300px">
        </div>
        <!-- Menampilkan data pendaftar -->
        <div class="container col-8">
            <pre class="p-2">
            <h4>NISN             : <?= $data['NISN']; ?></h4>
            <h4>Nama             : <?= $data['nama_lengkap'] ?> </h4>
            <h4>Tempat/tgl lahir : <?= $data['tempat_lahir']; ?>, <?= $data['tgl_lahir'] ?> </h4>
            <h4>Alamat           : <?= $data['alamat'];?> </h4>
            <h4>Jenis kelamin    : <?= $data['jenis_kelamin'];?> </h4>
            <h4>Agama            : <?= $data['agama']?></h4>
            <h4>No telepon       : <?= $data['no_hp'];?></h4>
            <h4>Asal Sekolah     : <?= $data['asal_sekolah'];?></h4>
            </pre>
        </div>
    </div>

    <?php ?>
    <div>
        <hr>
        <h3 class="text-center">Riwayat Nilai</h3>
        <hr>
        <?php
        // melakukan query untuk mengambil data nilai
      $query2="select * from nilai where id_pendaftar='$data[id_pendaftar]'";
      $mysqli2=mysqli_query($db,$query2);
        $data2=mysqli_fetch_assoc($mysqli2);
        ?>

        <!-- menampilkan data nilai -->
        <table class="table table-success table-striped container">
            <tr class="text-center">
                <td>Bahasa Indonesia</td>
                <td>Bahasa Inggris</td>
                <td>Matematika</td>
                <td>IPA</td>
                <td>Total Nilai</td>
            </tr>
            <tr class="text-center">
                <td><?= $data2['b_indo']; ?></td>
                <td><?= $data2['mtk'] ?> </>
                <td><?= $data2['b_inggris']; ?></td>
                <td><?= $data2['pilihan'] ?> </td>
                <td><?= $data2['b_indo'] + $data2['mtk'] + $data2['b_inggris'] + $data2['pilihan']; ?>
                </td>
            </tr>
        </table>
        <br>
        <hr>
        <!-- status pendaftar -->
        <h1 class="h2 text-center text-success">STATUS : <?= $data['status']; ?> </h1>
        <hr>

    </div>

    <?php ?>
    <br>
</div>