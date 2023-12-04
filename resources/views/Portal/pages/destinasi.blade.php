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
        padding: 210px 0;
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


    /* Section 2: Penawaran Spesial */
    .special-offers {
        align-self: center;
    }

    .special-title1 {
        margin-top: 30px;
        font-size: 2.5em;
        color: #333;
        font-family: 'Satisfy', cursive;
    }

    .special-title2 {
        margin-top: -50px;
        font-size: 4em;
        color: #333;
    }

    .box-special-card {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .special-card {
        border: none;
        border-radius: 8px;
        margin-bottom: 30px;
        height: 150px;
        width: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .special-card1 {
        background-color: rgb(128, 141, 219);
    }

    .special-card2 {
        background-color: #C98B8B;
    }

    .special-card3 {
        background-color: #FF5858;
    }

    .special-card-title {
        font-size: 24px;
        color: #fff;
        font-weight: bold;
        margin-bottom: 10px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
        /* Efek bayangan pada teks */
    }

    .special-card-text {
        font-size: 18px;
        color: #fff;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
        /* Efek bayangan pada teks */
    }

    .special-card:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }

    .review-section {
        background-color: #a4cee6;
        text-align: center;
        height: 300px;
        border-radius: 88px 88px 0 0;
    }

    .background-khusus {
        background-color: #c0e6f9;
    }

    /* Gaya untuk bagian "Paket Destinasi" */
    .paket-destinasi {
        margin-top: 90px;
        padding: 50px 0;
        color: #fff;
        background-color: #c0e6f9;
        border-radius: 88px 88px 0 0;
    }

    .section-title {
        font-size: 2.5em;
        color: #fff;
        text-align: center;
        /* Gaya tambahan untuk judul yang menarik */
        font-family: 'Satisfy', cursive;
        /* Gunakan font Satisfy dari Google Fonts */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        /* Efek bayangan pada teks */
        letter-spacing: 2px;
        /* Jarak antar huruf */
        line-height: 1.2;
        /* Tinggi baris */
    }

    .destinasi-title {
        padding-top: 30px;
        color: #000;
        font-size: 36px;
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        /* Efek bayangan pada teks */
    }

    .card {
        border: none;
        border-radius: 8px;
    }

    .card-img-top {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        max-width: 100%;
        height: auto;
    }

    .card-body {
        padding: 20px;
    }

    .floating-container {
        background-color: #fff;
        border-radius: 4px;
        padding: 5px 10px;
        float: center;
        text-align: left;
        margin-bottom: 10px;
        margin-top: -35px;
        /* Mengatur letak elemen floating container */
    }

    .highlighted-text {
        margin-left: 10px;
        font-size: large;
        font-weight: bold;
        /* Menebalkan teks */
        color: #661b2b;
        /* Warna teks yang menarik */
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        /* Efek bayangan pada teks */
    }

    .card-title {
    font-size: 1.5em;
    margin-top: 10px;
    margin-bottom: 5px;
    background: linear-gradient(to right, #2c3e50, #3498db);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline;
}


    .card-subtitle {
        color: #777;
        margin-bottom: 10px;
    }

    hr {
        border-top: 1px solid #000;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    /* CSS untuk detail harga */
    .detail-title {
        font-size: 14px;
        color: #777;
        margin-bottom: 0;
    }

    .detail-price {
        font-size: 18px;
        color: red;
        margin-bottom: 0;
        font-weight: bold;
    }


    .card-text {
        font-size: 16px;
        margin-bottom: 0;
    }

    /* CSS untuk teks 'Selengkapnya' */
    .selengkapnya {
        font-size: 20px;
        color: #42A0E4;
        text-decoration: none;
        display: block;
        text-align: right;
        margin-top: 15px;
        transition: color 0.3s ease;
    }

    .selengkapnya:hover {
        color: #38A2E3;
        font-weight: bold;
    }


    .review-title {
        padding-top: 30px;
        color: #661b2b;
        /* Warna teks yang menarik */
        font-size: 28px;
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        /* Efek bayangan pada teks */
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
    .sub-title {
        margin-top: 30px;
    }

    .bintang {
        display: flex;
        max-width: 10px;
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

        .special-title1 {
            font-size: 2em;
        }

        .special-title2 {
            font-size: 3em;
        }

        .special-card {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
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



{{-- <section class="text-center mt-5">
    <h2>Menghadirkan Wisata sebagai Bagian Tak Terpisahkan dari Kehidupan Anda.</h2>
    <h4>Ini Nanti isinya adalah quotes</h4>
    <h6>Ini author</h6>
</section> --}}

<!-- Section 2: Penawaran Spesial -->
<section class="special-offers mt-5">
    <div class="container">
        <h4 class="special-title1 text-center mb-5"><b>Jangan Lewatkan</b></h4>
        <h2 class="special-title2 text-center mb-5"><b>Penawaran Spesial</b></h2>
        <div class="row box-special-card">
            <div class="col-md-4">
                <div class="special-card special-card1 text-center">
                    <div class="special-card-body">
                        <h3 class="special-card-title">Studi Tour Sekolah</h3>
                        <p class="special-card-text">Up to 20% off</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="special-card special-card2 text-center">
                    <div class="special-card-body">
                        <h3 class="special-card-title">Liburan Musim Panas</h3>
                        <p class="special-card-text">Up to 20% off</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="special-card special-card3 text-center">
                    <div class="special-card-body">
                        <h3 class="special-card-title">Member Exclusive</h3>
                        <p class="special-card-text">Up to 20% off</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="background-khusus">
    <section class="paket-destinasi">
        <div class="container">
            <h2 class="destinasi-title text-center mb-5">Paket Destinasi Yang Kami Tawarkan</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #D9D9D9;">
                        <img src="{{URL::asset('/images/carddestinasi1.png')}}" class="card-img-top"
                            alt="Destination Image">
                        <div class="card-body">
                            <div class="floating-container">
                                <p class="highlighted-text">3 Hari 2 Malam</p>
                            </div>
                            <h5 class="card-title">Karimun Jawa</h5>
                            <p class="card-subtitle">Karimun Jawa, Jawa Tengah, Indonesia</p>
                            <hr class="my-2" style="border-color: #000;"> <!-- Penambahan garis horizontal -->
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text detail-title">Mulai dari <br> <span style="color: red;">Rp.
                                            2.100.000</span></p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="/portal/detaildestinasikarimun" class="selengkapnya">Selengkapnya -></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #D9D9D9;">
                        <img src="{{URL::asset('/images/carddestinasi2.png')}}" class="card-img-top"
                            alt="Destination Image">
                        <div class="card-body">
                            <div class="floating-container">
                                <p class="highlighted-text">3 Hari 2 Malam</p>
                            </div>
                            <h5 class="card-title">Bali</h5>
                            <p class="card-subtitle">Pulau Bali, Indonesia</p>
                            <hr class="my-2" style="border-color: #000;"> <!-- Penambahan garis horizontal -->
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text detail-title">Mulai dari <br> <span style="color: red;">Rp.
                                            2.100.000</span></p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="/portal/detaildestinasibali" class="selengkapnya">Selengkapnya -></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #D9D9D9;">
                        <img src="{{URL::asset('/images/carddestinasi3.png')}}" class="card-img-top"
                            alt="Destination Image">
                        <div class="card-body">
                            <div class="floating-container">
                                <p class="highlighted-text">3 Hari 2 Malam</p>
                            </div>
                            <h5 class="card-title">Yogyakarta</h5>
                            <p class="card-subtitle">Daerah Istimewa Jogjakarta, Jawa Tengah, Indonesia</p>
                            <hr class="my-2" style="border-color: #000;"> <!-- Penambahan garis horizontal -->
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text detail-title">Mulai dari <br> <span style="color: red;">Rp.
                                            2.100.000</span></p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="/portal/detaildestinasijogja" class="selengkapnya">Selengkapnya -></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #D9D9D9;">
                        <img src="{{URL::asset('/images/carddestinasi4.png')}}" class="card-img-top"
                            alt="Destination Image">
                        <div class="card-body">
                            <div class="floating-container">
                                <p class="highlighted-text">3 Hari 2 Malam</p>
                            </div>
                            <h5 class="card-title">Malang - Bromo</h5>
                            <p class="card-subtitle">Malang, Jawa Timur, Indonesia</p>
                            <hr class="my-2" style="border-color: #000;"> <!-- Penambahan garis horizontal -->
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text detail-title">Mulai dari <br> <span style="color: red;">Rp.
                                            2.100.000</span></p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="/portal/detaildestinasimalang" class="selengkapnya">Selengkapnya -></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #D9D9D9;">
                        <img src="{{URL::asset('/images/carddestinasi5.png')}}" class="card-img-top"
                            alt="Destination Image">
                        <div class="card-body">
                            <div class="floating-container">
                                <p class="highlighted-text">3 Hari 2 Malam</p>
                            </div>
                            <h5 class="card-title">Raja Ampat</h5>
                            <p class="card-subtitle">Raja Ampat, Papua Barat, Indonesia</p>
                            <hr class="my-2" style="border-color: #000;"> <!-- Penambahan garis horizontal -->
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text detail-title">Mulai dari <br> <span style="color: red;">Rp.
                                            2.100.000</span></p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="#" class="selengkapnya">Selengkapnya -></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #D9D9D9;">
                        <img src="{{URL::asset('/images/carddestinasi6.png')}}" class="card-img-top"
                            alt="Destination Image">
                        <div class="card-body">
                            <div class="floating-container">
                                <p class="highlighted-text">3 Hari 2 Malam</p>
                            </div>
                            <h5 class="card-title">Pulau Komodo</h5>
                            <p class="card-subtitle">Pulau Komodo, Nusa Tenggara Timur, Indonesia</p>
                            <hr class="my-2" style="border-color: #000;"> <!-- Penambahan garis horizontal -->
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text detail-title">Mulai dari <br> <span style="color: red;">Rp.
                                            2.100.000</span></p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="#" class="selengkapnya">Selengkapnya -></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan card lain jika diperlukan -->
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</div>
@endsection
