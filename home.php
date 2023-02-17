<?php

session_start();

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Peduli Diri</title>
    <!-- Custom CSS -->
    <link href="assets/css/style.min.css" rel="stylesheet">

</head>
<style>
    img {
        width: 150px;
        height: 100%;
    }
</style>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand ms-4 " href="">
                        <span class="logo-text">
                            <img src="assets/img/icon_main.png" alt="">
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <marquee direction="left" scrollamount="10" align="center">Menjaga kesehatan dan kebugaran tubuh merupakan hal yang sangat penting. Hal ini karena dengan memiliki tubuh yang sehat dan bugar dapat mencegah tubuh terserang penyakit</marquee>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mt-md-0 ">
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="home.php" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span class="hide-menu">Home</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="catatan.php" aria-expanded="false"><i class="mdi me-2 mdi-emoticon"></i><span class="hide-menu">Catatan Perjalanan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="isidata.php" aria-expanded="false"><i class="mdi me-2 mdi-earth"></i><span class="hide-menu">Isi Data</span></a></li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-6 link-wrap">
                        <!-- item-->
                        <a href="logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="mdi mdi-power">Logout</i></a>
                    </div>
                </div>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Home</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <h2>Selamat Datang <?php echo $_SESSION['username'] ?> Di Aplikasi Catatan Perjalanan Peduli Diri </h2>

                
            <div class="row">
            <div class="col-lg-12 mb-4 order-0">
            <h5 class="pb-1 mb-4">Informasi Kesehatan</h5>
            <div class="row mb-5">
            <div class="col-md">
            <div class="card mb-3">
            <div class="row g-0">
            <div class="col-md-4">
            <img class="card-img card-img-left" src="assets/img/peduli.png" alt="Card img" />
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">Belajar Mencintai Diri Sendiri</h5>
            <p class="card-text">
            Peduli diri sendiri juga dikenal sebagai self care. Self care dapat diartikan sebagai kegiatan untuk menyeimbangkan hidup dengan memenuhi kebutuhan diri yang bertujuan untuk mempertahankan kehidupan, kesehatan, dan kesejahteraan hidup.
        </p>
<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</div>
                        


            </div>
            <footer class="footer"> © Klik link tersebut untuk melihat lebih lanjut <a href="https://kumparan.com/isabellaa-putri/belajar-mencintai-diri-sendiri-1voQfI1XEbJ">kumparan.com</a> 
            </footer>
        </div>
    </div>
    <div class="col-md">
    <div class="card mb-3">
    <div class="row g-0">

    <div class="col-md-8">

    <div class="card-body">

<h5 class="card-title">Pengertian Virus Corona (COVID-19)</h5>
<p class="card-text">
Infeksi coronavirus merupakan penyakit yang disebabkan oleh virus corona dan menimbulkan gejala utama berupa gangguan pernapasan. Penyakit ini menjadi sorotan karena kemunculannya di akhir tahun 2019 pertama kali di Wuhan, China. Lokasi kemunculannya pertama kali ini, membuat coronavirus juga dikenal dengan sebutan Wuhan virus.  
</p>
<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
<footer class="footer"> © Klik link tersebut untuk melihat lebih lanjut <a href="https://dinkes.bulelengkab.go.id/informasi/detail/artikel/84-penyebab-gejala-dan-pencegahan-virus-corona">dinkes.bulelengkab.com </a> 
            </footer>
</div>
</div>

<div class="col-md-4">

<img class="card-img card-img-right" src="assets/img/corona.png" alt="Card img" />
</div>

    
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/js/custom.js"></script>
</body>

</html>