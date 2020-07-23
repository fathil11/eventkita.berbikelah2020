<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/public-assets/img/logo.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>BERBIKELAH 2020</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,400,300,500,600" rel="stylesheet">
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="/public-assets/css/linearicons.css">
    <link rel="stylesheet" href="/public-assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/public-assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public-assets/css/nice-select.css">
    <link rel="stylesheet" href="/public-assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/public-assets/css/bootstrap.css">
    <link rel="stylesheet" href="/public-assets/css/main.css">
</head>

<body>
    <!-- Start Header Area -->
    <header class="default-header">
        <div class="container">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="index.php"><img src="/public-assets/img/logo.png" width="50px" height="50px" alt=""></a>
                    </div>
                    <div class="main-menubar d-flex align-items-center">
                        <nav class="hide">
                            <a href="/">Home</a>
                            <a href="/daftar">Register</a>
                        </nav>
                        <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    @yield('content')
    <!-- Strat Footer Area -->
    <footer class="section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="text-white text-uppercase mb-20">About Agency</h6>
                        <ul class="footer-nav">
                            <li><a href="#">Managed Website</a></li>
                            <li><a href="#">Manage Reputation</a></li>
                            <li><a href="#">Power Tools</a></li>
                            <li><a href="#">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
                <p class="footer-text m-0">Copyright &copy; 2017 All rights reserved | This template is made with <i
                        class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Developer</a></p>
                <div class="footer-social d-flex align-items-center">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->
    <script src="/public-assets/js/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="/public-assets/js/bootstrap.bundle.min.js"></script>
    <script src="/public-assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/public-assets/js/owl.carousel.min.js"></script>
    <script src="/public-assets/js/jquery.nice-select.min.js"></script>
    <script src="/public-assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/public-assets/js/main.js"></script>
    <script src="/public-assets/js/config.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    @yield('script')
</body>

</html>
