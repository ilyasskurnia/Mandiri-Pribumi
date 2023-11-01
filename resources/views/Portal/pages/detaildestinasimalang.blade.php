@extends('portal.layouts.templates')

@section('content')
<style>
    /* General Styles */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    /* Section 1: Banner */
    .banner-section {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: left center;
        color: #fff;
        padding: 200px 0;
    }

    .banner-content {
        max-width: 600px;
        margin: 0 auto;
        padding-left: 20px;
        text-align: left;
    }

    .banner-content h1 {
        font-size: 32px;
    }

    .banner-content h2 {
        font-size: 20px;
    }

    .btn-brosur {
        display: inline-block;
        background-color: #42A0E4;
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


    /* Section 2: Tagline */
    .tagline-section {
        background-color: #BDCDEA;
        color: #000;
        text-align: center;
        padding: 25px 0;
    }

    .tagline-content h2 {
        font-size: 30px;
    }

    /* Section 3: Detail Destination */
    .detail-destination {
        padding: 40px 0;
    }

    .destination-item {
        display: flex;
        justify-content: space-between;
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .destination-item1 {
        display: flex;
        justify-content: space-between;
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .destination-layer {
        flex: 1;
    }

    .destination-image img,
    .destination-description {
        max-width: 100%;
        border: 4px solid #fff;
        /* Menambahkan border putih sekeliling gambar */
        border-radius: 15px;
        /* Memberikan sudut gambar yang membulat */
    }

    .destination-description {
        padding: 15px;
        background: #fff;
        margin-top: 10px;
    }

    .destination-tagline {
        color: red;
        /* Mengatur warna merah */
    }

    /* Styling for Left Image, Right Description */
    .left .destination-image.left,
    .right .destination-description.right {
        order: 1;
    }

    .left .destination-description.right,
    .right .destination-image.left {
        order: 2;
    }

    .left .destination-image.right,
    .right .destination-description.left {
        order: 1;
    }

    .left .destination-description.left,
    .right .destination-image.right {
        order: 2;
    }
    .peta-image {
        width: 15cm;
        height: 10cm;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .banner-content {
            padding: 100px 0;
            /* Sesuaikan padding sesuai kebutuhan di layar kecil */
            text-align: center;
        }

        .banner-content h1 {
            font-size: 28px;
        }

        .banner-content h2 {
            font-size: 18px;
        }

        .btn-brosur {
            display: block;
            margin: 20px auto;
        }

        .tagline-content h2 {
            font-size: 24px;
        }

        .destination-item {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .destination-item1 {
            display: flex;
            flex-direction: column-reverse;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .destination-layer {
            flex: 1;
        }

        .destination-image img,
        .destination-description {
            max-width: 100%;
            border-radius: 0;
            /* Hapus border radius di layar kecil */
            border: none;
            /* Hapus border di layar kecil */
            padding: 0;
            /* Hapus padding di layar kecil */
        }

        .destination-description {
            background: none;
            /* Hapus background di layar kecil */
            text-align: center;
            /* Pusatkan teks di layar kecil */
            margin-top: 10;
            /* Hapus margin top di layar kecil */
        }

        .destination-tagline {
            font-size: 20px;
        }

        .peta-image{
            width: 10cm;
            height: 5cm;
        }
    }

</style>

<!-- Section 1: Banner -->
<section class="banner-section" style="background-image: url('{{ asset('images/malang.png') }}');">
    <div class="container text-right mt-5">
        <h1><b>Paket Tour Malang-Batu-Bromo</b></h1>
        <h2><b>2 Hari 1 Malam</b></h2>
        <a href="#" class="btn-brosur" style="text-align: left; display: inline-block; margin-top: 20px;">Unduh
            Brosur</a>
    </div>
</section>

<!-- Section 2: Tagline -->
<section class="tagline-section">
    <div class="container">
        <div class="tagline-content">
            <h2><b>#Mari Jelajah Nusantara</b></h2>
        </div>
    </div>
</section>

<!-- Section 3: Detail Destination -->
<section class="detail-destination">
    <div class="container">
        <div class="destination-item">
            <div class="destination-layer">
                <div class="destination-image">
                    <img src="{{URL::asset('/images/malang1.png')}}" alt="Image 1">
                </div>
            </div>
            <div class="destination-layer">
                <div class="destination-description">
                    <h4 style="" class="destination-tagline"><b><span><img style="max-height: 30px" src="{{ URL::asset('/images/iconwisata.png') }}" alt=""></span> Day 1</b></h4>
                    <h3><b>Semarang - Malang - Bromo - Batu</b></h3>
                    <p>Selamat datang di Pulau Bali! Hari ini, kami akan membawa Anda untuk menikmati keindahan alam dan budaya pulau ini. Kami akan memulai hari dengan sarapan pagi di pinggir Danau Beretan sambil menikmati matahari terbit. Kemudian, Anda akan berpetualang ke Ubud Monkey Forest, mengeksplorasi alam dan keanekaragaman fauna Bali. Di samping itu, Anda akan merasakan kebudayaan Bali dengan mengunjungi Ubud Palace. Hari ini akan ditutup dengan pemandangan matahari terbenam yang spektakuler di Tanah Lot</p>
                </div>
            </div>
        </div>

        <div class="destination-item1">
            <div class="destination-layer">
                <div class="destination-description">
                    <h4 style="" class="destination-tagline"><b><span><img style="max-height: 30px" src="{{ URL::asset('/images/iconwisata.png') }}" alt=""></span> Day 2</b></h4>
                    <h3><b>Batu - Semarang</b></h3>
                    <p>Setelah kita menyantap sarapan dan check out dari hotel, kita akan berkunjung di Jatim Park II untuk mendapatkan pesona fauna. Sebagai penutup dari petualangan bersama kita di Malang, Bromo, dan Batu, kita akan menyantap dan menikmati makan siang sebelum bertolak kembali menuju Kota Semarang.</p>
                </div>
            </div>
            <div class="destination-layer">
                <div class="destination-image">
                    <img src="{{URL::asset('/images/malang2.png')}}" alt="Image 2">
                </div>
            </div>
        </div>

        <div class="text-center">
            <h1> PETA MALANG </h1>
            <img class="peta-image"  src="/images/petamalang.jpg" alt="">
        </div>
    </div>
</section>

@endsection
