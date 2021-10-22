<html>

<head>
    <title>Halaman Login</title>

    <!-- Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
    body {
        background-color: #7a58ff;
        font-family: "Segoe UI";
    }

    #wrapper {
        background-color: #fff;
        width: 400px;
        height: 330px;
        margin-top: 120px;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        border-radius: 4px;
    }

    input[type=text],
    input[type=password] {
        border: 1px solid #ddd;
        padding: 10px;
        width: 95%;
        border-radius: 2px;
        outline: none;
        margin-top: 10px;
        margin-bottom: 20px;
    }

    label,
    h1 {
        text-transform: uppercase;
        font-weight: bold;
    }

    h1 {
        text-align: center;
        font-size: 30px;
        color: #7a58ff;
    }

    button {
        border-radius: 2px;
        padding: 10px;
        width: 120px;
        background-color: #7a58ff;
        border: none;
        color: #fff;
        font-weight: bold;
    }

    .error {
        background-color: #f72a68;
        width: 400px;
        height: auto;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        border-radius: 4px;
        color: #fff;

    }
    </style>
</head>

<body>
    <div id="wrapper">
        <form method="post" action="cek_login.php">
            <h1>Silahkan Login</h1>
            <label>Email</label>
            <input type="text" name="email" placeholder="Masukkan Email" required="" autofocus="">
            <label>Password </label>
            <input type="password" name="password" placeholder="Masukkan Password" required="">
            <div class="row">
                <div class="col-6">
                    <button type="submit" name="submit">Log In</button>
                </div>
                <div class="col-6">
                    <a href="registrasi.php" " class=" btn btn-lg btn-primary">Register</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>