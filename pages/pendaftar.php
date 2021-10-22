<div class="container">
    <div class="text-center p-4">
        <h1 class="h2">Data Jumlah Pendfatar</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tanggal daftar</th>
                </tr>
            </thead>
            <tbody>
                <?php

                // melakukan query untuk melihat data jumlah pendaftar
            $query="select * from user where kategori='siswa'";
            $hasil=mysqli_query($db,$query);
            while ($data=mysqli_fetch_assoc($hasil)) { ?>

                <!-- menampilkan jumlah pendaftar -->
                <tr>
                    <td><?= $data['id_user'];?></td>
                    <td><?= $data['nama_lengkap'];?></td>
                    <td><?= $data['email'];?></td>
                    <td><?= $data['tgl_daftar'];?></td>

                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>