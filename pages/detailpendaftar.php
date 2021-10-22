<div class="container">
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Identitas Pendaftar</h1>
    </div>
    <?php
    // melakukan query untuk mengambil data pendaftar
        $query="select * from pendaftaran where id_user='$_GET[id]'";
        $mysqli=mysqli_query($db, $query);
        $data=mysqli_fetch_assoc($mysqli);

        ?>
    <div class="row">
        <!-- menampilkan foto pendaftar -->
        <div class="col-3">
            <img src="image/<?= $data['foto']?>" class="img-thumbnail" height="200px" width="300px">
        </div>

        <!-- menampilkan data pendaftar -->
        <div class="col-8">
            <pre>
            <h4>NISN             : <?= $data['NISN']; ?></h4>
            <h4>Nama             : <?= $data['nama_lengkap'] ?> </h4>
            <h4>Tempat/tgl lahir :<?= $data['tempat_lahir']; ?>, <?= $data['tgl_lahir'] ?> </h4>
            <h4>Alamat           : <?= $data['alamat'];?> </h4>
            <h4>Jenis kelamin    : <?= $data['jenis_kelamin'];?> </h4>
            <h4>Agama            : <?= $data['agama']?></h4>
            <h4>No telepon       : <?= $data['no_hp'];?></h4>
            <h4>asal sekolah     : <?= $data['asal_sekolah'];?></h4>
            </pre>
        </div>
    </div>

    <?php ?>
    <hr>
    <h1 class="h2 text-center">Riwayat Nilai </h1>
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

    <!-- Melakukan konfirmasi pada pendaftar -->
    <h1 class="h2 text-center">Konfirmasi penerimaan </h1>
    <hr>
    <div class="row text-center">
        <div class="col-4">
            <form method="post" action="proses/terima.php">
                <input type="hidden" name="idsiswa" value="<?= $data['NISN']; ?>">
                <input type="submit" class="btn btn-success btn-lg" value="Terima">
            </form>
        </div>
        <div class="col-4">
            <form method="post" action="proses/cadangan.php">
                <input type="hidden" name="idsis" value="<?= $data['NISN']; ?>">
                <input type="submit" class="btn btn-primary btn-lg" value="Cadangan ">
            </form>
        </div>
        <div class="col-4">
            <form method="post" action="proses/tidakditerima.php">
                <input type="hidden" name="idsi" value="<?= $data['NISN']; ?>">
                <input type="submit" class="btn btn-warning btn-lg" value="Tidak di terima">
            </form>
        </div>
    </div>

    <?php ?>
    <br>
</div>
</div>