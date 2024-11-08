<!doctype html>
<html class="no-js" lang="id">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Salampuan - Sahabt Anak, Perempuan & Keluarga</title>

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
                            <a class="navbar-brand" href="">
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
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">Tentang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#gallery">Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#blog">Berita</a>
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

        <div id="home" class="header_slider">
            <div class="container-fluid">
                <div class="slider-active">
                    <div class="single_slider bg_cover d-flex align-items-center"
                        style="background-image: url({{asset('web/images/slider-1.jpeg')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="slider_content">
                                        <p data-animation="fadeInUp" data-delay="0.3s">SalamPuan.org</p>
                                        <h2 class="slider_title" data-animation="fadeInUp" data-delay="0.6s">Edukasi Perilaku Hidup Bersih dan Sehat (PHBS) di Lima Sekolah Dasar</h2>
                                        <a class="main-btn" href="#gallery" data-animation="fadeInUp" data-delay="1s">Galeri Kegiatan</a>
                                    </div> <!-- slider content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                    </div> <!-- single slider -->

                    <div class="single_slider bg_cover d-flex align-items-center"
                        style="background-image: url({{asset('web/images/slider-2.jpeg')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="slider_content">
                                        <p data-animation="fadeInUp" data-delay="0.3s">SalamPuan.org</p>
                                        <h2 class="slider_title" data-animation="fadeInUp" data-delay="0.6s">Distribusi Paket Back to School Kit dan Perlengkapan Kesehatan</h2>
                                        <a class="main-btn" href="#gallery" data-animation="fadeInUp" data-delay="1s">Galeri Kegiatan</a>
                                    </div> <!-- slider content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                    </div> <!-- single slider -->

                    <div class="single_slider bg_cover d-flex align-items-center"
                        style="background-image: url({{asset('web/images/slider-3.jpeg')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="slider_content">
                                        <p data-animation="fadeInUp" data-delay="0.3s">SalamPuan.org</p>
                                        <h2 class="slider_title" data-animation="fadeInUp" data-delay="0.6s">Kegiatan Psikososial untuk Meningkatkan Resiliensi Anak</h2>
                                        <a class="main-btn" href="#gallery" data-animation="fadeInUp" data-delay="1s">Galeri Kegiatan</a>
                                    </div> <!-- slider content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                    </div> <!-- single slider -->

                </div> <!-- slider Active -->
            </div> <!-- container fluid -->
        </div> <!-- header slider -->
    </header>

    <!--====== BRAND PART START ======-->
    {{-- <section class="brand_area pt-30 pb-50">
        <div class="container">
            <div class="brand_single d-flex flex-wrap justify-content-center justify-content-md-between">
                <div class="single_brand ">
                    <img src="{{asset('web/images/brand-1.png')}}" alt="brand">
                </div> <!-- single brand -->
                <div class="single_brand">
                    <img src="{{asset('web/images/brand-2.png')}}" alt="brand">
                </div> <!-- single brand -->
                <div class="single_brand">
                    <img src="{{asset('web/images/brand-3.png')}}" alt="brand">
                </div> <!-- single brand -->
                <div class="single_brand">
                    <img src="{{asset('web/images/brand-4.png')}}" alt="brand">
                </div> <!-- single brand -->
                <div class="single_brand">
                    <img src="{{asset('web/images/brand-5.png')}}" alt="brand">
                </div> <!-- single brand -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> --}}

    <!--====== ABOUT PART START ======-->
    <section id="about" class="about_area pt-30 pb-50 blue-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="about_image mt-50">
                        <img src="{{asset('web/images/tes-removebg-preview.png')}}" alt="about image">
                        <div class="about_shape">
                            <img src="{{asset('web/images/shape-1.svg')}}" alt="shape">
                        </div> <!-- about shape -->
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-5">
                    <div class="about_content mt-45">
                        <div class="section_title">
                            <h4 class="sub_title">Tentang Salampuan</h4>
                            <h3 class="title">Sahabat Anak, Perempuan & Keluarga</h3>
                        </div> <!-- section title -->
                        <p>Salampuan adalah Lembaga Sahabat Anak, Perempuan dan Keluarga. Bergerak dan berdaya untuk kemaslahatan anak-anak, perempuan dan keluarga.</p>
                        <h5 class="growth_title mt-25 mb-10">Visi Kami</h5>
                        <p class="mt-0 mb-25">Terciptanya Pemenuhan, Perbaikan, Perlindungan Perempuan dan Anak berbasis Keluarga dan Masyarakat serta Pengokohan Keluarga sebagai pilar Masyarakat</p>
                        <a class="more" href="#">Lihat Profil Singkat<i class="lni lni-chevron-right"></i></a>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART START ======-->
    <section id="services" class="services_area pt-95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Layanan</h4>
                        <h3 class="title">Products and Services</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s"
                        data-wow-delay="0.2s">
                        <div class="services_icon">
                            <i class="lni lni-user"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Peningkatan Kualitas dan Kapasitas</a></h4>
                            <p>Pendidikan Anak dan Remaja, Ketahanan Keluarga, dan Peningkatan Kualitas dan Kapasitas Perempuan di ranah domestik dan ranah publik.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s"
                        data-wow-delay="0.5s">
                        <div class="services_icon">
                            <i class="lni lni-write"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Perlindungan Anak, Perempuan dan Keluarga</a></h4>
                            <p>Melakukan advokasi perlindungan kepada Anak, Remaja, Perempuan dan Keluarga.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s"
                        data-wow-delay="0.8s">
                        <div class="services_icon">
                            <i class="lni lni-coin"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Penelitian & Pelatihan</a></h4>
                            <p>Menyelenggarakan Penelitian, Pelatihan dan Pengembangan terkait Anak, Remaja, Perempuan dan Keluarga.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s"
                        data-wow-delay="0.2s">
                        <div class="services_icon">
                            <i class="lni lni-invest-monitor"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Kerjasama lembaga</a></h4>
                            <p>Menjalin Kerjasama dengan Lembaga Pemerintah dan Swasta baik dalam negeri maupun luar negeri.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s"
                        data-wow-delay="0.5s">
                        <div class="services_icon">
                            <i class="lni lni-investment"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Penerbitan Newsletter</a></h4>
                            <p>Menerbitkan newsletter atau jurnal terkait Anak, Remaja, Perempuan dan Keluarga.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s"
                        data-wow-delay="0.8s">
                        <div class="services_icon">
                            <i class="lni lni-graph"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Konsultasi</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CASE PART START ======-->
    <section id="gallery" class="case_area pt-95 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Kegiatan</h4>
                        <h3 class="title">Galeri Kegiatan</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single_case mt-30">
                        <div class="case_image">
                            <img src="{{asset('web/images/gallery-1.jpeg')}}" height="319px" alt="case">
                        </div>
                        <div class="case_content">
                            <h5 class="case_title"><a href="#">Pembersihan Sekolah Pasca Bencana: Sekolah Berlian</a></h5>
                            {{-- <a class="more" href="#">Read More <i class="lni lni-chevron-right"></i></a> --}}
                        </div>
                    </div> <!-- single case -->
                </div>
                <div class="col-lg-4">
                    <div class="single_case mt-30">
                        <div class="case_image">
                            <img src="{{asset('web/images/gallery-2.jpeg')}}" height="319px" alt="case">
                        </div>
                        <div class="case_content">
                            <h5 class="case_title"><a href="#">Konseling dan Asesmen Psikologis untuk Anak dan Ibu Hamil</a></h5>
                            {{-- <a class="more" href="#">Read More <i class="lni lni-chevron-right"></i></a> --}}
                        </div>
                    </div> <!-- single case -->
                </div>
                <div class="col-lg-4">
                    <div class="single_case mt-30">
                        <div class="case_image">
                            <img src="{{asset('web/images/slider-2.jpeg')}}" height="319px" alt="case">
                        </div>
                        <div class="case_content">
                            <h5 class="case_title"><a href="#">Distribusi Paket Back to School Kit dan Perlengkapan Kesehatan</a></h5>
                            {{-- <a class="more" href="#">Read More <i class="lni lni-chevron-right"></i></a> --}}
                        </div>
                    </div> <!-- single case -->
                </div>
            </div> <!-- row -->
        </div> <!-- container fluid -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== BLAG PART START ======-->
    <section id="blog" class="blog_area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Berita Terbaru</h4>
                        <h3 class="title">News & Articles</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">

                @forelse ($berita as $blog)
                <div class="col-lg-6">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="{{ $blog->image }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="blog_content">
                            <h4 class="blog_title">
                                <a href="{{ route('front.post.details', $blog->slug) }}">{{ substr($blog->title, 0, 66) }}{{ strlen($blog->title) > 66 ? '...' : '' }}</a>
                            </h4>
                            <p>
                                {{ substr($blog->content, 0, 66) }}{{ strlen($blog->content) > 66 ? '...' : '' }}
                            </p>
                            <a class="more" href="{{ route('front.post.details', $blog->slug) }}">Read More
                                <i class="lni lni-chevron-right"></i>
                            </a>
                        </div>
                    </div>  <!-- single_blog -->
                </div>
                @empty
                <p>Belum ada berita</p>
                @endforelse

                {{-- <div class="col-lg-6">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="{{asset('web/images/blog-1.jpg')}}" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="blog_title"><a href="#">After Action Review (AAR) Respon Banjir Ramah Anak di Gorontalo</a></h4>
                            <p>Pada bulan Juli hingga September 2024, Salam Puan bersama mitra Save the Children Indonesia (STC), telah melaksanakan rangkaian kegiatan penting dalam upaya merespon dampak bencana banjir yang ...</p>
                            <a class="more" href="#">Read More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>  <!-- single_blog -->
                </div> --}}
                {{-- <div class="col-lg-6">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="{{asset('web/images/blog-2.jpg')}}" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="blog_title"><a href="#">How to Make Your Strategy Work</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum Lorem ipsum doaconsetet dorem empor inviduntsadipscing elitr, sed diamn numy eirmo tempor invidunt empor inviduntsadipscing elitr ...</p>
                            <a class="more" href="#">Read More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>  <!-- single_blog -->
                </div> --}}

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

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
