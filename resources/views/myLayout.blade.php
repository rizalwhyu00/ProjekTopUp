<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Nova Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Nova
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Top Up</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/beranda" class="active">Home<br></a></li>
                    <li><a href="/about">Tentang</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li class="dropdown"><a href="#"><span>Top Up</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Mobile Legends</a></li>
                            <li><a href="#">Free Fire</a></li>
                            <li><a href="#">Genshin Impact</a></li>
                            <li><a href="#">Apex Legends</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="assets/img/gambar1.jpeg" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <h1 data-aos="fade-up">Segerahlah Top Up!</h1>
                        <blockquote data-aos="fade-up" data-aos-delay="100">
                            <p>Tingkatkan Level Game-mu dengan Top-Up Cepat, Aman, dan Harga Terbaik! Nikmati Promo
                                Spesial dan Bonus Menarik Hanya di
                                TopUpinAja!
                            </p>
                        </blockquote>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="/lainnya" class="btn-get-started">Top Up</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Why Us Section -->
        <section id="why-us" class="why-us section">

            <div class="container">

                <div class="row g-0">

                    <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/beranda/g2.jpg" alt="">
                    </div>

                    <div class="col-xl-7 slides position-relative" data-aos="fade-up" data-aos-delay="200">

                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "centeredSlides": true,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
                            </script>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Selamat Datang,</h3>
                                        <p>Di TopUpinAja! Temukan cara paling mudah dan cepat untuk top-up game
                                            favoritmu.
                                            Kami siap memberikan pengalaman terbaik untuk mendukung petualangan
                                            gaming-mu!"</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">terdapat banyak fitur</h3>
                                        <p> unggulan kami termasuk transaksi instan, harga kompetitif, berbagai metode
                                            pembayaran, dan dukungan
                                            pelanggan 24/7. Kami hadir untuk memastikan pengalaman gaming-mu tetap
                                            lancar dan menyenangkan!</p>
                                    </div>
                                </div><!-- End slide item -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                </div>

            </div>

        </section><!-- /Why Us Section -->

        <!-- Recent Posts Section -->
        <section id="recent-posts" class="recent-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pilih Game</h2>

            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">


                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/game/MLBB_icon.jpg" class="img-fluid" alt="">
                            </div>
                            <h3 class="post-title">Mobile Lagends</h3>
                            <a href="blog-details.html" class="readmore stretched-link"><i class=""></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/game/PUBG.png" class="img-fluid" alt=""></div>
                            <h3 class="post-title">PUBGM</h3>
                            <a href="blog-details.html" class="readmore stretched-link"><i class=""></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/game/genshin.png" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Genshin Impact</h3>
                            <a href="blog-details.html" class="readmore stretched-link"><i class=""></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/game/hok.png" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Honor Of Kings</h3>
                            <a href="blog-details.html" class="readmore stretched-link"><i class=""></i></a>
                        </div>
                    </div>

                    <a href="/lainnya" class="readmore stretched-link"><span>Lainnya</span><i
                            class="bi bi-arrow-right"></i></a>
                    {{-- <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt=""></div>
                            <div class="meta">
                                <span class="post-date">Tue, Sep 16</span>
                                <span class="post-author"> / Mario Douglas</span>
                            </div>
                            <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
                            <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum
                                earum quia eligendi...</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    --}}
                </div>

            </div>

        </section><!-- /Recent Posts Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Top up di TopUpinAja</h2>
                <p>TopUpinAja: Website top-up tercepat dan terpercaya di Indonesia</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="bi bi-alarm" style="color: #f57813;"></i></div>
                        <div>
                            <h4 class="title">Bayar dalam hitungan detik</h4>
                            <p class="description">Hanya dibutuhkan beberapa detik saja untuk menyelesaikan pembayaran
                                di TopUpinAja karena situs kami berfungsi dengan baik dan mudah digunakan.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="bi bi-wallet2" style="color: #15a04a;"></i>
                        </div>
                        <div>
                            <h4 class="title">Metode pembayaran terbaik</h4>
                            <p class="description">kami menawarkan bagitu banyak pilihan pembayaran mulai dari potongan
                                pulsa,
                                e-walet,bank taransfer dan pembayaran di mini market terdekat.
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="bi bi-percent" style="color: #d90769;"></i></div>
                        <div>
                            <h4 class="title">Promosi-promosi terbaik</h4>
                            <p class="description">Penggemar game dapat bergantung pada TopUpinAja karena kami
                                memberikan penawaran menarik, diskon dan kode item dari
                                promosi game yang disukai kamu</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon flex-shrink-0"><i class="bi bi-gem" style="color: #15bfbc;"></i></div>
                        <div>
                            <h4 class="title">Pengiriman Instan</h4>
                            <p class="description">Ketika kamu melakukan top-up di TopUpinAja, item atau barang yang
                                kamu beli akan selalu dikirim ke akun kamu secara instan
                                dan cepat, tanpa tertunda.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i>
                        </div>
                        <div>
                            <h4 class="title">Layanan pelanggan cepat dan ramah</h4>
                            <p class="description">Tim CS terbaik kami selalu siap membantumu kapanpun, di manapun.
                                <a href="contact" class="readmore stretched-link"><u>Hubungi kami</u><i></i></a>
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="assets/img/cta-bg.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Top Up Cepat, Tanpa Ribet!</h3>
                            <p>Mau topUp tanpa ribet dengan banyak pilihan pembayaran? Di TopUpinAja karena disini
                                terdapat banyak fitur pembayaran dan pastinya cepat,mudah dan amana hanya disini</p>
                            <a class="cta-btn" href="/lainnya">Ayo Top Up Sekarang !</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

    </main>

    <footer id="footer" class="footer light-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">Nova</span>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Tautan</h4>
                        <ul>
                            <li><a href="/home">Menu</a></li>
                            <li><a href="/about">Tentang</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    {{-- <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div> --}}

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Hubungi Kami</h4>
                        <p>TopUpinAja</p>
                        <p>Pekanbaru, 25285</p>
                        <p>Indonesia</p>
                        <p class="mt-4"><strong>WA:</strong> <span>+62 822-1007-6864</span></p>
                        <p><strong>Email:</strong> <span>rizal23ti@mahasiswa.pcr.ac.id</span></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container copyright text-center">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Nova</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
                    href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>