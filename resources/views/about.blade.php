@extends('layouts.appLayout')
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/all/g1.jpg);">
            <div class="container">
                <h1>Tentang</h1>
                <nav class="breadcrumbs">
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5">
                        <img src="assets/img/tentang/g1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang kami</h3>
                            <p>
                                Selamat datang di TopUpinAja!! </br>

                                Kami adalah platform terpecaya utnuk melakukan Top Up game favorit anda
                                dengan mudah, cepat dan aman. Dibangun dengan misi untuk memberikan pengalaman
                                terbaik bagi para gamer, TopUpinAja hadir untuk memastikan anda mendapatkan
                                layanan yang memudahkan pengisian saldo game tanpa hambatan.
                            </p>

                            <h2>Apa yang kami tawarkan?</h2>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Kecepat & Keamanan</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Pilihan game terlengkap</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Harga Konpotitif</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Layanan 24/7</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Why Us Section -->
        <section id="why-us" class="why-us section">

            <div class="container">

                <div class="row g-0">

                    <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/tentang/g3.jpeg" alt="">
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
                                        <h3 class="mb-3">Visi</h3>
                                        <p>Menjadi platform top Up game terbaik yang mendukung komunitas gamer untul
                                            terus berkembang dan menikmati pengalaman bermain game yang tak terlupakan
                                        </p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Misi</h3>
                                        <p>1. Kami memberikan layanan Top Up yang aman, cepat dan mudah diakses </br>
                                            2. Mendukung lamunitas gamer dengan berbagai promo menarik dan layanan
                                            berkualitas </br>
                                            3. Membina hubungan dengan pengguna melalui pelayanan yang ramah dan responsif
                                        </p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Necessitatibus suscipit non voluptatem quibusdam</h3>
                                        <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti laborum
                                            soluta nihil est. Eum similique neque autem ut.</h4>
                                        <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at voluptatem.
                                            Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui animi animi rerum.
                                        </p>
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

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="assets/img/cta-bg.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Terima Kasih</h3>
                            <p>Telah mempercayakan kebutuhan TopUp game anda kepada TopUpinAja. Kami berkomitmrn untuk terus
                                berinovasi dan memberikan layanan terbaik untuk anda.</p>
                        </div>
                    </div>
                </div>
            </div>

    </main>
@endsection
