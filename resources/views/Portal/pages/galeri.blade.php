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

<div class="container mt-5">
    <div class="gallery-container" id="Galeri">
        {{-- @foreach ($images as $image) --}}
        <div class="gallery-item">
            {{-- <img src="{{ URL::asset('images/' . $image->filename) }}" class="gallery-image"
            alt="{{ $image->description }}"> --}}
            <img class="gallery-image" src="{{URL::asset('images/card1.jpg') }}" alt="">
        </div>
        <div class="gallery-item">
            <img class="gallery-image" src="{{URL::asset('images/card2.jpg') }}" alt="">
        </div>
        <div class="gallery-item">
            <img class="gallery-image" src="{{URL::asset('images/card3.jpg') }}" alt="">
        </div>
        {{-- @if ($loop->iteration % 3 == 0) --}}
    </div>
    <div class="gallery-container">
        <div class="gallery-item">
            <img class="gallery-image" src="{{URL::asset('images/card3.jpg') }}" alt="">
        </div>
        <div class="gallery-item">
            <img class="gallery-image" src="{{URL::asset('images/card2.jpg') }}" alt="">
        </div>
        <div class="gallery-item">
            <img class="gallery-image" src="{{URL::asset('images/card1.jpg') }}" alt="">
        </div>
        {{-- @endif
        @endforeach --}}
    </div>
</div>

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

</script>

@endsection
