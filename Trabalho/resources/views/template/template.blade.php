<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Meu Restaurante</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="/assets/img/favicon.png" rel="icon">
        <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>

    <body>

        <!-- ======= Top Bar ======= -->
        <div id="topbar" class="d-flex align-items-center fixed-top">
            <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+55 (14)99999-9999</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span> Seg-Sáb: 11h - 23h</span></i>
            </div>
            </div>
        </div>

        <!-- ======= Header ======= -->
            <header id="header" class="fixed-top d-flex align-items-cente">
                <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

                <h1 class="logo me-auto me-lg-0"><a href="/">Meu restaurante</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="/assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                    <li><a class="nav-link scrollto" href="/">Página inicial</a></li>
                    <li><a class="nav-link scrollto" href="/menu">Menu</a></li>
                    <li><a class="nav-link scrollto" href="/especialidades">Especialidades da casa</a></li>
                    <li><a class="nav-link scrollto" href="/evento">Eventos</a></li>
                    <li><a class="nav-link scrollto" href="/galeria">Galeria</a></li>
                    <li><a class="nav-link scrollto" href="/chefs">Chefs</a></li>
                    <li><a class="nav-link scrollto" href="/quemsomos">Sobre nós</a></li>
                    <li><a class="nav-link scrollto" href="/contato">Contato</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
                <a href="/reserva" class="book-a-table-btn scrollto d-none d-lg-flex">Faça sua reserva</a>
                </div>
            </header><!-- End Header -->
            <main id="main">
                @yield('content')
            </main>
            <!-- ======= Footer ======= -->
            <footer id="footer">

                <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Meu Restaurante</span></strong>. Todos os direitos reservados.
                </div>
                </div>
            </footer><!-- End Footer -->

            <div id="preloader"></div>
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

            <!-- Vendor JS Files -->
            <script src="/assets/vendor/aos/aos.js"></script>
            <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="/assets/vendor/php-email-form/validate.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

            <!-- Template Main JS File -->
            <script src="/assets/js/main.js"></script>

    </body>

</html>
