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

    /* Section 2: Bacaan Perjalanan */
    .bacaan-section {
        padding: 50px 0;
        background-color: #f7f7f7;
    }

    .bacaan-title {
        text-align: center;
        margin-bottom: 30px;
        font-size: 28px;
        color: #333;
    }

    .highlight-card {
        margin-bottom: 30px;
    }

    .highlight-card .card {
        border: none;
        /* Remove default card border */
    }

    .highlight-card .card-img-top {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .highlight-card .card-body {
        padding: 20px;
    }

    .highlight-card .card-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #333;
        text-transform: uppercase;
    }

    .highlight-card .card-subtitle {
        font-size: 14px;
        color: #777;
        margin-bottom: 10px;
        font-style: italic;
    }

    .highlight-card .card-text {
        font-size: 16px;
        margin-bottom: 15px;
        color: #555;
    }

    .highlight-card .author-date {
        font-size: 14px;
        color: #777;
        font-style: italic;
        margin-top: 5px;
    }

    .highlight-card .author-date1 {
        font-size: 14px;
        color: #777;
        font-style: italic;
        margin-top: 5px;
    }

    .highlight-card .btn-read-more {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .highlight-card .btn-read-more:hover {
        background-color: #555;
    }

    .blog-details {
        display: flex;
        align-items: left;
    }

    .blog-details img {
        width: 1px;
        height: 2px;
        border-radius: 50%;
        margin-right: 20px;
    }

    .blog-details-content {
        flex: 0, 1;
    }

    .blog-details {
        margin-bottom: 0;
        /* Menghilangkan margin bawah */
    }

    .blog-details-content {
        margin-left: 0;
        /* Menghilangkan margin kiri */
    }

    .blog-details-content h5 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
        color: #333;
        text-transform: uppercase;
        margin-top: 0;
    }

    .blog-details-content h6 {
        font-size: 14px;
        color: #777;
        margin-bottom: 5px;
        font-style: italic;
        margin-top: 0;
    }

    .blog-details-content p {
        font-size: 16px;
        margin-bottom: 15px;
        color: #555;
        margin-top: 0;
    }

    .blog-details-content .author-date {
        font-size: 14px;
        color: #777;
        font-style: italic;
        margin-top: 0;
    }

    /* Adjust margin between image and content in Column 2 */
    .non-card-column .blog-details {
        margin-bottom: 15px;
        /* Adjust this value as needed */
        margin-right: 10px;
    }

    /* Styling for non-card columns */
    .non-card-column {
        margin-bottom: 30px;
        flex-direction: row;
    }

    .non-card-column img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .non-card-column .blog-details {
        text-align: left;
    }

    .non-card-column .blog-details h5 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
        color: #333;
        text-transform: uppercase;
    }

    .non-card-column .blog-details h6 {
        font-size: 14px;
        color: #777;
        margin-bottom: 5px;
        font-style: italic;
    }

    .non-card-column .blog-details p {
        font-size: 16px;
        margin-bottom: 15px;
        color: #555;
    }

    .non-card-column .blog-details .author-date {
        font-size: 14px;
        color: #777;
        font-style: italic;
    }

    .non-card-column .title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #333;
        text-transform: uppercase;
    }

    .non-card-column .subtitle {
        font-size: 14px;
        color: #777;
        margin-bottom: 10px;
        font-style: italic;
    }

    .non-card-column .author-date1 {
        font-size: 14px;
        color: #777;
        font-style: italic;
        margin-top: 0;
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

<!-- Section 2: Bacaan Perjalanan -->
<section class="bacaan-section">
    <div class="container">
        <h2 class="bacaan-title">Bacaan Perjalanan</h2>
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-4">
                <div class="highlight-card">
                    <div class="card">
                        <img src="{{URL::asset('/images/card3.jpg')}}" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Judul Blog 1</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Jenis Blog 1</h6>
                            <p class="card-text">Deskripsi singkat mengenai konten blog 1.</p>
                            <p class="author-date">Author: Nama Penulis 1 | Tanggal: 12 November 2023</p>
                            <a href="#" class="btn-read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-md-4 non-card-column mr-10">
                <div class="blog-details">
                    <img src="{{URL::asset('/images/icon-artikel.png')}}" alt="Small Image 1">
                    <div class="blog-details-content">
                        <h5>Judul Blog 2</h5>
                        <h6>Jenis Blog 2</h6>
                        <p class="author-date">Author: Nama Penulis 2 | Tanggal: 13 November 2023</p>
                    </div>
                </div>
                <div class="blog-details">
                    <img src="{{URL::asset('/images/icon-artikel.png')}}" alt="Small Image 1">
                    <div class="blog-details-content">
                        <h5>Judul Blog 2</h5>
                        <h6>Jenis Blog 2</h6>
                        <p class="author-date">Author: Nama Penulis 2 | Tanggal: 13 November 2023</p>
                    </div>
                </div>
                <div class="blog-details">
                    <img src="{{URL::asset('/images/icon-artikel.png')}}" alt="Small Image 1">
                    <div class="blog-details-content">
                        <h5>Judul Blog 2</h5>
                        <h6>Jenis Blog 2</h6>
                        <p class="author-date">Author: Nama Penulis 2 | Tanggal: 13 November 2023</p>
                    </div>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-md-4 non-card-column mr-10">
                <div class="card-body">
                    <h5 class="title">Judul Blog 1</h5>
                    <h6 class="subtitle mb-2 text-muted">Jenis Blog 1</h6>
                    <p class="author-date1">Author: Nama Penulis 1 | Tanggal: 12 November 2023</p>
                </div>
                <div class="card-body">
                    <h5 class="title">Judul Blog 1</h5>
                    <h6 class="subtitle mb-2 text-muted">Jenis Blog 1</h6>
                    <p class="author-date1">Author: Nama Penulis 1 | Tanggal: 12 November 2023</p>
                </div>
                <div class="card-body">
                    <h5 class="title">Judul Blog 1</h5>
                    <h6 class="subtitle mb-2 text-muted">Jenis Blog 1</h6>
                    <p class="author-date1">Author: Nama Penulis 1 | Tanggal: 12 November 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
