<div class="container">
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pendaftar</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">jenis kelamin</th>
                    <th scope="col">Tanggal daftar</th>
                    <th scope="col">Status</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $query="select * from pendaftaran where NISN IS NOT NULL";
            $hasil=mysqli_query($db,$query);
            while ($data=mysqli_fetch_assoc($hasil)) { ?>


                <tr>
                    <td><?= $data['id_user'];?></td>
                    <td><img src="image/<?= $data['foto'] ?>" alt="avatar" width="50px" height="50px"></td>
                    <td><?= $data['nama_lengkap'];?></td>
                    <td><?= $data['jenis_kelamin'];?></td>
                    <td><?= $data['tgl_lahir'];?></td>
                    <td><?= $data['status'];?></td>
                    <td><a href="toadmin.php?p=detailpendaftar&&id=<?= $data['id_user'];?>"
                            class="btn btn-success ">Detail</a>&nbsp;<a
                            href="pages/delete-pendaftar.php?id=<?= $data['id_user'];?>" class="btn btn-danger "
                            onclick="return confirm('apakah anda ingin menghapus data ini')">Delete</a></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>