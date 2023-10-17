@extends('portal.layouts.templates')

@section('content')

<style>
    body {
        margin: 0;
        /* Hapus margin dari body */
        padding: 0;
        /* Hapus padding dari body */
    }

    .container {
        padding: 0;
        /* Hapus padding dari elemen .container */
    }

/* Section 1: Banner */
    .banner-section {
        font-family: 'Sora', sans-serif;
        background-image: url('images/banner1.jpg');
        background-size: cover;
        background-position: center;
        color: #000;
        padding: 150px 0;
    }

    .banner-section h1 {

        color: #fff;
    }

    .banner-section h1.l {

        color: #fff;
    }

    /* Section 2: Floating Container */
    .floating-container {
        font-family: 'Sora', sans-serif;
    }

    .floating-container {
        background-color: #F5F5F5;
        border-radius: 10px;
        padding: 5px;
        margin-top: -70px;
        /* Atur margin negatif untuk tumpang tindih dengan Section 1 */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 1300px;
        /* Atur lebar maksimal */
        margin-left: auto;
        margin-right: auto;
    }

    a:hover i.fab.fa-whatsapp {
    color: #25d366; /* Warna hijau WhatsApp */
}

    /* Section 3: Video and Greetings */
    .video-section {
        font-family: 'Sora', sans-serif;
    }

    /* Section 4: Card Carousel */
    .card-section {
        font-family: 'Sora', sans-serif;
    }
</style>

<!-- Section 1: Banner -->
<section class="banner-section">
    <div class="container text-right my-5">
        <h1><b>#Mari</b></h1>
        <h1><span style="color: #51604F;"><b>Jelajahi</b></span></h1>
        <h1><b>Nusantara</b></h1>
        <p>Jelajahi indahnya <br>
            ladscape Nusantara
        </p>

    </div>
</section>

<!-- Section 2: Floating Container -->
<section class="floating-container">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <h5>Selamat datang di,</h5>
                <h2>Mandiri Pribumi</h2>
                <p>Selamat datang di Travel Adventures, pengalaman liburan yang tak terlupakan!</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <i class="fas fa-hiking fa-3x"></i>
                <h3>Ekspedisi</h3>
                <p>Jelajahi alam dengan berbagai destinasi ekspedisi.</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <i class="fas fa-umbrella-beach fa-3x"></i>
                <h3>Pantai</h3>
                <p>Nikmati matahari dan pantai yang indah.</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <i class="fas fa-plane fa-3x"></i>
                <h3>Perjalanan Udara</h3>
                <p>Terbang ke destinasi impian Anda dengan kenyamanan.</p>
            </div>
        </div>
        <hr> <!-- Garis horizontal di bawah konten row -->
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <h2><b>#Mari Jelajah Nusantara</b></h2>
            </div>
            <div class="col-md-6 col-lg-6 d-flex justify-content-end align-items-center">
                <a href="https://wa.me/your-whatsapp-number" target="_blank" style="text-decoration: none; color: inherit;">
                    <i class="fab fa-whatsapp fa-3x"></i>
                    <span style="margin-left: 12px;"><h2><b>Pesan Sekarang</b></h2></span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Section 3: Video and Greetings -->
<section class="video-section">
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/your-video-id" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-6">
                <h2>Greetings Word yang Lebih Panjang</h2>
                <p>Selamat datang di Travel Adventures, kami menyediakan pengalaman liburan yang tak terlupakan. Dengan
                    berbagai destinasi dan pilihan perjalanan, kami siap membuat impian liburan Anda menjadi kenyataan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Card Carousel -->
<section class="card-section">
    <div class="container my-5">
        <h2>Penawaran Jasa</h2>
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="service1.jpg" class="card-img-top" alt="Service 1">
                                <div class="card-body">
                                    <h5 class="card-title">Paket Ekspedisi</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Mulai dari $500</h6>
                                    <p class="card-text">Jelajahi alam dengan paket ekspedisi kami yang menarik.</p>
                                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 dan 3 serupa dengan Card 1 -->
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
@endsection