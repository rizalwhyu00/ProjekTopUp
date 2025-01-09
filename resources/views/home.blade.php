@extends('layouts.appPage')
@section('content')
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
                            <h3 class="post-title">Mobile Legends</h3>
                            <a href="#" class="readmore stretched-link"><i class=""></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/game/PUBG.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="post-title">PUBGM</h3>
                            <a href="#" class="readmore stretched-link"><i class=""></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/game/genshin.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="post-title">Genshin Impact</h3>
                            <a href="#" class="readmore stretched-link"><i class=""></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/game/hok.png" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Honor Of Kings</h3>
                            <a href="#" class="readmore stretched-link"><i class=""></i></a>
                        </div>
                    </div>
                    <a href="/lainnya" class="readmore stretched-link"><i class="bi bi-arrow-right"><span>
                                Lainnya</span></i></a>
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
@endsection
