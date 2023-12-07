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
    .detail-destinasi {
        margin-top: 50px;
    }

    .destination-picture img {
        width: 100%;
        height: auto;
    }

    .destination-layer .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background-color: #ffffff;
    }

    .destination-layer .card-body {
        padding: 30px;
    }

    /* Gaya untuk highlight yang lebih menarik */
    .destination-layer .highlight {
        color: #fff;
        /* Warna untuk highlight */
        font-weight: bold;
        display: inline-block;
        padding: 5px 10px;
        border-radius: 5px;
        background-color: #ffbe2c;
        /* Warna latar belakang untuk highlight */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Efek bayangan */
    }

    /* Gaya untuk judul destinasi yang lebih menarik */
    .destination-layer .judul-destinasi {
        font-size: 28px;
        /* Ukuran font yang lebih besar */
        margin-bottom: 15px;
        color: #333;
        /* Warna teks yang lebih gelap */
        font-weight: bold;
        /* Teks menjadi lebih tebal */
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        /* Bayangan teks */
        line-height: 1.4;
        /* Jarak antar baris teks */
    }

    .destination-layer .keterangan {
        font-size: 16px;
        line-height: 1.6;
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


    }
</style>

<!-- Section 1: Banner -->
<section class="banner-section" style="background-image: url('{{ asset('images/detailbannerbali.jpg') }}');">
    <div class="container text-right mt-5">
        <h1><b>Paket Tour Bali</b></h1>
        <h2><b>3 Hari 2 Malam</b></h2>
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
<section class="detail-destinasi">
    <div class="container">
        <div class="row">
            <div class="col-md-6 destination-picture mt-5">
                <!-- Konten untuk gambar destinasi bisa dimasukkan di sini -->
                <img src="{{URL::asset('/images/detailjogja1.png')}}" alt="Gambar Destinasi">
            </div>
            <div class="col-md-6 destination-layer mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4><span class="highlight">Hari 1</span></h4>
                        <h2 class="judul-destinasi">Tiba di Bali - Danau Beratan - Ubud Monkey Forest - Ubud Palace -
                            Tanah Lot
                        </h2>
                        <p class="keterangan">
                            Ini adalah keterangan mengenai rute destinasi. Anda dapat menambahkan informasi menarik
                            mengenai tempat-tempat yang akan dikunjungi pada hari pertama ini.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 destination-picture mt-5">
                <!-- Konten untuk gambar destinasi bisa dimasukkan di sini -->
                <img src="{{URL::asset('/images/detailjogja1.png')}}" alt="Gambar Destinasi">
            </div>
            <div class="col-md-6 destination-layer mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4><span class="highlight">Hari 1</span></h4>
                        <h2 class="judul-destinasi">Tiba di Bali - Danau Beratan - Ubud Monkey Forest - Ubud Palace -
                            Tanah Lot
                        </h2>
                        <p class="keterangan">
                            Ini adalah keterangan mengenai rute destinasi. Anda dapat menambahkan informasi menarik
                            mengenai tempat-tempat yang akan dikunjungi pada hari pertama ini.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 destination-picture mt-5">
                <!-- Konten untuk gambar destinasi bisa dimasukkan di sini -->
                <img src="{{URL::asset('/images/detailjogja1.png')}}" alt="Gambar Destinasi">
            </div>
            <div class="col-md-6 destination-layer mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4><span class="highlight">Hari 1</span></h4>
                        <h2 class="judul-destinasi">Tiba di Bali - Danau Beratan - Ubud Monkey Forest - Ubud Palace -
                            Tanah Lot
                        </h2>
                        <p class="keterangan">
                            Ini adalah keterangan mengenai rute destinasi. Anda dapat menambahkan informasi menarik
                            mengenai tempat-tempat yang akan dikunjungi pada hari pertama ini.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <h1> PETA BALI </h1>
        <a class="zoom-image" href="/images/Balimap.jpg">
            <img class="peta-image" src="/images/Balimap.jpg" alt="">
        </a>
    </div>


    </div>
</section>

<script>
    $(document).ready(function () {
        $('.zoom-image').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom',
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out'
            }
        });
    });
</script>

@endsection
