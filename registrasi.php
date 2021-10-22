<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -70%);
    }

    .btn-primary {
        box-shadow: 0 18px 40px -12px #007bff;
    }

    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 390px;
        margin: 6rem auto 8.1rem auto;
        width: 300px;
    }
    </style>

    <title>Registrasi Akun</title>
</head>

<body style="background-color: #007bff;">

    <div class="col-3 center" id="card">
        <h4 class="text-center m-3">REGISTRASI</h4>
        <form action="proses/simpan-registrasi.php" method="POST">
            <div class="input-group mb-3 p-1">
                <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" aria-label="nama"
                    aria-describedby="basic-addon1" required="true">
            </div>
            <div class="input-group mb-3 p-1">
                <input type="email" class="form-control" placeholder="Masukkan Email" name="email" aria-label="email"
                    aria-describedby="basic-addon1" required="true">
            </div>
            <div class="input-group mb-3 p-1">
                <input type="password" class="form-control" placeholder="Masukkan Password" name="password"
                    aria-label="Username" aria-describedby="basic-addon1" required="true">
            </div>
            <div class="bg-light text-center m-2 p-1">
                <button type="submit" name="register" class="btn btn-success btn-block btn-sm mb-3">REGISTRASI</button>
            </div>
            <div class="container">
                <p class="fs-6">Sudah Punya Akun?</p><a href="login.php" class="fs-6 text-secondary">Klik Disini</a>
            </div>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>