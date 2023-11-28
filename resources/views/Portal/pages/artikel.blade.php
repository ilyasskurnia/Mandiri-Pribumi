@extends('portal.layouts.templates')

@section('content')

<style>
    /* Section 1: Banner */

    .banner-section {
        font-family: 'Sora', sans-serif;
        background-image: url('{{ asset('images/bali1.jpg') }}');
        background-position: center;
        background-size: cover;
        color: #000;
        padding: 150px;
    }

    .banner-section h1 {
        color: #fff;
    }

    /* Container Styles */
    .container-konten {
        margin: 20px;
        padding: 15px;
    }

    .container-konten h4 {
        text-align: left;
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }


    .konten1 {
        padding-left: 50px;
        padding-right: 50px;
    }

    .konten {
        background-color: #fff;
        /* Change to white background */
        color: #000;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        /* Add shadow for floating effect */
        transition: 0.3s;
        margin: 10px;
        padding: 20px;
    }

    .konten:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        /* Add a hover effect for more pronounced floating */
    }

    /* Section 4: Galeri */
    .galeri-section {
        font-family: 'Sora', sans-serif;
        background-color: #ffffff;
        padding: 30px;
        align-content: center;
    }

    .artikel-item {
        padding-left: 0px;
        padding-bottom: 30px;
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
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Ubah nilai sesuai kebutuhan */
        transition: box-shadow 0.3s ease;
        /* Tambahkan transition agar efeknya lebih halus */
        /* Sesuaikan lebar maksimal card sesuai kebutuhan */
        border-radius: 10px;
    }

    .galeri:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .galeri-kami-judul {
        margin-top: 10px;
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

    /* Section 7: Artikel Kami */

    .art-title {
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

    .artikel {
        background-color: #F2EEEB;
        padding: 50px;
    }

    .artikel-heading {
        text-align: center;
        font-size: 36px;
        color: #333;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .artikel-box {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .artikel-foreach {
        display: flex;
        width: 45%;
        margin: 15px;
        padding: 15px;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .artikel-image {
        flex: 0 0 30%;
        margin-right: 20px;
    }

    .artikel-image img {
        width: 100%;
        border-radius: 8px;
    }

    .right-content {
        margin-top: 10px;
        flex: 1;
    }

    .artikel-jenis {
        background-color: red;
        color: #fff;
        border-radius: 2px;
        margin-bottom: 10px;
        width: fit-content;
        font-style: italic;
    }

    .artikel-title {
        text-transform: uppercase;
        font-style: bold;
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
    }

    .artikel-content {
        font-size: 16px;
        color: #555;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .bottom-detail {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .artikel-date,
    .artikel-created {
        display: flex;
        align-items: center;
        color: #777;
    }

    .artikel-icon {
        margin-right: 5px;
    }

    .date {
        font-style: italic;
    }

    .artikel-user {
        font-style: italic;
    }

    .btn-read-more {
        background-color: #777;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        margin-left: 10px;
        margin-bottom: 10px;
        margin-top: 10px;
        transition: background-color
    }

    .btn-read-more:hover {
        background-color: #333;
    }

    .artikel-jenis,
    .artikel-title,
    .artikel-content,
    .bottom-detail {
        padding-left: 10px;
        padding-right: 10px;
    }

    /* Artikel Row Section */
    .artikel-row {
        padding: 50px 0;
    }

    /* Konten Box */
    .content-box {
        position: relative;
        height: 200px;
        /* Sesuaikan tinggi konten */
        background-size: cover;
        background-position: center;
        border-radius: 8px;
    }

    /* Teks di Atas Gambar */
    .text-overlay {
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255, 0.7);
        /* Opacity untuk latar belakang teks */
        padding: 10px;
        border-radius: 8px;
        text-align: center;
    }

    /* Gaya teks */
    .text-overlay h4 {
        margin: 0;
        color: #333;
        /* Warna teks */
        font-size: 16px;
        /* Ukuran teks */
        font-weight: bold;
        /* Ketebalan teks */
    }

    /* Gaya untuk Mini Artikel */
    .mini-artikel {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255, 0.7);
        /* Opacity untuk latar belakang teks */
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        width: 80%;
        /* Sesuaikan lebar mini-artikel */
    }

    /* Gaya teks di dalam Mini Artikel */
    .mini-artikel h4 {
        margin: 0;
        color: #333;
        /* Warna teks */
        font-size: 14px;
        /* Ukuran teks */
        font-style: italic;
        /* Gaya teks */
    }

    .mini-artikel h3 {
        margin: 10px 0;
        color: #333;
        /* Warna teks */
        font-size: 18px;
        /* Ukuran teks */
        font-weight: bold;
        /* Ketebalan teks */
    }

    .mini-artikel a {
        color: #4AA580;
        /* Warna tautan */
        text-decoration: none;
        /* Menghilangkan garis bawah pada tautan */
        transition: color 0.3s ease;
        /* Animasi saat mengubah warna tautan */
    }

    .mini-artikel a:hover {
        color: #777;
        /* Warna tautan saat hover */
    }

    @media (max-width: 768px) {
        .konten1 {
            padding: 20px;
            margin-left: 0;
        }

        .container-konten {
            margin-bottom: 20px;
        }

        .banner-section {
            padding: 50px;
        }

        /* New style for smartphone layout */
        .konten-card {
            margin: 10px 0;
            padding: 20px;
        }

        /* Adjust header and footer styles */
        .navbar {
            margin: 0;
            /* Remove margin to prevent overlap */
        }

        .footer {
            margin: 0;
            /* Remove margin to prevent overlap */
        }

        /* Set content to a single column per row */
        .konten1,
        .col-sm.konten1 {
            flex-direction: column;
        }
    }

</style>

<!-- Section 1: Banner -->
<section class="banner-section">
    <div class="row text-right my-4">
        <h1><b>KESANA KEMARI</b></h1>
        <h1><span style="color: #ffffff;"><b>BERSAMA</b></span></h1>
        <h1><b>MANDIRI PRIBUMI</b></h1>
    </div>
</section>

<div class="container-konten mt-5">
    <div class="row">
        <h2 class="text-center" style="font-family: 'Bebas Neue', sans-serif; font-size: 60px; margin-top: 10px;">
            Artikel Terbaru</h2>
    </div>
</div>

<!-- Section 2: Artikel -->
<section class="galeri-section">
    <div class="container">
        <div class="row artikel-item">
            <!-- Galeri Item 1 - Highlighted -->
            <div class="col-md-6">
                <div class="galeri galeri-highlighted">
                    <div style="width: 100%; padding-bottom: 110%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="right-content">
                        <div class="artikel-jenis">Jenis Apa</div>
                        <div class="artikel-title">Judul Artikel</div>
                        <div class="artikel-content">Isi artikel singkat dapat ditampilkan di sini.</div>
                        <a href="#" class="btn-read-more">Read More</a>
                        <div class="bottom-detail">
                            <div class="artikel-date">
                                <div class="artikel-icon">
                                    <img src="{{URL::asset('/images/calender.png') }}" alt="">
                                </div>
                                <div class="date">11/10/2023</div>
                            </div>
                            <div class="artikel-created">
                                <div class="artikel-created-icon">
                                    <img src="{{URL::asset('/images/admin.png') }}" alt="">
                                </div>
                                <div class="artikel-user">By Admin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="galeri">
                            <div style="width: 100%; padding-bottom: 70%; position: relative;">
                                <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                    <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                                    <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </picture>
                            </div>
                            <div class="right-content">
                                <div class="artikel-jenis">Jenis Apa</div>
                                <div class="artikel-title">Judul Artikel</div>
                                <div class="artikel-content">Isi artikel singkat dapat ditampilkan di sini.</div>
                                <a href="#" class="btn-read-more">Read More</a>
                                <div class="bottom-detail">
                                    <div class="artikel-date">
                                        <div class="artikel-icon">
                                            <img src="{{URL::asset('/images/calender.png') }}" alt="">
                                        </div>
                                        <div class="date">11/10/2023</div>
                                    </div>
                                    <div class="artikel-created">
                                        <div class="artikel-created-icon">
                                            <img src="{{URL::asset('/images/admin.png') }}" alt="">
                                        </div>
                                        <div class="artikel-user">By Admin</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="galeri">
                            <div style="width: 100%; padding-bottom: 70%; position: relative;">
                                <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                    <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                                    <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </picture>
                            </div>
                            <div class="right-content">
                                <div class="artikel-jenis">Jenis Apa</div>
                                <div class="artikel-title">Judul Artikel</div>
                                <div class="artikel-content">Isi artikel singkat dapat ditampilkan di sini.</div>
                                <a href="#" class="btn-read-more">Read More</a>
                                <div class="bottom-detail">
                                    <div class="artikel-date">
                                        <div class="artikel-icon">
                                            <img src="{{URL::asset('/images/calender.png') }}" alt="">
                                        </div>
                                        <div class="date">11/10/2023</div>
                                    </div>
                                    <div class="artikel-created">
                                        <div class="artikel-created-icon">
                                            <img src="{{URL::asset('/images/admin.png') }}" alt="">
                                        </div>
                                        <div class="artikel-user">By Admin</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 4 dan 5 -->
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="galeri">
                            <div style="width: 100%; padding-bottom: 70%; position: relative;">
                                <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                    <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                                    <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </picture>
                            </div>
                            <div class="right-content">
                                <div class="artikel-jenis">Jenis Apa</div>
                                <div class="artikel-title">Judul Artikel</div>
                                <div class="artikel-content">Isi artikel singkat dapat ditampilkan di sini.</div>
                                <a href="#" class="btn-read-more">Read More</a>
                                <div class="bottom-detail">
                                    <div class="artikel-date">
                                        <div class="artikel-icon">
                                            <img src="{{URL::asset('/images/calender.png') }}" alt="">
                                        </div>
                                        <div class="date">11/10/2023</div>
                                    </div>
                                    <div class="artikel-created">
                                        <div class="artikel-created-icon">
                                            <img src="{{URL::asset('/images/admin.png') }}" alt="">
                                        </div>
                                        <div class="artikel-user">By Admin</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="galeri">
                            <div style="width: 100%; padding-bottom: 70%; position: relative;">
                                <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                    <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                                    <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </picture>
                            </div>
                            <div class="right-content">
                                <div class="artikel-jenis">Jenis Apa</div>
                                <div class="artikel-title">Judul Artikel</div>
                                <div class="artikel-content">Isi artikel singkat dapat ditampilkan di sini.</div>
                                <a href="#" class="btn-read-more">Read More</a>
                                <div class="bottom-detail">
                                    <div class="artikel-date">
                                        <div class="artikel-icon">
                                            <img src="{{URL::asset('/images/calender.png') }}" alt="">
                                        </div>
                                        <div class="date">11/10/2023</div>
                                    </div>
                                    <div class="artikel-created">
                                        <div class="artikel-created-icon">
                                            <img src="{{URL::asset('/images/admin.png') }}" alt="">
                                        </div>
                                        <div class="artikel-user">By Admin</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="artikel-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="content-box" style="background-image: url('{{ asset('images/card1.jpg') }}');">
                            <div class="text-overlay mini-artikel">
                                <h4 style="font-size: 10px;">Author: Nama Penulis | Tanggal: 19 November 2023</h4>
                                <h3>Judul Artikel</h3>
                                <a href="/portal/detailartikel"><b>Read More</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="content-box" style="background-image: url('{{ asset('images/card1.jpg') }}');">
                            <div class="text-overlay mini-artikel">
                                <h4 style="font-size: 10px;">Author: Nama Penulis | Tanggal: 19 November 2023</h4>
                                <h3>Judul Artikel</h3>
                                <a href="/portal/detailartikel"><b>Read More</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="content-box" style="background-image: url('{{ asset('images/card1.jpg') }}');">
                            <div class="text-overlay mini-artikel">
                                <h4 style="font-size: 10px;">Author: Nama Penulis | Tanggal: 19 November 2023</h4>
                                <h3>Judul Artikel</h3>
                                <a href="/portal/detailartikel"><b>Read More</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="content-box" style="background-image: url('{{ asset('images/card1.jpg') }}');">
                            <div class="text-overlay mini-artikel">
                                <h4 style="font-size: 10px;">Author: Nama Penulis | Tanggal: 19 November 2023</h4>
                                <h3>Judul Artikel</h3>
                                <a href="/portal/detailartikel"><b>Read More</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="content-box" style="background-image: url('{{ asset('images/card1.jpg') }}');">
                            <div class="text-overlay mini-artikel">
                                <h4 style="font-size: 10px;">Author: Nama Penulis | Tanggal: 19 November 2023</h4>
                                <h3>Judul Artikel</h3>
                                <a href="/portal/detailartikel"><b>Read More</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="content-box" style="background-image: url('{{ asset('images/card1.jpg') }}');">
                            <div class="text-overlay mini-artikel">
                                <h4 style="font-size: 10px;">Author: Nama Penulis | Tanggal: 19 November 2023</h4>
                                <h3>Judul Artikel</h3>
                                <a href="/portal/detailartikel"><b>Read More</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container-konten mt-5">
            <div class="row">
                <h2 class="text-center"
                    style="font-family: 'Bebas Neue', sans-serif; font-size: 60px; margin-top: 5px;">
                    Semua Artikel</h2>
            </div>
        </div>


        <div class="row mt-5 artikel-item">
            <!-- Galeri Item 1 -->
            <div class="col-md-4">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card1.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="right-content">
                        <div class="artikel-jenis">Jenis Apa</div>
                        <div class="artikel-title">Judul Artikel</div>
                        <div class="artikel-content">Isi artikel singkat dapat ditampilkan di sini.</div>
                        <a href="#" class="btn-read-more">Read More</a>
                        <div class="bottom-detail">
                            <div class="artikel-date">
                                <div class="artikel-icon">
                                    <img src="{{URL::asset('/images/calender.png') }}" alt="">
                                </div>
                                <div class="date">11/10/2023</div>
                            </div>
                            <div class="artikel-created">
                                <div class="artikel-created-icon">
                                    <img src="{{URL::asset('/images/admin.png') }}" alt="">
                                </div>
                                <div class="artikel-user">By Admin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Galeri Item 2 -->
            <div class="col-md-4">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="right-content">
                        <div class="artikel-jenis">Jenis Apa</div>
                        <div class="artikel-title">Judul Artikel</div>
                        <div class="artikel-content">Isi artikel singkat dapat ditampilkan di sini.</div>
                        <a href="#" class="btn-read-more">Read More</a>
                        <div class="bottom-detail">
                            <div class="artikel-date">
                                <div class="artikel-icon">
                                    <img src="{{URL::asset('/images/calender.png') }}" alt="">
                                </div>
                                <div class="date">11/10/2023</div>
                            </div>
                            <div class="artikel-created">
                                <div class="artikel-created-icon">
                                    <img src="{{URL::asset('/images/admin.png') }}" alt="">
                                </div>
                                <div class="artikel-user">By Admin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 3 -->
            <div class="col-md-4">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="right-content">
                        <div class="artikel-jenis">Jenis Apa</div>
                        <div class="artikel-title">Judul Artikel</div>
                        <div class="artikel-content">Isi artikel singkat dapat ditampilkan di sini.</div>
                        <a href="#" class="btn-read-more">Read More</a>
                        <div class="bottom-detail">
                            <div class="artikel-date">
                                <div class="artikel-icon">
                                    <img src="{{URL::asset('/images/calender.png') }}" alt="">
                                </div>
                                <div class="date">11/10/2023</div>
                            </div>
                            <div class="artikel-created">
                                <div class="artikel-created-icon">
                                    <img src="{{URL::asset('/images/admin.png') }}" alt="">
                                </div>
                                <div class="artikel-user">By Admin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 artikel-item">
            <!-- Galeri Item 1 -->
            <div class="col-md-4">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card1.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="right-content">
                        <div class="artikel-jenis">Jenis Apa</div>
                        <div class="artikel-title">Judul Artikel</div>
                        <div class="artikel-content">Isi artikel singkat dapat ditampilkan di sini.</div>
                        <a href="#" class="btn-read-more">Read More</a>
                        <div class="bottom-detail">
                            <div class="artikel-date">
                                <div class="artikel-icon">
                                    <img src="{{URL::asset('/images/calender.png') }}" alt="">
                                </div>
                                <div class="date">11/10/2023</div>
                            </div>
                            <div class="artikel-created">
                                <div class="artikel-created-icon">
                                    <img src="{{URL::asset('/images/admin.png') }}" alt="">
                                </div>
                                <div class="artikel-user">By Admin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Galeri Item 2 -->
            <div class="col-md-4">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card2.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="right-content">
                        <div class="artikel-jenis">Jenis Apa</div>
                        <div class="artikel-title">Judul Artikel</div>
                        <div class="artikel-content">Isi artikel singkat dapat ditampilkan di sini.</div>
                        <a href="#" class="btn-read-more">Read More</a>
                        <div class="bottom-detail">
                            <div class="artikel-date">
                                <div class="artikel-icon">
                                    <img src="{{URL::asset('/images/calender.png') }}" alt="">
                                </div>
                                <div class="date">11/10/2023</div>
                            </div>
                            <div class="artikel-created">
                                <div class="artikel-created-icon">
                                    <img src="{{URL::asset('/images/admin.png') }}" alt="">
                                </div>
                                <div class="artikel-user">By Admin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galeri Item 3 -->
            <div class="col-md-4">
                <div class="galeri">
                    <div style="width: 100%; padding-bottom: 100%; position: relative;">
                        <picture style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <source srcset="{{URL::asset('/images/card3.jpg')}}" media="(min-width: 768px)">
                            <img src="{{URL::asset('/images/card3.jpg')}}" alt="Karimun Jawa"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </div>
                    <div class="right-content">
                        <div class="artikel-jenis">Jenis Apa</div>
                        <div class="artikel-title">Judul Artikel</div>
                        <div class="artikel-content">Isi artikel singkat dapat ditampilkan di sini.</div>
                        <a href="#" class="btn-read-more">Read More</a>
                        <div class="bottom-detail">
                            <div class="artikel-date">
                                <div class="artikel-icon">
                                    <img src="{{URL::asset('/images/calender.png') }}" alt="">
                                </div>
                                <div class="date">11/10/2023</div>
                            </div>
                            <div class="artikel-created">
                                <div class="artikel-created-icon">
                                    <img src="{{URL::asset('/images/admin.png') }}" alt="">
                                </div>
                                <div class="artikel-user">By Admin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
