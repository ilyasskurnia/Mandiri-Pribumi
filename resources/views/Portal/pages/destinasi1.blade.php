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
        padding: 170px 0;
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

    .review-section {
        background-color: #A89090;
        text-align: center;
        height: 250px;
    }

    .review-title {
        padding-top: 30px;
    }

    .review-profile {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }

    .review-profile img {
        max-width: 50px;
        height: auto;
    }

    .review-coloumn {
        padding-left: 20px;
    }

    .bintang {
        display: flex;
        max-width: 10px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .banner-content {
            padding: 50px 0;
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

        .box-card {
            padding-left: 0px;
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

<section class="review-section">
    <div class="container">
        <div class="review">
            <div class="review-title">
                <h3>Testimoni</h3>
            </div>
            <div class="sub-title">
                <h5>Review dari para pelanggan kami</h5>
            </div>
            <div class="review-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt magnam repellat iste, cumque, nostrum
                illum reiciendis reprehenderit nemo sed ab nobis corrupti excepturi esse atque obcaecati libero
                veritatis exercitationem ratione!
            </div>
            <div class="review-profile">
                <img src="{{URL::asset('/images/profile-picture.png')}}" alt="">
                <div class="review-coloumn">
                    <div class="profile-user">
                        Rani Raharjo
                    </div>
                    <div class="bintang">
                        <img src="{{URL::asset('/images/icon-bintang.png')}}" alt="">
                        <img src="{{URL::asset('/images/icon-bintang.png')}}" alt="">
                        <img src="{{URL::asset('/images/icon-bintang.png')}}" alt="">
                        <img src="{{URL::asset('/images/icon-bintang.png')}}" alt="">
                        <img src="{{URL::asset('/images/icon-bintang.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection
