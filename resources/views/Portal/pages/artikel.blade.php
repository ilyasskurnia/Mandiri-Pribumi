@extends('portal.layouts.templates')

@section('content')

<style>

/* .container {
    padding-left: 400px;

} */
/* Section 1: Banner */
.banner-section {
        font-family: 'Sora', sans-serif;
        background-image: url('{{ asset('images/bali1.jpg') }}');
        background-position: center;
        background-size: cover;
        color: #000;
        padding: 150px ;
    }

    .banner-section h1 {

color: #fff;
}

.banner-section h1.l {

color: #fff;
}

/* .containerkonten{
    background-color: #D9D9D9;
    margin-block: 20px;
} */
.konten1 {
    padding-left: 50px;
    padding-right: 50px;
}
.konten{
    background-color: #9E9A9A;
}
</style>

<!-- Section 1: Banner -->
<section class="banner-section">
    <div class="row text-right my-4" ">
        <h1><b>KESANA KEMARI</b></h1>
        <h1><span style="color: #ffffff;"><b>BERSAMA</b></span></h1>
        <h1><b>MANDIRI PRIBUMI</b></h1>
    </div>
</section>

<div class="container mt-5">
    <div class="row">
        <h4 style="text-align: left">
            KONTEN KAMI
        </h4>
    </div>
</div>

<div class="col-sm justify-content-between d-flex">
    <div class="col-sm konten1">
        <div class="container mt-4">
            <div class="row justify-content-between konten">
                <div class="col-1 mt-3">
                    <img width="200" height="200" src="{{URL::asset('/images/artikel1.png') }}" alt="Logo">
                </div>
                <div class="col-8 mt-3">
                    <h2>Kenalan dengan Angkringan : Salah satu icon kota Yogya</h2>
                    <p> <span> <img style="max-height: 50px" src="{{URL::asset('/images/admin.png') }}" alt=""></span> Admin , 20 Oktober 2023</p>
                </div>
                <div class="col-8 mt-1">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolor ad.
                    </p>
                    <a href="/unduh-pdf" class="btn btn-success mb-3">SHOW MORE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-"></div>

    <div class="col-sm konten1">
        <div class="container mt-4">
        <div class="row justify-content-between konten">
            <div class="col-1 mt-3">
                <img width="200" height="200" src="{{URL::asset('/images/artikel1.png') }}" alt="Logo">
            </div>
            <div class="col-8 mt-3">
                <h2>Kenalan dengan Angkringan : Salah satu icon kota Yogya</h2>
                <p> <span> <img style="max-height: 50px" src="{{URL::asset('/images/admin.png') }}" alt=""></span> Admin , 20 Oktober 2023</p>
            </div>
            <div class="col-8 mt-1">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolor ad.
                </p>
                <a href="/unduh-pdf" class="btn btn-success mb-3">SHOW MORE</a>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="col-sm justify-content-between d-flex">
    <div class="col-sm konten1">
        <div class="container mt-4">
            <div class="row justify-content-between konten">
                <div class="col-1 mt-3">
                    <img width="200" height="200" src="{{URL::asset('/images/artikel1.png') }}" alt="Logo">
                </div>
                <div class="col-8 mt-3">
                    <h2>Kenalan dengan Angkringan : Salah satu icon kota Yogya</h2>
                    <p> <span> <img style="max-height: 50px" src="{{URL::asset('/images/admin.png') }}" alt=""></span> Admin , 20 Oktober 2023</p>
                </div>
                <div class="col-8 mt-1">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolor ad.
                    </p>
                    <a href="/unduh-pdf" class="btn btn-success mb-3">SHOW MORE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-"></div>

    <div class="col-sm konten1">
        <div class="container mt-4">
        <div class="row justify-content-between konten">
            <div class="col-1 mt-3">
                <img width="200" height="200" src="{{URL::asset('/images/artikel1.png') }}" alt="Logo">
            </div>
            <div class="col-8 mt-3">
                <h2>Kenalan dengan Angkringan : Salah satu icon kota Yogya</h2>
                <p> <span> <img style="max-height: 50px" src="{{URL::asset('/images/admin.png') }}" alt=""></span> Admin , 20 Oktober 2023</p>
            </div>
            <div class="col-8 mt-1">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolor ad.
                </p>
                <a href="/unduh-pdf" class="btn btn-success mb-3">SHOW MORE</a>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="col-sm justify-content-between d-flex">
    <div class="col-sm konten1">
        <div class="container mt-4">
            <div class="row justify-content-between konten">
                <div class="col-1 mt-3">
                    <img width="200" height="200" src="{{URL::asset('/images/artikel1.png') }}" alt="Logo">
                </div>
                <div class="col-8 mt-3">
                    <h2>Kenalan dengan Angkringan : Salah satu icon kota Yogya</h2>
                    <p> <span> <img style="max-height: 50px" src="{{URL::asset('/images/admin.png') }}" alt=""></span> Admin , 20 Oktober 2023</p>
                </div>
                <div class="col-8 mt-1">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolor ad.
                    </p>
                    <a href="/unduh-pdf" class="btn btn-success mb-3">SHOW MORE</a><br>
                </div>
            </div>
        </div>
    </div>

    <div class="col-"></div>

    <div class="col-sm konten1">
        <div class="container mt-4">
        <div class="row justify-content-between konten">
            <div class="col-1 mt-3">
                <img width="200" height="200" src="{{URL::asset('/images/artikel1.png') }}" alt="Logo">
            </div>
            <div class="col-8 mt-3">
                <h2>Kenalan dengan Angkringan : Salah satu icon kota Yogya</h2>
                <p> <span> <img style="max-height: 50px" src="{{URL::asset('/images/admin.png') }}" alt=""></span> Admin , 20 Oktober 2023</p>
            </div>
            <div class="col-8 mt-1">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolor ad.
                </p>
                <a href="/unduh-pdf" class="btn btn-success mb-3">SHOW MORE</a><br>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
