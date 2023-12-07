@extends('portal.layouts.templates')

@section('custom_head')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer Testimonials</title>
<link rel="stylesheet" href="path_to_your_css/owl.carousel.min.css">
<link rel="stylesheet" href="path_to_your_css/owl.theme.default.min.css">
<link rel="stylesheet" href="path_to_your_css/bootstrap.min.css">
<link rel="stylesheet" href="path_to_your_css/your_custom_styles.css">
@endsection

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


    /* Section 2: Penawaran Spesial */
    .special-card img {
        width: 100%;
        /* Sesuaikan dengan ukuran yang diinginkan */
        height: 100%;
        /* Menjaga rasio aspek gambar */
        position: absolute;
        /* Mengatur gambar secara absolut relatif terhadap card */
        top: 0;
        left: 0;
        object-fit: cover;
        image-rendering: -webkit-optimize-contrast;
    }

    .special-card-body {
        position: relative;
        /* Menjadikan teks di atas gambar */
        z-index: ;
        /* Pastikan teks di atas gambar */
    }

    .special-offers {
        align-self: center;
        align-content: center;
    }

    .special-title1 {
        margin-top: 90px;
        font-size: 2.5em;
        color: #333;
        font-family: 'Fira Sans', sans-serif;
        font-weight: 100;
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
        margin-bottom: 30px;
        height: 427px;
        width: 304px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        margin-left: 55px;
    }

    .special-card1 {
        background-color: #f6e3d3;
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
        text-align: center;
        height: fit-content;
    }

    /* Gaya untuk bagian "Paket Destinasi" */
    .paket-destinasi {
        margin-top: 90px;
        padding: 50px 0;
        color: #fff;
        background-color: #F9F4F0;
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
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
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

    .quotes-section {
        background-image: url('{{ asset('images/quotesgambar1.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        padding: 200px 0;
    }

    .quotes-section2 {
        display: none;
    }

    /* CSS untuk teks 'Selengkapnya' */
    .selengkapnya {
        font-size: 18px;
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
        font-family: 'Satisfy', cursive;
        padding-top: 30px;
        color: #661b2b;
        /* Warna teks yang menarik */
        font-size: large;
        text-align: center;
        font-weight: bold;
        letter-spacing: 1px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        font-family:
            /* Efek bayangan pada teks */
    }

    .review-profile {
        margin-top: 0px;
        display: flex;
    }

    .review-profile img {
        max-width: 80px;
        height: auto;
        margin-bottom: 50px
    }

    .review-coloumn {
        padding-left: 20px;
    }

    .sub-title {
        margin-top: 30px;
    }

    .bintang {
        display: flex;
        max-width: 1px;
        margin-bottom: 50px;
    }

    /* client section start */
    .client_section {
  text-align: center;
  padding: 50px 0;
}

.heading_container {
  margin-bottom: 45px;
}

.heading_container h2 {
  font-size: 2em;
  margin-bottom: 0.5em;
  color: #333;
}

.heading_container h2 span {
  color: #6c63ff; /* Atau warna lain yang Anda inginkan */
}

/* Styling untuk carousel */
.owl-carousel .item {
  display: flex;
  justify-content: center;
}

.box {
  padding: 20px;
  background: #fff;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  margin: 15px;
  text-align: left;
}

/* Styling untuk profil dan kotak testimoni */
.profile {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}

.img-box {
  width: 80px;
  height: 80px;
  overflow: hidden;
  border-radius: 50%;
  margin-right: 15px;
}

.img-box img {
  width: 100%;
  height: auto;
}

.client_info h6 {
  font-weight: bold;
  margin: 0;
  color: #333;
}

.client_info p {
  font-size: 0.9em;
  color: #666;
  margin: 0;
}

.box {
  background: #fff;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  padding: 20px;
  margin-bottom: 30px;
}

.box p {
  color: #666;
  line-height: 1.6;
}

.detail-box p {
  color: #666;
  line-height: 1.6;
}

/* Styling untuk navigasi carousel */
.owl-nav {
  text-align: center;
}

.owl-nav .owl-prev,
.owl-nav .owl-next {
  background: #6c63ff;
  color: #fff;
  padding: 10px 20px;
  border-radius: 30px;
  margin: 5px;
  cursor: pointer;
}

.owl-nav .owl-prev:hover,
.owl-nav .owl-next:hover {
  background: #5a52d5;
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

        .quotes-section {
            display: none;
        }

        .quotes-section2 {
            background-image: url('{{ asset('images/quoteskanan1.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 134px 0;
            display: block;
            /* Menampilkan quotes-section2 pada media 768px */
        }

        .owl-carousel .item {
    flex-direction: column;
  }

  .profile {
    flex-direction: column;
    text-align: center;
  }

  .img-box {
    margin-right: 0;
    margin-bottom: 15px;
  }

    }
</style>

<!-- Section 1: Banner -->
<section class="banner-section" style="background-image: url('{{ asset('images/banner-destinasi1.png') }}');">
    <div class="container text-right mt-5">
        <h1><b>Your Adventure</b></h1>
        <h1><b>Travel Expert With</b></h1>
        <h1><b>Mandiri Pribumi</b></h1>
        <a href="/portal/kontak" class="btn-brosur"
            style="text-align: left; display: inline-block; margin-top: 20px;">Hubungi
            Kami</a>
    </div>
</section>

<!-- Section 2: Penawaran Spesial -->
<section class="special-offers mt-5">
    <div class="container">
        <h4 class="special-title1 text-center mb-5"><b>Jangan Lewatkan</b></h4>
        <h2 class="special-title2 text-center mb-5"><b>Penawaran Spesial</b></h2>
        <div class="row box-special-card">
            <div class="col-md-4">
                <div class="special-card text-center" style="position: relative;">
                    <img src="/images/penawaran-spesial1.png" alt="Studi Tour Sekolah">
                    <div class="special-card-body">
                        <p class="special-card-text">{{ $data['get_penawaran1'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="special-card text-center" style="position: relative;">
                    <img src="/images/penawaran-spesial2.png" alt="Liburan Musim Panas">
                    <div class="special-card-body">
                        <p class="special-card-text">{{ $data['get_penawaran2'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="special-card text-center" style="position: relative;">
                    <img src="/images/penawaran-spesial3.png" alt="Member Exclusive">
                    <div class="special-card-body">
                        <p class="special-card-text">{{ $data['get_penawaran3'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="paket-destinasi">
    <div class="container">
        <h2 class="text-center"
            style="font-family: 'Bebas Neue', sans-serif; font-size: 60px; margin-bottom: 7px; color: #000;">Paket
            Destinasi Yang Kami Tawarkan</h2>
        <div class="row">
            @foreach ($data['get_destinasi'] as $destinasi)
            <div class="col-md-4 mb-4">
                <div class="card" style="background-color: #ffffff;">
                    <img style="max-height: 220px" src="{{ asset('storage/' . $destinasi->thumbnail) }}"
                        class="card-img-top" alt="Destination Image">
                    <div class="card-body">
                        <div class="floating-container">
                            <p class="highlighted-text">{{ $destinasi->total_waktu }}</p>
                        </div>
                        <h5 class="card-title">{{ $destinasi->destinasi }}</h5>
                        <p class="card-subtitle">{{ $destinasi->rute }}</p>
                        <hr class="my-2" style="border-color: #000;"> <!-- Penambahan garis horizontal -->
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text detail-title">Mulai dari <br> <span style="color: red;">Rp.
                                        {{ $destinasi->biaya }}</span></p>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/portal/detaildestinasi/{{ $destinasi->id }}" class="selengkapnya">Selengkapnya
                                    -></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="quotes-section"></section>
<section class="quotes-section2"></section>


<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Testimoni <span>Pelanggan</span></h2>
        </div>
        <div class="row">
            <!-- Customer 1 -->
            <div class="col-md-4">
                <div class="box">
                    <div class="profile">
                        <div class="img-box">
                            <img src="/images/client1.jpg" alt="Client 1">
                        </div>
                        <div class="client_info">
                            <h6>LusDen2</h6>
                            <p>magna aliqua. Ut</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                </div>
            </div>
            <!-- Customer 2 -->
            <div class="col-md-4">
                <div class="box">
                    <div class="profile">
                        <div class="img-box">
                            <img src="/images/client2.jpg" alt="Client 2">
                        </div>
                        <div class="client_info">
                            <h6>Zen Court2</h6>
                            <p>magna aliqua. Ut</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                </div>
            </div>
            <!-- Customer 3 -->
            <div class="col-md-4">
                <div class="box">
                    <div class="profile">
                        <div class="img-box">
                            <img src="/images/client2.jpg" alt="Client 2">
                        </div>
                        <div class="client_info">
                            <h6>Zen Court3</h6>
                            <p>magna aliqua. Ut</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Include jQuery and other necessary scripts -->
<script src="path_to_your_scripts/jquery.min.js"></script>
<script src="path_to_your_scripts/owl.carousel.min.js"></script>
<script src="path_to_your_scripts/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $(".client_owl-carousel").owlCarousel({
    margin:10,
    loop:true,
    autoWidth:false,
    items:3 // Adjust number of items to display according to your needs
  });
});
</script>


@endsection
