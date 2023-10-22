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

    .title {
        font-size: 32px;
        /* Atur ukuran font */
        color: #000;
        /* Warna teks */
        margin-bottom: 20px;
        /* Jarak bawah dari judul */
        font-weight: bold;
        /* Tebal */
        text-transform: uppercase;
        /* Huruf kapital */
        text-align: center;
        /* Pusatkan horizontal */
        letter-spacing: 2px;
        /* Spasi antar huruf */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        /* Efek bayangan teks */
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
        box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
        max-width: 1300px;
        /* Atur lebar maksimal */
        margin-left: auto;
        margin-right: auto;
    }


    a:hover i.fab.fa-whatsapp {
        color: #25d366;
        /* Warna hijau WhatsApp */
    }

    .tagline p {
        font-size: 24px;
        color: #000;
    }

    .tagline p span {
        color: red;
    }


    /* Section 3: Video and Greetings */
    .video-section {
        font-family: 'Sora', sans-serif;
    }

    /* Section 4: Card Carousel */
    .card-section {
        font-family: 'Sora', sans-serif;
    }

    .card-vertical {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 200px;
        /* Sesuaikan dengan tinggi card yang diinginkan */
    }

    .card {
        max-width: 100%;
        /* Sesuaikan lebar maksimal card sesuai kebutuhan */
    }

    .card-container {
        width: 100%;
        max-width: 18rem;
        /* Sesuaikan dengan lebar maksimal card */
        margin-right: 20px;
        /* Atur jarak antara card */
        margin-bottom: 20px;
        /* Atur jarak bawah antara card */
    }

    .card-img-top {
        max-width: 100%;
        height: auto;
    }

    .card-title {
        font-size: 1.25rem;
        /* Atur ukuran judul sesuai kebutuhan */
        margin-bottom: 0.25rem;
        /* Tambahkan margin bawah jika diperlukan */
    }

    .floating-tagline {
        box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
    }

    .card-subtitle {
        font-size: 1rem;
        /* Atur ukuran subjudul sesuai kebutuhan */
        margin-bottom: 0.5rem;
        /* Tambahkan margin bawah jika diperlukan */
    }

    .card-text {
        font-size: 0.875rem;
        /* Atur ukuran teks sesuai kebutuhan */
        margin-bottom: 1rem;
        /* Tambahkan margin bawah jika diperlukan */
    }

    .btn-primary {
        font-size: 0.875rem;
        /* Atur ukuran teks tombol sesuai kebutuhan */
    }

    .carousel-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50%;
        /* Sesuaikan tinggi container */
    }

    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.4);
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        font-size: 20px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        background-color: #2622DE;
        /* Warna latar belakang pada hover */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        display: inline-block;
    }

    /* Styling for the previous button */
    .carousel-control-prev {
        left: 10px;
    }

    /* Styling for the next button */
    .carousel-control-next {
        right: 10px;
    }

    /* Section 5: Mitra Kami */

    .mitra-container {
        display: flex;
        background-color: gainsboro;
        justify-content: center;
        align-items: center;
        overflow-x: auto;
        margin-left: auto;
        margin-right: auto;
        padding: 20px 0;
        border: 1px solid #2622DE;
        border-radius: 10px;
    }

    .mitra-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 10px;
        /* Atur jarak antar bagian */
        max-width: 800px;
        /* Atur lebar maksimum container */
        margin: 0 auto;
        /* Pusatkan horizontal */
        padding: 30px;
    }

    .mitra-cell {
        display: flex;
        justify-content: flex-start;
        /* Ratakan gambar ke kiri */
        align-items: center;
        height: 80px;
        /* Sesuaikan tinggi dengan cell container */
    }

    .mitra-logo img {
        max-width: 100%;
        /* Membatasi ukuran gambar agar tidak melebihi kotak */
        max-height: 80px;
        object-fit: contain;
        /* Atur gambar untuk mengisi container tanpa merubah aspek ratio */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }


    /*Responsive Styles */
    @media (max-width: 768px) {
        .floating-container {
            margin-top: 0;
            /* Hapus margin negatif pada layar kecil */
        }

        .floating-container .col-md-6 {
            margin-bottom: 20px;
            /* Tambahkan jarak antara elemen kolom */
        }

        .video-section {
            padding: 30px 0;
        }

        .video-section iframe {
            width: 100%;
            height: auto;
        }

        .card-container {
            width: 100%;
            max-width: none;
            /* Hapus batasan lebar maksimal pada layar kecil */
        }

        .carousel-control-prev,
        .carousel-control-next {
            display: none;
            /* Sembunyikan tombol carousel pada layar kecil */
        }

        .mitra-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<!-- Section 1: Banner -->
<section class="banner-section">
    <div class="container text-right my-5">
        <h1><b>#Mari</b></h1>
        <h1><span style="color: #51604F;"><b>Jelajahi</b></span></h1>
        <h1><b>Nusantara</b></h1>
        <p>Jelajahi indahnya <br>
            landscape Nusantara
        </p>

    </div>
</section>

<!-- Section 2: Floating Container -->
<section class="floating-container">
    <div class="container mt-3 mb-2">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <h5>Selamat datang di,</h5>
                <h2>Mandiri <span style="color: #51604F;"> Pribumi</span></h2>
                <p>Rasakan keajaiban Indonesia melalui perjalanan unik dengan alam dan kuliner lokal yang istimewa.</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center mt-3">
                    <i class="fa-solid fa-route fa-2xl"></i>
                    {{-- <h3>Ekspedisi</h3> --}}
                    <p class="mt-5">Menjelahi Pesona Alam Nusantara Bersama Mandiri Pribumi</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center mt-3">
                    <i class="fa-solid fa-utensils fa-2xl"></i>
                    {{-- <h3>Pantai</h3> --}}
                    <p class="mt-5">Jelajahi Cita Rasa Kuliner Nusantara Bersama Mandiri Pribumi</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center mt-3">
                    <i class="fa-solid fa-plane-departure fa-2xl"></i>
                    {{-- <h3>Perjalanan Udara</h3> --}}
                    <p class="mt-5">Menjelajahi dan melestarikan aneka budaya Nusantara Bersama Mandiri Pribumi</p>
                </div>
            </div>
        </div>
        <hr> <!-- Garis horizontal di bawah konten row -->
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <h2 style="floating-tagline"><b>#Mari Jelajah Nusantara !</b></h2>
            </div>
            <div class="col-md-6 col-lg-6 d-flex justify-content-end align-items-center" >
                <a href="https://wa.me/your-whatsapp-number" target="_blank"
                    style="text-decoration: none; color: inherit;">
                    <i class="fab fa-whatsapp fa-3x"></i>
                </a>
                <h3 class="ps-3"><b>Pesan Sekarang</b></h3>
            </div>
        </div>
    </div>
</section>

<section class="video-section">
    <div class="container my-5 mt-5">
<!-- Tagline -->
        <div class="tagline mt-5">
            <p><b>Nikmati <span style="color: red;">Keindahan</span> Bumi Nusantara <span style="color: red;">Bersama Kami</span></b></p>
        </div>
    </div>
</section>

<!-- Section 3: Video and Greetings -->
<section class="video-section">
    <div class="container my-5 mt-5">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-2">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/pFXrf10y3-U" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-6">
                <h2>Selamat Datang di Mandiri Pribumi</h2>
                <p><span style="font-size : 20px">Selamat datang di perjalanan petualangan tak terlupakan bersama
                        Mandiri Pribumi! Kami mengundang Anda
                        untuk merasakan keajaiban Indonesia dengan cara yang belum pernah Anda alami sebelumnya. Kami
                        telah
                        merancang rangkaian perjalanan yang menakjubkan dan unik,
                        memberi Anda kesempatan untuk mengeksplorasi
                        kekayaan alam yang luar biasa dan menikmati kelezatan kuliner lokal.
                    </span></p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Card Carousel -->
<section class="card-section">
    <div class="container my-5 mt-5">
        <h2>Penawaran Jasa</h2>
        <div id="carouselExample" class="carousel slide mt-5" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Carousel Item 1 -->
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <div class="row">
                            <div class="col-md-4 card-container">
                                <!-- Card 1 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card1.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: auto;">
                                    </picture>
                                    <div class="card-body">
                                        <h5 class="card-title">Bali</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">4 Hari 3 Malam</h6>
                                        <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 1.250K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Monumen Bajra Sandhi - GWK Cultural Park - Pura
                                                Uluwatu dll.</b></p>
                                        <a href="/portal/detaildestinasibali" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-container">
                                <!-- Card 2 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: auto;">
                                    </picture>
                                    <div class="card-body">
                                        <h5 class="card-title">Yogyakarta</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">2 Hari 1 Malam</h6>
                                        <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 330K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Candi Borobudur-Candi Prambanan-Keraton
                                                Yogyakarta-Gua Pindul</b></p>
                                        <a href="/portal/detaildestinasijogja" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-container">
                                <!-- Card 3 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: auto;">
                                    </picture>
                                    <div class="card-body">
                                        <h5 class="card-title">Karimun Jawa</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">3 Hari 2 Malam</h6>
                                        <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 1.500K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Pantai Tanjung Gelam-Sonrkeling: Karang Bintang
                                                Maer</b></p>
                                        <a href="/portal/detaildestinasikarimun" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Item 2 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <div class="row">
                            <div class="col-md-4 card-container">
                                <!-- Card 4 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card4.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card4.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: auto;">
                                    </picture>
                                    <div class="card-body">
                                        <h5 class="card-title">Banda Neira</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">4 Hari 3 Malam</h6>
                                        <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 330K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Candi Borobudur-Candi Prambanan-Keraton
                                                Yogyakarta-Gua Pindul</b></p>
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-container">
                                <!-- Card 5 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card5.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card5.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: auto;">
                                    </picture>
                                    <div class="card-body">
                                        <h5 class="card-title">Pantai Seribu</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">2 Hari 1 Malam</h6>
                                        <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 330K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Candi Borobudur-Candi Prambanan-Keraton
                                                Yogyakarta-Gua Pindul</b></p>
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-container">
                                <!-- Card 6 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card6.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: auto;">
                                    </picture>
                                    <div class="card-body">
                                        <h5 class="card-title">Malang Batu Bromo</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">2 Hari 1 Malam</h6>
                                        <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 330K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Candi Borobudur-Candi Prambanan-Keraton
                                                Yogyakarta-Gua Pindul</b></p>
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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

<!-- Section 5: Mitra Kami -->
<section class="text-center mt-5">
    <h2 class="title">Mitra Kami</h2>
    <div class="container my-5">
        <div class="mitra-container">
            <div class="mitra-grid">
                <!-- Kolom 1 -->
                <div class="mitra-cell">
                    <div class="mitra-logo">
                        <img src="{{URL::asset('/images/mitra1.jpg')}}" alt="Mitra 1">
                    </div>
                </div>
                <div class="mitra-cell">
                    <div class="mitra-logo">
                        <img src="{{URL::asset('/images/mitra2.jpg')}}" alt="Mitra 2">
                    </div>
                </div>
                <!-- Tambahkan logo lebih lanjut di sini jika diperlukan -->

                <!-- Kolom 2 -->
                <div class="mitra-cell">
                    <div class="mitra-logo">
                        <img src="{{URL::asset('/images/mitra3.jpg')}}" alt="Mitra 3">
                    </div>
                </div>
                <div class="mitra-cell">
                    <div class="mitra-logo">
                        <img src="{{URL::asset('/images/mitra4.jpg')}}" alt="Mitra 4">
                    </div>
                </div>
                <!-- Tambahkan logo lebih lanjut di sini jika diperlukan -->

                <!-- Kolom 3 -->
                <div class="mitra-cell">
                    <div class="mitra-logo">
                        <img src="{{URL::asset('/images/mitra5.jpg')}}" alt="Mitra 5">
                    </div>
                </div>
                <div class="mitra-cell">
                    <div class="mitra-logo">
                        <img src="{{URL::asset('/images/mitra6.jpg')}}" alt="Mitra 6">
                    </div>
                </div>
                <!-- Tambahkan logo lebih lanjut di sini jika diperlukan -->

                <!-- Kolom 4 -->
                <div class="mitra-cell">
                    <div class="mitra-logo">
                        <img src="{{URL::asset('/images/mitra7.jpg')}}" alt="Mitra 7">
                    </div>
                </div>
                <div class="mitra-cell">
                    <div class="mitra-logo">
                        <img src="{{URL::asset('/images/mitra8.jpg')}}" alt="Mitra 8">
                    </div>
                </div>
                <!-- Tambahkan logo lebih lanjut di sini jika diperlukan -->
            </div>
        </div>
    </div>
</section>


@endsection
