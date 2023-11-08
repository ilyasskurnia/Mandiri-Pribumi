@extends('portal.layouts.templates')

@section('content')
<style>
    .banner-section {
        font-family: 'Sora', sans-serif;
        background-image: url('{{ asset('images/headergallery.png') }}');
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

    /* Responsivitas Banner Section */
    @media (max-width: 768px) {
        .banner-section {
            padding: 100px 0;
            /* Atur padding agar lebih kompak */
        }
    }

    /* Responsivitas Galeri Kami Section */
    @media (max-width: 768px) {
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
        padding-top: 150px;
    }

    .image-container:hover .image-overlay {
        opacity: 1;
    }


    /* Responsivitas Testimoni Foto Section */
    @media (max-width: 768px) {
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
    }

</style>
<section class="banner-section">
    <div class="container text-right my-5">
        <h1>
            <span style="color: #2622DE;"><b>Your Adventure Travel Expert <br> with Mandiri Pribumi</b></span>
        </h1>
    </div>
</section>
<div class="container mt-5">
    <div class="row justify-content-between">
        <div class="col-4 mt-4">
            <h5 class="mt-2" style="color : #FFBE2C">Mandiri Pribumi</h5>
            <h3 class="mt-2" style="color: #1815CA">Galeri Kami</h3>
            <p>
                Berikut adalah beberapa testimoni dari customer kami di beberapa destinasi wisata yang kami layankan.
            </p>
            <a href="#Galeri" class="btn btn-primary">Lihat lebih</a>
        </div>
        <div class="col-5">
            <div class="image-container">
                <div class="image">
                    <img src="{{URL::asset('images/card2.jpg') }}" alt="Gambar 1">
                </div>
                <div class="image">
                    <img src="{{URL::asset('images/card3.jpg') }}" alt="Gambar 2">
                </div>
                <div class="image">
                    <img src="{{URL::asset('images/card1.jpg') }}" alt="Gambar 3">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container  text-center" style="margin-top: 180px">
    <div class="row">
        <h3 style="color: #FFBE2C">Mandiri Pribumi</h3>
    </div>
    <div class="row">
        <h2 style="color: #2622DE">Testimoni Foto dari Pelanggan Kami</h2>
    </div>
</div>

<!-- Section 4: Galllery -->
<section class="galeri-section">
    <div class="container my-5 mt-5">
        {{-- <div class="judul-galeri">
            <img style="max-height: 40px" src="{{URL::asset('/images/logonama.png') }}" alt="Logo">
            <h1>Galeri Kami</h1>
        </div> --}}
        <div class="row mt-1">
            <!-- Galeri Item 1 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card1.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Bali</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 2 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Yogyakarta</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 3 -->
            <div class="col-md-3">
                <div class = "galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Karimun Jawa</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 4-->
            <div class="col-md-3">
                <div class="galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Yogyakarta</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <!-- Galeri Item 1 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card1.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Bali</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 2 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Yogyakarta</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 3 -->
            <div class="col-md-3">
                <div class = "galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Karimun Jawa</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 4-->
            <div class="col-md-3">
                <div class="galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Yogyakarta</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <!-- Galeri Item 1 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card1.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Bali</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 2 -->
            <div class="col-md-3">
                <div class="galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Yogyakarta</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 3 -->
            <div class="col-md-3">
                <div class = "galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Karimun Jawa</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 4-->
            <div class="col-md-3">
                <div class="galeri">
                    <div class="image-container" style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta" style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                        <div class="image-overlay">
                            <h5>Yogyakarta</h5>
                        </div>
                    </div>
                </div>
            </div>
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

    document.addEventListener("DOMContentLoaded", function() {
        const imageContainers = document.querySelectorAll(".image-container");

        imageContainers.forEach(function(container) {
            container.addEventListener("click", function() {
                // Tambahkan tindakan yang ingin dilakukan saat gambar di-klik di sini
            });
        });
    });

</script>

@endsection
