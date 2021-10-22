<div class="container">
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Formulir Pendaftaran</h1>
    </div>

    <!-- Formulir pendaftar -->
    <form method="post" action="proses/simpan-pendaftaran.php" enctype="multipart/form-data">
        <input type="hidden" name="iduser" value="<?= $_SESSION['id_user']?>">
        <div class="row">
            <div class="col-3">
                <div class="mb-3">
                    <label for="NISN" class="form-label">NISN : </label>
                    <input type="text" name="nisn" class="form-control" id="NISN">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="Namalengkap" class="form-label">Nama lengkap : </label>
                    <input type="text" name="namasiswa" class="form-control" id="Namalengkap">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="mb-3">
                    <label for="NISN" class="form-label">Tempat Lahir : </label>
                    <input type="text" name="tempatlahir" class="form-control" id="NISN">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="Namalengkap" class="form-label">Tanggal Lahir : </label>
                    <input type="date" name="tgllahir" class="form-control" id="Namalengkap">
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat :</label>
                <textarea name="alamatsiswa" id="alamat" class="form-control" cols="10" rows="5"></textarea>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioDefault1"
                    value="laki-laki">
                <label class="form-check-label" for="flexRadioDefault1">
                    Laki - Laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioDefault2"
                    value="perempuan" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Perempuan
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Agama :</label>
                    <select name="agama" class="form-select" aria-label="Default select example">
                        <option selected>-pilih agama-</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="no telpon" class="form-label">No telepon : </label>
                    <input type="text" name="notelpon" class="form-control" id="no telpon">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Asal Sekolah :</label>
            <input type="text" name="asalsekolah" class="form-control">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto : </label>
            <input name="foto" class="form-control" type="file" id="formFile">
        </div>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Masukkan Nilai</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Bahasa Indonesia :</label>
                    <input type="text" name="bindo" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Matematika :</label>
                    <input type="text" name="matematika" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Bahasa Inggris :</label>
                    <input type="text" name="bing" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">IPA :</label>
                    <input type="text" name="mapil" class="form-control">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan data</button>
    </form>
    <!-- akhir formulir -->

    <hr>
</div>