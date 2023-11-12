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
        background-image: url('/images/detailartikel.png');
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
        <h1><b>BERBAGI CERITA</b></h1>
        <h1><b>DENGAN PARA</b></h1>
        <h1><b>CUSTOMER</b></h1>

    </div>
</section><br><br><br>

<div class="container mt-5">
    <div class="row">
        <h3 style="text-align: center">
            Kenalan dengan Angkringan : Salah satu icon kota Yogya
        </h3>
    </div>
    <div class="row mt-3">
        <p style="text-align: center"> <span> <img style="max-height: 50px" src="{{URL::asset('/images/admin.png') }}"
                    alt=""></span> Admin , 20 Oktober 2023</p>
    </div>
</div>

<div class="container mt-2">
    <div class="image1">
        <img style="align-self: center" width="333" height="499" src="{{URL::asset('/images/artikel1.png') }}" alt="">
    </div>
    <div class="row mt-5">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking
            at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
            as opposed to using 'Content here, content here', making it look like readable English. Many desktop
            publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for
            'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the
            years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
            literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
            Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
            Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable
            source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
            of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular
            during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
            section 1.10.32.</p>
    </div>
</div>

<div class="container mt-2">
    <div class="row mt-4">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. Contrary to popular belief, Lorem Ipsum is not simply random
            text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
            Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
            obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
            classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
            of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is
            a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
            "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
    </div>
</div>

@endsection
