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
        background-image: url('{{ asset('images/detailbanner.png') }}');
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
        margin-top: 60px    ;
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

    /* Responsive Styles */
    @media (max-width: 768px) {
        .banner-content {
            max-width: 90%;
        }

        .destination-item {
            flex-direction: column;
        }

        .destination-image,
        .destination-description {
            max-width: 100%;
            text-align: center;
        }
    }
</style>

<!-- Section 1: Banner -->
<section class="banner-section">
    <div class="container text-right mt-5">
        <h1><b>Paket Tour Bali</b></h1>
        <h2><b>4 Hari 3 Malam</b></h2>
        <a href="#" class="btn-brosur" style="text-align: left; display: inline-block; margin-top: 20px;">Download
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
                    <img src="{{URL::asset('/images/detailbali1.jpg')}}" alt="Image 1">
                </div>
            </div>
            <div class="destination-layer">
                <div class="destination-description">
                    <h4 class="destination-tagline"><b>Day 1</b></h4>
                    <h3>(Tiba di Bali-Danau Beratan-Ubud Monkey Forest
                        -Ubud Palace-Tanah Lot)</h3>
                    <p>Selamat datang di Pulau Bali! Hari ini, kami akan membawa Anda untuk menikmati keindahan alam dan
                        budaya pulau ini. Kami akan memulai hari dengan sarapan pagi di pinggir Danau Beretan sambil
                        menikmati matahari terbit. Kemudian, Anda akan berpetualang ke Ubud Monkey Forest,
                        mengeksplorasi alam dan keanekaragaman fauna Bali. Di samping itu, Anda akan merasakan
                        kebudayaan Bali dengan mengunjungi Ubud Palace. Hari ini akan ditutup dengan pemandangan
                        matahari terbenam yang spektakuler di Tanah Lot.</p>
                </div>
            </div>
        </div>

        <div class="destination-item">
            <div class="destination-layer">
                <div class="destination-description">
                    <h4 class="destination-tagline"><b>Day 2</b></h4>
                    <h3>(Monumen Bajra Sandhi-GWK Cultural Park-Pura Uluwatu)</h3>
                    <p>Petualangan kita pada hari ini, dibuka dengan mempelajari dan menghayati riwayat perjuangan
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
                    <img src="{{URL::asset('/images/detailbali2.jpg')}}" alt="Image 2">
                </div>
            </div>
        </div>

        <div class="destination-item">
            <div class="destination-layer">
                <div class="destination-image">
                    <img src="{{URL::asset('/images/detailbali3.jpg')}}" alt="Image 3">
                </div>
            </div>
            <div class="destination-layer">
                <div class="destination-description">
                    <h4 class="destination-tagline"><b>Day 3</b></h4>
                    <h3>(Tanjung Benoa Water sports-Pantai Jimbaran)</h3>
                    <p>Hari terakhir kita di Pulau Dewata dimulai dengan berbelanja cinderamata khas Bali di salah satu
                        toko pilihan kami. Puncak kegiatan kita adalah
                        berpetualang di wisata bahari Tanjung Benoa Watersports yang memacu adrenalin. Kita akan
                        mengucapkan selamat tinggal kepada Pulau Bali dengan menikmati santapan makan malam,
                        sembari ditemani matahari Terbenam di Pantai Jimbaran..</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection