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
        background-color: #D9D9D9;
        margin: 20px;
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
        <h4 style="text-align: center">
            <b>KONTEN KAMI</b>
        </h4>
    </div>
</div>

<div class="col-sm col-12 konten1">
    <div class="container mt-4">
        <div class="row justify-content-between konten">
            <div class="col-12 col-md-2 mt-3 text-center">
                <img width="250" height="250" src="{{ URL::asset('/images/artikel1.png') }}" alt="Logo">
            </div>
            <div class="col-8 mt-3">
                <h2>Kenalan dengan Angkringan: Salah satu icon kota Yogya</h2>
                <p><span><img style="max-height: 50px" src="{{ URL::asset('/images/admin.png') }}" alt=""></span> Admin,
                    20 Oktober 2023</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolor ad.
                </p>
                <a href="{{ url('/portal/detailartikel') }}" class="btn btn-success mb-3"
                    style="background-color: #2622DE; color: #fff;">SHOW MORE</a>
            </div>
        </div>
    </div>
</div>

<div class="col-sm col-12 konten1">
    <div class="container mt-4">
        <div class="row justify-content-between konten">
            <div class="col-12 col-md-2 mt-3 text-center">
                <img width="250" height="250" src="{{ URL::asset('/images/artikel1.png') }}" alt="Logo">
            </div>
            <div class="col-8 mt-3">
                <h2>Kenalan dengan Angkringan: Salah satu icon kota Yogya</h2>
                <p><span><img style="max-height: 50px" src="{{ URL::asset('/images/admin.png') }}" alt=""></span> Admin,
                    20 Oktober 2023</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolor ad.
                </p>
                <a href="{{ url('/portal/detailartikel') }}" class="btn btn-success mb-3"
                    style="background-color: #2622DE; color: #fff;">SHOW MORE</a>
            </div>
        </div>
    </div>
</div>

<div class="col-sm col-12 konten1">
    <div class="container mt-4">
        <div class="row justify-content-between konten">
            <div class="col-12 col-md-2 mt-3 text-center">
                <img width="250" height="250" src="{{ URL::asset('/images/artikel1.png') }}" alt="Logo">
            </div>
            <div class="col-8 mt-3">
                <h2>Kenalan dengan Angkringan: Salah satu icon kota Yogya</h2>
                <p><span><img style="max-height: 50px" src="{{ URL::asset('/images/admin.png') }}" alt=""></span> Admin,
                    20 Oktober 2023</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolor ad.
                </p>
                <a href="{{ url('/portal/detailartikel') }}" class="btn btn-success mb-3"
                    style="background-color: #2622DE; color: #fff;">SHOW MORE</a>
            </div>
        </div>
    </div>
</div>

<div class="col-sm col-12 konten1">
    <div class="container mt-4">
        <div class="row justify-content-between konten">
            <div class="col-12 col-md-2 mt-3 text-center">
                <img width="250" height="250" src="{{ URL::asset('/images/artikel1.png') }}" alt="Logo">
            </div>
            <div class="col-8 mt-3">
                <h2>Kenalan dengan Angkringan: Salah satu icon kota Yogya</h2>
                <p><span><img style="max-height: 50px" src="{{ URL::asset('/images/admin.png') }}" alt=""></span> Admin,
                    20 Oktober 2023</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolor ad.
                </p>
                <a href="{{ url('/portal/detailartikel') }}" class="btn btn-success mb-3"
                    style="background-color: #2622DE; color: #fff;">SHOW MORE</a>
            </div>
        </div>
    </div>
</div>
@endsection
