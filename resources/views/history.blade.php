@extends('layouts.appPage')
@section('content')
    <main class="main">

        <!-- Recent Posts Section -->
        <section id="recent-posts" class="recent-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pilih Game</h2>

            </div><!-- End Section Title -->
    <!-- Search Form -->
    <div class="container" data-aos="fade-up">
        <form action="" method="GET" class="search-form">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control" placeholder="Cari game..." required>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>


            <div class="container">

                <div class="row gy-5">
                    <a href="/kembali" class="readmore stretched-link"><span>Kembali</span><i
                            class="bi bi-arrow-right"></i></a>



            </div>

        </section><!-- /Recent Posts Section -->



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
                            <a class="cta-btn" href="#">Ayo Top Up Sekarang !</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

    </main>
@endsection
