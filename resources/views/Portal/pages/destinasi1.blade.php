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


    /* Section 2: Penawaran Jasa */
    .why-choose-us {
        align-self: center;
    }

    .section-title1 {
        margin-top: 30px;
        font-size: 1.5em;
        color: #333;
        /* Warna teks judul */
    }

    .section-title2 {
        margin-top: -50px;
        font-size: 2.5em;
        color: #333;
        /* Warna teks judul */
    }

    .box-card {
        align-content: center;
        padding-left: 200px;
    }

    .card1 {
        background-color: #818FDB;
        border: none;
        border-radius: 8px;
        margin-bottom: 30px;
        margin-left: 50px;
        height: 80%;
        width: 250px;
        /* Card akan mengisi tinggi sesuai konten */
    }

    .card2 {
        background-color: #C98B8B;
        border: none;
        border-radius: 8px;
        margin-bottom: 30px;
        margin-left: 50px;
        height: 80%;
        width: 250px;
        /* Card akan mengisi tinggi sesuai konten */
    }

    .card3 {
        background-color: #FF5858;
        border: none;
        border-radius: 8px;
        margin-bottom: 30px;
        margin-left: 50px;
        height: 80%;
        width: 250px;
        /* Card akan mengisi tinggi sesuai konten */
    }

    .card-title {
        padding: 10px;
        font-size: 1.2em;
    }

    .card-text {
        padding-top: 25px;
        font-size: 16px;
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
        padding-right: 50px;
    }

    .destination-image {
        padding: 15px;
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

        .peta-image {
            width: 10cm;
            height: 5cm;
        }
    }
</style>

<!-- Section 1: Banner -->
<section class="banner-section" style="background-image: url('{{ asset('images/banner-destinasi1.png') }}');">
    <div class="container text-right mt-5">
        <h1><b>Your Adventure</b></h1>
        <h1><b>Travel Expert With</b></h1>
        <h1><b>Mandiri Pribumi</b></h1>
        <a href="#" class="btn-brosur" style="text-align: left; display: inline-block; margin-top: 20px;">Hubungi
            Kami</a>
    </div>
</section>

<!-- Section 2 : Penawaran Spesial -->
<section class="why-choose-us">
    <div class="container">
        <h4 class="section-title1 text-center mb-5">Jangan Lewatkan</h4>
        <h2 class="section-title2 text-center mb-5">Penawaran Spesial</h2>
        <div class="row box-card">
            <div class="col-md-3">
                <div class="card1 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Studi Tour Sekolah</h5>
                        <p class="card-text">Up to 20% off</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card2 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Liburan Musim Panas</h5>
                        <p class="card-text">Up to 20% off</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card3 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Member Exclusive</h5>
                        <p class="card-text">Up to 20% off</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Detail Destination -->
<section class="detail-destination">
    <div class="container">
        <div class="destination-item">
            <div class="destination-layer">
                <div class="destination-image">
                    <img src="{{URL::asset('/images/detailbali1.png')}}" alt="Image 1">
                </div>
            </div>
            <div class="destination-layer">
                <div class="destination-description">
                    <h4 style="" class="destination-tagline"><b><span><img style="max-height: 30px"
                                    src="{{ URL::asset('/images/iconwisata.png') }}" alt=""></span> Day 1</b></h4>
                    <h3><b>Tiba di Bali-Danau Beratan-Ubud Monkey Forest
                            -Ubud Palace-Tanah Lot</b></h3>
                    <p style="text-align: justify">Selamat datang di Pulau Bali! Hari ini, kami akan membawa Anda untuk
                        menikmati keindahan alam dan
                        budaya pulau ini. Kami akan memulai hari dengan sarapan pagi di pinggir Danau Beretan sambil
                        menikmati matahari terbit. Kemudian, Anda akan berpetualang ke Ubud Monkey Forest,
                        mengeksplorasi alam dan keanekaragaman fauna Bali. Di samping itu, Anda akan merasakan
                        kebudayaan Bali dengan mengunjungi Ubud Palace. Hari ini akan ditutup dengan pemandangan
                        matahari terbenam yang spektakuler di Tanah Lot.</p>
                </div>
            </div>
        </div>

        <div class="destination-item1">
            <div class="destination-layer">
                <div class="destination-description">
                    <h4 style="" class="destination-tagline"><b><span><img style="max-height: 30px"
                                    src="{{ URL::asset('/images/iconwisata.png') }}" alt=""></span> Day 2</b></h4>
                    <h3><b>Monumen Bajra Sandhi-GWK Cultural Park-Pura Uluwatu</b></h3>
                    <p style="text-align: justify">Petualangan kita pada hari ini, dibuka dengan mempelajari dan
                        menghayati riwayat perjuangan
                        Rakyat Bali dalam menghadapi penjajah dengan mengunjungi Monumen
                        Braja Sandhi, Selepas dari Monumen Braja Sandhi, kita
                        akan menuju Bali Selatan untuk menyaksikan karya
                        seniman bangsa I Nyoman Nuarta dengan berkunjung di Garuda Wisnu Kencana Cultural Park. Hari
                        kedua kita akan ditutup dengan mengunjungi Pura Uluwatu untuk menyaksikan pertunjukan teater
                        tari Kecak dengan
                        ditemani matahari terbenam dan lautan lepas yang indah</p>
                </div>
            </div>
            <div class="destination-layer">
                <div class="destination-image">
                    <img src="{{URL::asset('/images/detailbali2.png')}}" alt="Image 2">
                </div>
            </div>
        </div>


        <div class="destination-item">
            <div class="destination-layer">
                <div class="destination-image">
                    <img src="{{URL::asset('/images/detailbali3.png')}}" alt="Image 3">
                </div>
            </div>
            <div class="destination-layer">
                <div class="destination-description">
                    <h4 style="" class="destination-tagline"><b><span><img style="max-height: 30px"
                                    src="{{ URL::asset('/images/iconwisata.png') }}" alt=""></span> Day 3</b></h4>
                    <h3><b>Tanjung Benoa Water sports-Pantai Jimbaran</b></h3>
                    <p style="text-align: justify">Hari terakhir kita di Pulau Dewata dimulai dengan berbelanja
                        cinderamata khas Bali di salah satu
                        toko pilihan kami. Puncak kegiatan kita adalah
                        berpetualang di wisata bahari Tanjung Benoa Watersports yang memacu adrenalin. Kita akan
                        mengucapkan selamat tinggal kepada Pulau Bali dengan menikmati santapan makan malam,
                        sembari ditemani matahari Terbenam di Pantai Jimbaran..</p>
                </div>

            </div>

        </div>
        <div class="text-center">
            <h1> PETA BALI </h1>
            <img class="peta-image" src="/images/Balimap.jpg" alt="">
        </div>
    </div>
</section>

@endsection
