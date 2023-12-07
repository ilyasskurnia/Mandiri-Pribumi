@extends('portal.layouts.templates')

@section('content')
<style>
    .banner-section {
        font-family: 'Sora', sans-serif;
        background-image: url('{{ asset('images/headergallery.jpg') }}');
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

    .gallery-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .gallery-item {
        width: 30%;
        margin: 10px;
        max-height: 500px;
        border-radius: 30px;
        overflow: hidden;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .gallery-image {
        width: 100%;
        height: auto;
    }

    .owl-carousel {
        display: flex;
        flex-direction: row;
    }

    .owl-item {
        width: 100%;
        /* Atur lebar item Owl Carousel agar 100% */
    }

    .owl-carousel .item img {
        max-height: 350px;
        width: 100%;
        /* Atur lebar gambar agar 100% */
    }

    .image-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .image {
        flex: 0 0 30%;
        /* Atur lebar masing-masing gambar */
        position: relative;
    }

    .image img {
        width: 100%;
        height: auto;
    }

    .image:nth-child(1) {
        z-index: 1;
        /* Atur gambar pertama agar berada di depan */
    }

    .quotes-section {
        background-image: url('{{ asset('images/welcomegaleri.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        padding: 200px 0;
        margin-top: 50px;
    }

    .quotes-section2 {
        display: none;
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

    .image-container {
        position: relative;
        overflow: hidden;
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        text-align: center;
        padding: 20px;
        opacity: 0;
        transition: opacity 0.3s;
        padding-top: 75px;
    }

    .image-container:hover .image-overlay {
        opacity: 1;
    }

    .preview {
        display: flex;
        flex-wrap: wrap;
        padding: 50px 0;
    }

    @media screen and (max-width: 1024px) {
        .welcome-section {
            background-image: url('{{ asset('images/welcomegaleri.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 250px 0;
        }
    }

    /* Responsivitas Testimoni Foto Section */
    @media (max-width: 768px) {
        .banner-section {
            padding: 100px 0;
            /* Atur padding agar lebih kompak */
        }

        .image-container {
            flex-direction: column;
            /* Tumpuk gambar di perangkat seluler */
        }

        .image {
            flex: 0 0 100%;
            /* Lebar gambar 100% */
            margin-top: 10px;
            /* Berikan jarak atas antar gambar */
        }

        .gallery-container {
            flex-direction: column;
            /* Tumpuk galeri di perangkat seluler */
        }

        .gallery-item {
            width: 100%;
            /* Lebar galeri 100% */
            margin: 10px 0;
            /* Berikan jarak atas dan bawah antar galeri */
        }

        .quotes-section {
            display: none;
        }

        .quotes-section2 {
            background-image: url('{{ asset('images/welcomegalerikanan.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 134px 0;
            display: block;
            /* Menampilkan quotes-section2 pada media 768px */
            margin-top: 50px;
        }

        .momen {
            margin-top: 50px;
        }

    }
</style>
<section class="banner-section">
    <div class="container text-center my-5">
        <h1><b>Rayakan <span style="color: #FFBE2C;"> Moment</span> Kebersamaan <br> Bersama Mandiri Pribumi</b></h1>
    </div>
</section>
<div class="container mt-5">
    <div class="row justify-content-between">
        <div class="col-md-6 col-lg-4">
            <h4 class="mt-2" style="color: #FFBE2C; font-size: 30px;">Mandiri Pribumi</h4>
            <h2 class="mt-2" style="color: #51604F; font-size: 60px; font-family: 'Bebas Neue', sans-serif;">Galeri Kami
            </h2>
            <p style="font-size: 24px;">
                Berikut adalah beberapa testimoni dari customer kami di beberapa destinasi wisata yang kami layani.
            </p>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 momen">
            <div class="text-center">
                <h3>Momen Bersama</h3>
                <hr>
                <img src="{{ URL::asset('/images/carddestinasi3.png') }}" class="img-fluid" alt="preview Image">
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 momen">
            <div class="text-center">
                <h3>Informasi Lokasi</h3>
                <hr>
                <img src="{{ URL::asset('/images/carddestinasi3.png') }}" class="img-fluid" alt="preview Image">
            </div>
        </div>
    </div>
</div>


<section class="quotes-section"></section>
<section class="quotes-section2"></section>

<div class="container  text-center" style="margin-top: 50px">
    <div class="row">
        <h3 style="color: #FFBE2C">Mandiri Pribumi</h3>
    </div>
    <div class="row">
        <h1 style="color: #51604F; font-family: 'Bebas Neue', sans-serif; font-size: 48px;">Testimoni Foto dari
            Pelanggan Kami</h1>
    </div>
    <div class="row">
        <hr>
    </div>
</div>

<!-- Section 4: Galllery -->
<section class="galeri-section">
    <div class="row mt-3">
        <!-- Galeri Item 1 -->
        @foreach ($data['get_galeri'] as $galeri)
        <div class="col-md-3 mt-3">
            <div class="galeri">
                <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                    <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                        <source srcset="{{ asset('storage/' . $galeri->thumbnail_galeri) }}" media="(min-width: 768px)">
                        <img src="{{ asset('storage/' . $galeri->thumbnail_galeri) }}" alt=""
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </picture>
                    <div class="image-overlay">
                        <p><span><img style="max-height: 50px" src="{{ URL::asset('/images/admin.png') }}"
                                    alt=""></span> {{ $galeri->author }}, {{ $galeri->created_at }}</p>
                        <h5>{{ $galeri->title_galeri }}</h5>
                        <p>{{ $galeri->keterangan }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    </div>
</section>

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1, // Jumlah item yang ditampilkan
            autoplay: true, // Aktifkan autoplay
            autoplayTimeout: 3000, // Waktu tunggu antara slide (dalam milidetik)
            loop: true, // Aktifkan loop
            nav: true, // Tampilkan tombol navigasi
            dots: true, // Tampilkan titik navigasi
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const imageContainers = document.querySelectorAll(".image-container");

        imageContainers.forEach(function (container) {
            container.addEventListener("click", function () {
                // Tambahkan tindakan yang ingin dilakukan saat gambar di-klik di sini
            });
        });
    });
</script>

@endsection
