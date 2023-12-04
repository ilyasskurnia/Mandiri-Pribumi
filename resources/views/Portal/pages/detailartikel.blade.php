@extends('portal.layouts.templates')

@section('content')

<style>
    body {
        margin: 0;
        /* Hapus margin dari body */
        padding: 0;
        /* Hapus padding dari body */
    }

    .container {
        padding: 0;
        /* Hapus padding dari elemen .container */
    }

    /* Section 1: Banner */
    .banner-section {
        font-family: 'Sora', sans-serif;
        background-image: url('{{ asset('storage/' . $data['get_data']->first()->thumbnail) }}');
        background-size: 110%;
        background-position: center;
        color: #000;
        padding: 200px 0;
    }

    .banner-section h1 {
        color: #fff;
    }

    .image1 {
        text-align: center;
    }

    /* Responsive image */
    .image1 img {
        max-width: 100%;
        height: auto;
    }

    .container p {
        text-align: justify;
    }

    @media (max-width: 768px) {
        .banner-section {
            padding: 80px 0;
        }

        .image1 img {
            padding-left: 0;
        }

        .container p {
            padding-left: 10px;
            padding-right: 10px;
            text-align: justify;
        }
    }
</style>

<!-- Section 1: Banner -->
<section class="banner-section">
    <div class="container text-right my-4">
        {{-- <h1><b>BERBAGI CERITA</b></h1>
        <h1><b>DENGAN PARA</b></h1>
        <h1><b>CUSTOMER</b></h1> --}}
    </div>
</section><br><br><br>
@foreach ($data['get_data'] as $konten)
<div class="container mt-5">
    <div class="row">
        <h3 style="text-align: center">
            {{ $konten->title }}
        </h3>
    </div>
    <div class="row mt-3">
        <p style="text-align: center"> <span> <img style="max-height: 50px" src="{{URL::asset('/images/admin.png') }}"
                    alt=""></span> {{ $konten->author }} , {{ $konten->created_at_formatted }}</p>
    </div>
</div>
<div class="container mt-2 mb-5 text-center">
    <div class="row mt-5">
        {!! $konten->content !!}
    </div>
</div>
@endforeach


@endsection
