<?php

session_start();
//Ambil Koneksi
include'koneksi.php';


$tgl=date('Y-m-d');
if(isset($_SESSION['sesi'])){
?>
<!doctype html>
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Halaman Admin</title>

    <!-- Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Template Style CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- LineAwesome CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

</head>

<body>

    <!-- Topbar -->
    <div class="topbar transition" style="background-color: #EDF2F7;">
        <div class="bars">
            <button type="button" class="btn transition" id="sidebar-toggle">
                <i class="las la-bars"></i>
            </button>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <div class="dropdown">
                        <div class="dropdown-toggle" id="dropdownProfile" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div id="nama-user" class="las la-home text-dark">Hai <?php echo$_SESSION['sesi']; ?>!</div>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownProfile">

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">
                                <i class="las la-sign-out-alt mr-2"></i> Sign Out
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
    <!-- End Topbar -->

    <!-- Sidebar And Items-->
    <div class="sidebar transition">
        <div class="logo">
            <h4 class="text-left">PSB SMAN Se-Indonesia</h4>
        </div>

        <!-- Start Menu -->
        <div class="sidebar-items">
            <hr>
            <ul>
                <!-- Title Header  -->
                <p class="menu">Navigation</p>

                <li>
                    <a href="toadmin.php?p=beranda" class="transition active">
                        <i class="las la-home"></i>
                        <span>Dashoard</span>
                    </a>
                </li>

                <!-- Title Header  -->
                <p class="menu">STARTER</p>

                <li>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#starter-layout" aria-expanded="false">
                        <i class="las la-columns"></i>
                        <span>Data</span>
                        <i class="las la-angle-down toggle-right"></i>
                    </a>
                    <div class="collapse btn-toggle-submenu" id="starter-layout">

                        <ul class="btn-toggle-nav">
                            <li><a href="toadmin.php?p=datapendaftar">Data Pendaftar</a></li>
                            <li><a href="toadmin.php?p=pendaftar">Jumlah Pendaftar</a></li>
                        </ul>

                    </div>
                </li>

                <li>
                    <a href="logout.php" class="transition active">
                        <i class="las la-sign-out-alt mr-2"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>

        </div><!-- End Start Menu -->

    </div>
    <!-- End Sidebar -->

    <!-- Sidebar overlay-->
    <div class="sidebar-overlay"></div>

    <!-- Start Content -->
    <div class="content transition">
        <?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
    </div>
    <!-- End  Start Content -->

    <!--Jquery-3.5.1 Js -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
}
else {
	header('location:depan.php');
}
?>