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
        height: 120vh;
    }

    .banner-section h1 {

        color: #fff;
    }

    .banner-section h1.l {

        color: #fff;
    }

    .fade-in {
        opacity: 0;
        /* Opacity awal */
        transition: opacity 1s ease;
        /* Waktu transisi 1 detik */
    }

    .fade-in.active {
        opacity: 1;
        /* Opacity saat efek perlahan muncul */
    }

    .fade-in:not(.active) {
        opacity: 0;
        /* Opacity saat efek fade out */
    }


    /* Section 2: Floating Container */
    .floating-container {
        font-family: 'Sora', sans-serif;
    }

    .floating-container {
        background-color: #F5F5F5;
        border-radius: 10px;
        padding: 5px;
        margin-top: -150px;
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

    /* Section 4: Galeri Carousel */
    .galeri-section {
        font-family: 'Sora', sans-serif;
        background-color: #ffffff;
        padding: 30px;
    }

    .galeri-vertical {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 200px;
        /* Sesuaikan dengan tinggi card yang diinginkan */
    }

    .galeri {
        max-width: 100%;
        /* Sesuaikan lebar maksimal card sesuai kebutuhan */
    }

    .galeri-body {
        text-align: center;
        margin-top: 20px;
        margin-bottom: 3px;
    }

    .galeri-container {
        width: 100%;
        max-width: 18rem;
        /* Sesuaikan dengan lebar maksimal card */
        margin-right: 20px;
        /* Atur jarak antara card */
        margin-bottom: 20px;
        /* Atur jarak bawah antara card */
    }

    .galeri-img-top {
        max-width: 100%;
        height: auto;
    }

    .galeri-title {
        font-size: 1.25rem;
        /* Atur ukuran judul sesuai kebutuhan */
        margin-bottom: 0.25rem;
        /* Tambahkan margin bawah jika diperlukan */
    }

    .floating-tagline {
        box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
    }

    .galeri-subtitle {
        font-size: 1rem;
        /* Atur ukuran subjudul sesuai kebutuhan */
        margin-bottom: 0.5rem;
        /* Tambahkan margin bawah jika diperlukan */
    }

    .galeri-text {
        font-size: 0.875rem;
        /* Atur ukuran teks sesuai kebutuhan */
        margin-bottom: 1rem;
        /* Tambahkan margin bawah jika diperlukan */
    }

    .galeri-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50%;
        /* Sesuaikan tinggi container */
    }

    .judul-galeri {
        text-align: center;
        align-items: center;
    }

    /* Section 1: Partisan */
    .partisan-section {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: left center;
        color: #fff;
        padding: 200px 0;
    }

    .partisan-content {
        max-width: 600px;
        margin: 0 auto;
        padding-left: 20px;
        text-align: left;
    }

    .partisan-word {
        align-content: center;
    }

    .partisan-content h1 {
        font-size: 32px;
        text-align: center;
    }

    .btn-brosur {
        display: inline-block;
        background-color: #D50505;
        /* Ganti warna button */
        color: #fff;
        padding: 10px 20px;
        margin-top: 20px;
        text-decoration: none;
        text-align: left;
        opacity: 0.8;
        /* Efek setengah transparan */
        border-radius: 10px;
    }

    .btn-brosur:hover {
        font-weight: bold;
        /* Menebalkan teks pada hover */
        background-color: #38A2E3;
        /* Warna latar belakang lebih cerah saat di hover */
        box-shadow: 0 0 10px rgba(56, 162, 227, 0.5);
        /* Efek bayangan saat di hover */
    }

    /* Section 5: Card Carousel */
    .card-section {
        font-family: 'Sora', sans-serif;
        background-color: #F2EEEB;
        padding: 30px;
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

    .card-body {
        text-align: center;
        margin-top: 5px;
        margin-bottom: 3px;
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
        /* background-color: rgba(0, 0, 0, 0.4);
        border: 1px solid rgba(0, 0, 0, 0.2); */
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

    /* Section 6: Mitra Kami */

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

    .welcome {
        padding-left: 2%;
    }

    .banner3 {
        padding-right: 2%;
    }

    .video-welcome {
        text-align: justify;
    }

    .video-section {
        background-color: #F2EEEB;
        padding: 15px;
    }

    .judul-card {
        text-align: center;
        align-items: center;
    }

    .floating-content {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.5);
        /* Latar belakang putih tulang dengan opacity 50% */
        border: none;
        padding: 10px;
        border-radius: 10px;
        /* Menambahkan border radius */
        box-shadow: none;
        cursor: pointer;
        transition: transform 0.2s, opacity 0.2s;
    }

    .floating-content:hover {
        transform: scale(1.1);
        opacity: 0.8;
    }

    .floating-content i {
        color: #25d366;
        font-size: 30px;
    }

    .floating-content h3 {
        margin: 0;
        font-weight: bold;
    }

    .floating-content a {
        text-decoration: none;
        color: inherit;
    }

    .overlay {
        display: none;
        position: fixed;
        bottom: 70px;
        /* Posisi tinggi floating box di kanan bawah */
        right: 20px;
        /* Posisi horizontal floating box di kanan bawah */
        /* background: rgba(0, 0, 0, 0.5); */
        align-items: center;
        justify-content: center;
    }


    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    /* Perubahan gaya untuk floating box */
    .floating-box {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        position: relative;
        width: 100%;
        font-family: "Sora", sans-serif;
        /* Menggunakan jenis huruf Arial atau jenis huruf sans-serif lainnya */
    }

    .floating-box h3 {
        font-size: 20px;
        /* Ukuran huruf yang lebih besar untuk judul */
        margin: 10px 0;
        /* Margin atas dan bawah judul */
    }

    .floating-box p {
        font-size: 16px;
        /* Ukuran huruf yang lebih besar untuk konten */
    }

    .floating-box a {
        display: inline-block;
        padding: 10px 20px;
        background: #0088cc;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        margin-top: 20px;
        /* Margin di atas tombol */
    }

    .card-title1 {
      font-size: 1.5rem;
      font-weight: bold;
      color: #333; /* warna teks */
      margin-bottom: 10px;
    }

    /* Gaya untuk Card Text */
    .card-text1 {
      font-size: 1rem;
      color: #555; /* warna teks */
      margin-bottom: 15px;
    }

    /* Gaya untuk Small Text (Last updated) */
    .text-muted {
      font-size: 0.8rem;
      color: #888; /* warna teks */
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
            height: 250px;
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
    <div class="container text-right my-5 fade-in">
        <h1 style="font-size: 48px;"><b>#Mari</b></h1>
        <h1 style="font-size: 72px; color: #51604F;"><b>Jelajahi</b></h1>
        <h1 style="font-size: 48px;"><b>Nusantara</b></h1>
        <p style="text-align: justify; font-size: 24px;">Jelajahi indahnya <br> landscape Nusantara</p>
    </div>

</section>

<!-- Section 2: Floating Container -->
<section class="floating-container">
    <div class="container mt-3 mb-2">
        <div class="row">
            <div class="col-md-6 col-lg-3 welcome">
                <h5>Selamat datang di,</h5>
                <h2>Mandiri <span style="color: #51604F;"> Pribumi</span></h2>
                <p style="text-align: justify">Rasakan keajaiban Indonesia melalui perjalanan unik dengan alam dan
                    kuliner lokal yang istimewa.</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center mt-3">
                    <img style="max-height: 100px" src="{{URL::asset('/images/iconfloating1.png') }}" alt="Logo">
                    {{-- <h3>Ekspedisi</h3> --}}
                    <p class="mt-5">Menjelahi Pesona Alam Nusantara Bersama Mandiri Pribumi</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center mt-3">
                    <img style="max-height: 100px" src="{{URL::asset('/images/iconfloating2.png') }}" alt="Logo">
                    {{-- <h3>Pantai</h3> --}}
                    <p class="mt-5">Jelajahi Cita Rasa Kuliner Nusantara Bersama Mandiri Pribumi</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center mt-3 banner3">
                    <img style="max-height: 100px" src="{{URL::asset('/images/iconfloating3.png') }}" alt="Logo">
                    {{-- <h3>Perjalanan Udara</h3> --}}
                    <p class="mt-5">Menjelajahi dan melestarikan aneka budaya Nusantara Bersama Mandiri Pribumi</p>
                </div>
            </div>
        </div>
        <hr> <!-- Garis horizontal di bawah konten row -->
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <h2 style="floating-tagline"><b>#MariJelajahNusantara!</b></h2>
            </div>
            <div class="col-md-6 col-lg-6 d-flex justify-content-end align-items-center">
                <a href="https://wa.me/your-whatsapp-number" target="_blank"
                    style="text-decoration: none; color: inherit;">
                    <i class="fab fa-whatsapp fa-3x"></i>
                </a>
                <h3 class="ps-3"><b>Pesan Sekarang</b></h3>
            </div>
        </div>
    </div>
</section> <br><br><br>

<section class="video-section">
    <div class="container my-5 mt-5">
        <!-- Tagline -->
        <div class="tagline mt-5 text-center">
            <p style="font-size: 24px; font-weight: bold; color: #51604F;">Nikmati <span
                    style="color: red; font-size: 28px;">Keindahan</span> Bumi Nusantara <span
                    style="color: red; font-size: 28px;">Bersama Kami</span></p>
        </div>
    </div>


    <!-- Section 3: Video and Greetings -->
    <div class="container my-5 mt-5">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-2">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/pFXrf10y3-U" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 mt-4 video-welcome">
                <h2>Selamat Datang di Mandiri Pribumi</h2>
                <p><span style="font-size : 20px">Selamat datang di perjalanan petualangan tak terlupakan bersama
                        Mandiri Pribumi! Kami mengundang Anda untuk merasakan keajaiban Indonesia dengan cara yang belum
                        pernah Anda alami sebelumnya. Kami telah merancang rangkaian perjalanan yang menakjubkan dan
                        unik, memberi Anda kesempatan untuk mengeksplorasi kekayaan alam yang luar biasa dan menikmati
                        kelezatan kuliner lokal. </span></p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Galllery -->
<section class="galeri-section">
    <div class="container my-5 mt-5">
        <div class="judul-galeri">
            <img style="max-height: 40px" src="{{URL::asset('/images/logonama.png') }}" alt="Logo">
            <h1 class="mt-3">Galeri Kami</h1>
        </div>
        <div class="row mt-5">
            <!-- Galeri Item 1 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card1.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Bali</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">4 Hari 3 Malam</p> --}}
                        <!-- Isi galeri 1 -->
                    </div>
                </div>
            </div>

            <!-- Galeri Item 2 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Yogyakarta</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">2 Hari 1 Malam</p> --}}
                        <!-- Isi galeri 2 -->
                    </div>
                </div>
            </div>

            <!-- Galeri Item 3 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Karimun Jawa</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">3 Hari 2 Malam</p> --}}
                        <!-- Isi galeri 3 -->
                    </div>
                </div>
            </div>

            <!-- Galeri Item 4-->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Yogyakarta</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">2 Hari 1 Malam</p> --}}
                        <!-- Isi galeri 4 -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <!-- Galeri Item 1 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card1.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Bali</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">4 Hari 3 Malam</p> --}}
                        <!-- Isi galeri 1 -->
                    </div>
                </div>
            </div>

            <!-- Galeri Item 2 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Yogyakarta</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">2 Hari 1 Malam</p> --}}
                        <!-- Isi galeri 2 -->
                    </div>
                </div>
            </div>

            <!-- Galeri Item 3 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Karimun Jawa</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">3 Hari 2 Malam</p> --}}
                        <!-- Isi galeri 3 -->
                    </div>
                </div>
            </div>

            <!-- Galeri Item 4-->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Yogyakarta</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">2 Hari 1 Malam</p> --}}
                        <!-- Isi galeri 4 -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <!-- Galeri Item 1 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card1.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Bali</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">4 Hari 3 Malam</p> --}}
                        <!-- Isi galeri 1 -->
                    </div>
                </div>
            </div>

            <!-- Galeri Item 2 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Yogyakarta</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">2 Hari 1 Malam</p> --}}
                        <!-- Isi galeri 2 -->
                    </div>
                </div>
            </div>

            <!-- Galeri Item 3 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Karimun Jawa</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">3 Hari 2 Malam</p> --}}
                        <!-- Isi galeri 3 -->
                    </div>
                </div>
            </div>

            <!-- Galeri Item 4-->
            <div class="col-md-3">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="galeri-body">
                        <h4 class="galeri-title">Yogyakarta</h4>
                        {{-- <p class="galeri-subtitle mb-2 text-muted">2 Hari 1 Malam</p> --}}
                        <!-- Isi galeri 4 -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Section 5: Partisan -->
<section class="partisan-section" style="background-image: url('{{ asset('images/partisan.png') }}');">
    <div class="container text-right mt-5 partisan-word">
        <h1><b>KENALAN LEBIH DEKAT</b></h1>
        <h1><b>DENGAN KAMI</b></h1>
        <a href="/portal/tentang" class="btn-brosur" style="display: inline-block; margin-top: 20px;">Tentang Kami</a>
    </div>
</section>

<!-- Section 6: Card Carousel -->
<section class="card-section">
    <div class="container my-5 mt-5">
        <div class="judul-card">
            <img style="max-height: 40px" src="{{URL::asset('/images/logonama.png') }}" alt="Logo">
            <h1 class="mt-3">Penawaran Jasa</h1>
        </div>
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
                                            style="max-width: 100%; height: 400px;">
                                    </picture>
                                    <div class="card-body">
                                        <h4 class="card-title">Bali</h4>
                                        <p class="card-subtitle mb-2 text-muted">4 Hari 3 Malam</p>
                                        {{-- <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 1.250K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Monumen Bajra Sandhi - GWK Cultural Park - Pura
                                                Uluwatu - dll.</b></p>
                                        <a href="/portal/detaildestinasibali" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-container">
                                <!-- Card 2 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: 400px;">
                                    </picture>
                                    <div class="card-body">
                                        <h4 class="card-title">Yogyakarta</h4>
                                        <p class="card-subtitle mb-2 text-muted">2 Hari 1 Malam</p>
                                        {{-- <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 330K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Candi Borobudur-Candi Prambanan-Keraton
                                                Yogyakarta-Gua Pindul</b></p>
                                        <a href="/portal/detaildestinasijogja" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-container">
                                <!-- Card 3 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: 400px;">
                                    </picture>
                                    <div class="card-body">
                                        <h4 class="card-title">Karimun Jawa</h4>
                                        <p class="card-subtitle mb-2 text-muted">3 Hari 2 Malam</p>
                                        {{-- <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 1.500K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Pantai Tanjung Gelam-Sonrkeling: Karang Bintang
                                                Maer</b></p>
                                        <a href="/portal/detaildestinasikarimun" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-container">
                                <!-- Card 4 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: 400px;">
                                    </picture>
                                    <div class="card-body">
                                        <h4 class="card-title">Karimun Jawa</h4>
                                        <p class="card-subtitle mb-2 text-muted">3 Hari 2 Malam</p>
                                        {{-- <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 1.500K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Pantai Tanjung Gelam-Sonrkeling: Karang Bintang
                                                Maer</b></p>
                                        <a href="/portal/detaildestinasikarimun" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a> --}}
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
                                <!-- Card 5 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card4.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card4.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: 400px;">
                                    </picture>
                                    <div class="card-body">
                                        <h4 class="card-title">Banda Neira</h4>
                                        <p class="card-subtitle mb-2 text-muted">4 Hari 3 Malam</p>
                                        {{-- <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 330K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Candi Borobudur-Candi Prambanan-Keraton
                                                Yogyakarta-Gua Pindul</b></p>
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-container">
                                <!-- Card 6 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card5.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card5.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: 400px;">
                                    </picture>
                                    <div class="card-body">
                                        <h4 class="card-title">Pantai Seribu</h4>
                                        <p class="card-subtitle mb-2 text-muted">2 Hari 1 Malam</p>
                                        {{-- <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 330K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Candi Borobudur-Candi Prambanan-Keraton
                                                Yogyakarta-Gua Pindul</b></p>
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-container">
                                <!-- Card 7 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card6.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: 400px;">
                                    </picture>
                                    <div class="card-body">
                                        <h4 class="card-title">Malang Batu Bromo</h4>
                                        <p class="card-subtitle mb-2 text-muted">2 Hari 1 Malam</p>
                                        {{-- <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 330K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Candi Borobudur-Candi Prambanan-Keraton
                                                Yogyakarta-Gua Pindul</b></p>
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-container">
                                <!-- Card 8 -->
                                <div class="card">
                                    <picture>
                                        <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                                        <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                            style="max-width: 100%; height: 400px;">
                                    </picture>
                                    <div class="card-body">
                                        <h4 class="card-title">Karimun Jawa</h4>
                                        <p class="card-subtitle mb-2 text-muted">3 Hari 2 Malam</p>
                                        {{-- <div class="card-price">
                                            <p class="start-from">Start from</p>
                                            <p class="price">Rp. 1.500K/pax</p>
                                        </div>
                                        <p class="card-text mt-4"><b>Pantai Tanjung Gelam-Sonrkeling: Karang Bintang
                                                Maer</b></p>
                                        <a href="/portal/detaildestinasikarimun" class="btn btn-primary"
                                            style="background-color: #2622DE; color: #fff;">Selengkapnya</a> --}}
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

<!-- Section 7: Mitra Kami -->
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

<div class="floating-content" id="floating-content">
    <a href="" target="_blank" style="text-decoration: none; color: inherit;">
        <i class="fab fa-whatsapp fa-3x"></i>
    </a>
    <h6 class="ps-3"><b>Ada Yang Bisa Kami Bantu?</b></h6>
</div>

<!-- <div class="overlay" id="overlay">
    <div class="floating-box">
    <div style="background: #0088cc;">
    <h3>Ada yang bisa kami bantu</h3>
</div>
<div style="background: #fff; color: #333;">
    <p>Silahkan hubungi kami di sini</p>
</div>
<div style="background: #ccc;">
    <p>Atau Anda bisa menghubungi kami di sini</p>
</div>
        <span class="close" id="close">&times;</span>
    </div>
</div> -->

<div class="overlay" id="overlay">
    <div class="card mb-3" style="max-width: 360px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="{{URL::asset('/images/float.png') }}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
                <h5 class="card-title1"><b>Ada Yang Bisa Kami Bantu?</b></h5>
                <p class="card-text1">Tanyakan pada admin <b>Mandiri Pribumi</b> <a href="https://wa.me/your-whatsapp-number">di sini</a></p>
                <p class="card-text1"><small class="text-muted">Atau hubungi kami langsung <a href="/portal/kontak">di sini</a></small></p>
            <span class="close" id="close">&times;</span>
        </div>
        </div>
    </div>
    </div>
</div>

<script>
    // Fungsi untuk menambahkan class "active" saat elemen berada dalam viewport
    function handleScroll() {
        const elements = document.querySelectorAll('.fade-in');
        elements.forEach((element) => {
            const elementRect = element.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            if (elementRect.top < windowHeight && elementRect.bottom >= 0) {
                element.classList.add('active');
            } else {
                element.classList.remove('active');
            }
        });
    }

    // Memanggil fungsi saat halaman dimuat dan saat menggulir
    window.addEventListener('load', handleScroll);
    window.addEventListener('scroll', handleScroll);

    const floatingContent = document.getElementById('floating-content');
    const overlay = document.getElementById('overlay');
    const closeButton = document.getElementById('close');

    floatingContent.addEventListener('click', () => {
        overlay.style.display = 'block';
    });

    closeButton.addEventListener('click', () => {
        overlay.style.display = 'none';
    });

</script>



@endsection
