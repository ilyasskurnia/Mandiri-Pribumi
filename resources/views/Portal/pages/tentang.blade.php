@extends('portal.layouts.templates')

@section('content')

<style>
    .about-us-banner {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    .video-container {
        position: relative;
        width: 100%;
        height: 100%;
    }

    video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .banner-text {
        position: absolute;
        top: 25%;
        left: 20%;
        transform: translate(-50%, -50%);
        color: #fff;
        text-align: left;
        font-size: 24px;
    }

    .banner-text {
        font-size: 2.5em;
        margin: 0;
        font-family: 'Sora', sans-serif;
        /* Ganti dengan font yang Anda inginkan */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        /* Efek bayangan pada teks */
        letter-spacing: 2px;
        /* Jarak antar huruf */
        line-height: 1.2;
        /* Tinggi baris */
    }

    .about-us-content {
        padding: 50px 0;
        background-color: #E4E2E2;
    }

    .about-us-details h2 {
        font-size: 2.5em;
        margin-bottom: 10px;
        color: #333;
    }

    .about-us-details h3 {
        font-size: 1.8em;
        margin-bottom: 15px;
        color: #555;
    }

    .about-us-details p {
        font-size: 18px;
        color: #777;
        line-height: 1.6;
    }


    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 12px 24px;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin-top: 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .logo-container img {
        max-width: 100%;
        height: 200px;
    }


    .company-history {
        padding: 50px 0;
        background-color: #fff;
        /* Ganti warna latar belakang sesuai kebutuhan Anda */
    }

    .history-details {
        padding: 20px;
    }

    .history-details h2 {
        font-size: 2.5em;
        margin-bottom: 10px;
        color: #333;
    }

    .history-details h3 {
        font-size: 1.8em;
        margin-bottom: 15px;
        color: #555;
    }

    .history-details p {
        font-size: 18px;
        color: #000;
        line-height: 1.6;
    }

    .btn-secondary {
        background-color: #6c757d;
        /* Ganti warna tombol sesuai kebutuhan Anda */
        color: #fff;
        border: none;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 15px;
    }

    .btn-secondary:hover {
        background-color: #545b62;
        /* Ganti warna saat tombol dihover sesuai kebutuhan Anda */
    }

    .history-image img {
        max-width: 100%;
        height: auto;
    }

    .company-vision-mission {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        color: #fff;
        padding: 200px 0;
    }

    .vision-mission-container {
        padding: 20px;
        border-radius: 10px;
    }

    .vision-mission-content {
        text-align: center;
        margin-bottom: 30px;
    }

    .vision-mission-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        /* Efek sudut bulat */
        margin-bottom: 20px;
    }

    .vision-mission-content h2 {
        font-size: 2.5em;
        margin-bottom: 20px;
        color: #fff;
        /* Warna teks */
    }

    .vision-mission-content p {
        font-size: 18px;
        line-height: 1.6;
        color: #fff;
        /* Warna teks */
        margin-bottom: 20px;
    }

    .why-choose-us {
        padding: 50px 0;
    }

    .image-with-caption {
        position: relative;
        text-align: center;
        color: white;
    }

    .image-with-caption img {
        width: 100%;
        /* membuat gambar memenuhi lebar kolom */
        height: auto;
        /* menjaga rasio aspek gambar */
    }


    .caption {
        margin-bottom: 12px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* Tambahkan gaya tambahan seperti background, padding, dll. */
    }

    .caption h3 {
        margin-top: 20px;
    }


    .section-title {
        font-size: 2.5em;
        color: #333;
        /* Warna teks judul */
    }

    .image-with-overlay {
        position: relative;
        overflow: hidden;
        margin-bottom: 30px;
    }

    .image-caption {
        text-align: center;
        font-size: 24px;
        margin-top: 5px;
        color: #333;
        /* Warna teks */
        font-weight: bold;
        /* Membuat teks lebih tebal */
    }


    .image-with-overlay img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }

    .overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        opacity: 0;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        width: 100%;
        height: 100%;
        padding: 20px;
        transition: opacity 0.3s ease;
    }

    .overlay h3 {
        font-size: 1.8em;
        margin-bottom: 10px;
    }

    .overlay p {
        font-size: 16px;
    }

    .image-with-overlay:hover .overlay {
        opacity: 1;
    }

    .image-with-overlay:hover img {
        transform: scale(1.1);
    }

    /* Gaya untuk bagian "Apa Yang Kami Tawarkan" */
    .what-we-offer {
        padding: 70px 0;
        background-size: cover;
        background-position: center;
        color: #fff;
        text-align: center;
    }

    .title {
        font-size: 32px;
        /* Atur ukuran font */
        color: #000;
        /* Warna teks */
        margin-bottom: 20px;
        /* Jarak bawah dari judul */
        font-weight: bold;
        /* Tebal */
        text-transform: uppercase;
        /* Huruf kapital */
        text-align: center;
        /* Pusatkan horizontal */
        letter-spacing: 2px;
        /* Spasi antar huruf */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        /* Efek bayangan teks */
    }

    .caption-content {
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 30px;
        text-align: left;
        /* Ubah alignment teks menjadi kiri */
    }

    .caption-content h3 {
        font-size: 1.8em;
        margin-bottom: 10px;
    }

    .caption-content p {
        font-size: 18px;
    }

    .card {
        background-color: rgba(255, 255, 255, 1);
        border: none;
        border-radius: 0px;
        margin-bottom: 30px;
        margin-left: 0px;
        height: 100%;
        /* Card akan mengisi tinggi sesuai konten */
    }

    .card i {
        font-size: 40px;
        color: #333;
        margin-bottom: 15px;
    }

    .card-title {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 16px;
    }

    .mitra-container {
        display: block;
        background-color: gainsboro;
        justify-content: center;
        align-items: center;
        overflow-x: auto;
        margin-left: auto;
        margin-right: auto;
        padding: 30px 0;
        border: 1px solid gainsboro;
        border-radius: 10px;
        box-shadow: 0 20px 10px rgba(0, 0, 0, 0.3);
    }

    @media only screen and (max-width: 768px) {
        /* Contoh untuk mengubah ukuran teks */
        .mitra-container {
            padding: 10px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .why2 {
            font-size: 90%;
        }

        .image-with-caption {
            padding-bottom: 5px;
        }

        .banner-text {
            margin-top: 80px;
            margin-left: 100px;
        }

        .logo-container {
            display: none;
        }

        .history-image {
            padding-left: 50px;
        }

        .banner-text,
        .about-us-details h2,
        .about-us-details h3,
        .history-details h2,
        .history-details h3,
        .vision-mission-content h2,
        .section-title,
        .title {
            font-size: 1.5em;
            /* Mengubah ukuran font */
        }

        /* Mengatur ulang padding dan margin */
        .about-us-content,
        .company-history,
        .company-vision-mission,
        .why-choose-us,
        .what-we-offer {
            padding: 30px 0;
        }

        /* Mengubah ukuran logo */
        .logo-container img {
            height: 150px;
            /* Mengurangi ukuran logo */
        }

        /* Mengatur ulang tata letak kolom */
        .about-us-details,
        .history-details,
        .vision-mission-content,
        .caption-content {
            padding: 15px;
        }

        .col-md-6,
        .col-md-4,
        .col-md-3,
        .col-md-2 {
            flex: 0 0 100%;
            max-width: 100%;
            /* Membuat semua kolom memenuhi 100% lebar layar */
        }

        /* Mengatur ulang ukuran dan posisi elemen lain */
        .banner-text {
            left: 10%;
            /* Mengubah posisi teks banner */
        }

        /* Mengatur ulang tampilan card */
        .card {
            margin-bottom: 20px;
        }

        /* Mengatur ulang ukuran gambar pada section Client Kami */
        .mitra-container img {
            max-height: 60vh;
        }
    }
</style>


<section class="about-us-banner">
    <div class="video-container">
        <video autoplay muted loop>
            <source src="{{ asset('images/tentangbanner.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
        <div class="banner-text">
            <h3><span style="color: #661b2b;">Tentang</span> Mandiri Pribumi</h3>
            <h1>TOUR & TRAVEL</h1>
        </div>
    </div>
</section>

<section class="about-us-content">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="about-us-details">
                    <h2>Mandiri Pribumi</h2>
                    <h3>TOUR & TRAVEL</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <a href="{{ asset('compro/Compro mandiri pribumi.pdf') }}" download target="_blank" class="btn btn-primary">Unduh Company
                        Profile</a>
                </div>
            </div>
            <div class="col-md-2 mt-4">
                <div class="logo-container">
                    <img src="{{URL::asset('/images/Logo-tentang.png') }}" alt="Mandiri Pribumi Logo">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="company-history">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="history-details">
                    <h2 style="font-family: 'Bebas Neue', sans-serif; font-size: 60px; margin-top: 10px;">Sejarah Perusahaan</h2>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-md-2 mt-4">
                <div class="history-image">
                    <img src="{{URL::asset('/images/pendiri.png') }}" alt="Sejarah Perusahaan">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="company-vision-mission" style="background-image: url('{{ asset('images/bannertentangkami.png') }}');">
    <div class="vision-mission-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="vision-mission-content">
                        <h2 style="font-family: 'Bebas Neue', sans-serif; font-size: 60px; margin-top: 10px;">Visi Perusahaan</h2>
                        <p>
                            Perusahaan tour dan travel yang terpercaya dengan mengedepankan kepuasan pelanggan melalui
                            layanan yang berkualitas dan berdedikasi untuk memberikan manfaat dalam sektor pariwisata.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vision-mission-content">
                        <h2 style="font-family: 'Bebas Neue', sans-serif; font-size: 60px; margin-top: 10px;">Misi Perusahaan</h2>
                        <p>
                            Menjamin pelayanan perjalanan dan wisata yang aman serta nyaman kepada pelanggan Berkomitmen
                            dengan standar yang tinggi dalam melayani pelanggan .Melengkapi dengan pelayanan handal,
                            harga yang kompetitif dan kejujuran
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-us">
    <div class="container">
        <h2 class="section-title text-center mb-5" style="font-family: 'Bebas Neue', sans-serif; font-size: 60px; margin-top: 10px;">Mengapa Harus Kami</h2>
        <div class="row why">
            <div class="col-md-4">
                <div class="image-with-caption">
                    <img src="{{URL::asset('/images/cardtentangkami1.png') }}" alt="Image 1">
                    <div class="caption">
                        <h3>Kualitas Pelayanan</h3>
                        <p>Konsistensi dan berdedikasi dalam memberikan pelayanan sepenuh hati</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="image-with-caption">
                    <img src="{{URL::asset('/images/cardtentangkami1.png') }}" alt="Image 1">
                    <div class="caption">
                        <h3 class="why1">Terpercaya</h3>
                        <p class="why2">Kami sebagai perusahaan yang berpengalaman sejak tahun 2004,
                            telah melayani lebih dari 100 pelanggan sehingga dapat diandalkan dalam
                            memenuhi kepuasan pelanggan</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="image-with-caption">
                    <img src="{{URL::asset('/images/cardtentangkami1.png') }}" alt="Image 1">
                    <div class="caption">
                        <h3>Dukungan Lokal</h3>
                        <p>Memberikan nuansa lokal yang
                            berkesan bagi pelanggan dan bermanfaat bagi sektor pariwisata</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<h2 class="section-title text-center mb-5" style="font-family: 'Bebas Neue', sans-serif; font-size: 60px; margin-top: 10px;">Apa Yang Kami Tawarkan</h2>
<section class="what-we-offer" style="background-image: url('{{ asset('images/bannertentangkami9.png') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="caption-content">
                    <h3>#JelajahNusantara -</h3>
                    <p>Tagline ini mempresentasikan akar dari nilai Mandiri Pribumi,dengan semangat memberikan
                        pengalaman menjelajahi lanskap Nusantara demi membantu orang orang merekam kebahagiaan.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-earth-asia" style="color: #023997;"></i>
                        <h5 class="card-title">#JelajahPesona</h5>
                        <p class="card-text">Mengajak anda untuk menjelajahi pesona alam nusantara</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-utensils" style="color: #023997;"></i>
                        <h5 class="card-title">#JelajahRasa</h5>
                        <p class="card-text">Mengajak anda untuk menjelajahi citra rasa kuliner nusantara</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-gopuram" style="color: #023997;"></i>
                        <h5 class="card-title">#JelajahBudaya</h5>
                        <p class="card-text">Mengajak anda untuk menjelajahi dan melestarikan aneka ragam nusantara</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 9: Client Kami -->
<section class="text-center mt-5">
    <h2 style="font-family: 'Bebas Neue', sans-serif; font-size: 60px; margin-top: 10px;">Client Kami</h2>
    <div class="container my-5">
        <div class="mitra-container">

            <img style="max-height: 80vh" src="{{URL::asset('/images/clientkami.png') }}" alt="Logo">

        </div>
    </div>
</section>

<script>
    document.addEventListener('visibilitychange', function () {
        if (document.hidden) {
            document.querySelectorAll('video').forEach(function (video) {
                video.pause();
            });
        } else {
            document.querySelectorAll('video').forEach(function (video) {
                video.play();
            });
        }
    });
</script>



@endsection
