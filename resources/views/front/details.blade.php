<!doctype html>
<html class="no-js" lang="id">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Salampuan - Sahabat Anak, Perempuan & Keluarga</title>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('web/css/slick.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('web/css/lineicons.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('web/css/animate.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('web/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">

</head>

<body>

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== HEADER PART START ======-->
    <header class="header_area">
        <div class="header_navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img src="{{asset('logo.png')}}" style="height: 45px;" alt="salampuan.org">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/profil">Tentang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/#services">Layanan</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="/#blog">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/galeri-kegiatan">Kegiatan</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" data-scroll-nav="0" href="#contact-form">Hubungi Kami</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

    </header>

    <div class="growth_area pt-65 pb-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="growth_content mt-100">
                        <div class="section_title ">
                            <h4 class="sub_title">{{ TanggalID($post->publish) }}</h4>
                            <h3 class="title">{{ $post->title }}</h3>
                        </div> <!-- section title -->

                        <div class="mt-25 pb-15">
                            <img src="{{ $post->image }}" alt="{{ $post->title }}" width="100%" height="650px">
                        </div>
                        <p>{!! Purifier::clean($post->content) !!}</p>

                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="growth_shape">
            <img class="shape" src="{{asset('web/images/shape-2.svg')}}" alt="shape">
        </div>
    </div>

    <!--====== FOOTER PART START ======-->
    <footer id="footer" class="footer_area">
        <div class="container">
            <div class="footer_wrapper pt-50 pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 order-md-1 order-lg-1">
                        <div class="footer_about mt-50">
                            <h3>Alamat Kantor</h3>
                            <ul class="address-widget">
                                <li>
                                    <div class="mt-20">
                                        Jalan Irian, Kelurahan Liluwo, Kota Tengah, <br>
                                        Kota Gorontalo, Provinsi Gorontalo. <br>
                                        Indonesia.
                                    </div>
                                </li>
                                <li class="mt-10">
                                    <a href="mailto:salampuan@gmail.com">salampuan@gmail.com</a>
                                </li>
                                <li>
                                    <a href="https://www.salampuan.org">www.salampuan.org</a>
                                </li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-4 col-md-12 order-md-1 order-lg-1">
                        <div class="footer_about mt-50">
                            <h3>Sosial Media</h3>
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="https://www.instagram.com/salampuan/"><i class="lni lni-instagram-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-4 col-md-6 order-md-2 order-lg-3">
                        <div class="footer_form mt-45">
                            <h4 class="footer_title">Hubungi Kami</h4>
                            <form id="contact-form" action="#">
                                <div class="single_form">
                                    <input type="text" placeholder="Name" name="">
                                </div> <!-- single form -->
                                <div class="single_form">
                                    <input type="text" placeholder="Email" name="">
                                </div> <!-- single form -->
                                <div class="single_form">
                                    <textarea placeholder="Message" name=""></textarea>
                                </div> <!-- single form -->
                                <p class="form-message"></p>
                                <div class="single_form">
                                    <button class="main-btn">Kirim</button>
                                </div> <!-- single form -->
                            </form>
                        </div> <!-- footer form -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer wrapper -->
            <p class="text-center pb-30">&copy; 2024. SalamPuan.org | Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a> </p>
        </div> <!-- container -->
    </footer>

    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>


    <!--====== Jquery js ======-->
    <script src="{{asset('web/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('web/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('web/js/popper.min.js')}}"></script>
    <script src="{{asset('web/js/bootstrap.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('web/js/slick.min.js')}}"></script>

    <!--====== Appear js ======-->
    <script src="{{asset('web/js/jquery.appear.min.js')}}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('web/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('web/js/scrolling-nav.js')}}"></script>

    <!--====== WOW js ======-->
    <script src="{{asset('web/js/wow.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('web/js/main.js')}}"></script>

</body>

</html>
