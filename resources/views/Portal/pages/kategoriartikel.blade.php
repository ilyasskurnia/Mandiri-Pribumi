@extends('portal.layouts.templates')

@section('custom_head')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="{{ asset('css/media_query.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
<!-- Bootstrap CSS -->
<link href="{{ asset('css/style_1.css') }}" rel="stylesheet" type="text/css" />
<!-- Modernizr JS -->
<script src="{{ asset('js/modernizr-3.5.0.min.js') }}"></script>
@endsection

@section('content')

<style>
    /* CSS untuk section judul "Kategori Lifestyle" */
    .judul-kategori {
        background-color: #777;
        /* Warna latar belakang */
        padding: 20px;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        text-transform: uppercase;
        /* Mengubah teks menjadi huruf kapital */
        color: #fff;
        /* Warna teks */
        border-top-left-radius: 15px;
        /* Tambahkan radius untuk sudut atas kiri */
        border-top-right-radius: 15px;
        /* Tambahkan radius untuk sudut atas kanan */
        margin-bottom: 30px;
        /* Spasi bawah */
    }

    /* CSS untuk card artikel */
    .card {
        margin-bottom: 20px;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-img-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
        /* Warna judul artikel */
    }

    .card-text {
        font-size: 14px;
        color: #666;
    }

</style>

<br><br><br><br><br>

<section class="judul-kategori ">
    Kategori {{$kategori}}
</section>

<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Jelajahi Kategori <b>{{$kategori}}</b></div>
                </div>
                <div class="container-fluid">
                    <div class="row pb-4">
                        <!-- Baris 1 -->
                        @foreach ($card['artikel'] as $artikel)
                            
                       
                        <div class="col-md-6 mt-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fh5co_hover_news_img">
                                        <div class="fh5co_news_img">
                                            <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="" />
                                        </div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="animate-box">
                                        <a href="/portal/{{ $artikel->id }}/detailartikel" class="fh5co_magna py-2"> {{$artikel->title}} </a><br>
                                        <a class="fh5co_mini_time py-3"> {{$artikel->author}} -{{$artikel->created_at_formatted}} </a>
                                        <div class="fh5co_consectetur"> {{$artikel->deskripsi_singkat}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <!-- Dan seterusnya, ulangi struktur ini untuk setiap pasangan kolom baru -->

                    </div>
                </div>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Kategori Lainnya</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all mt-2">
                    @foreach ($card['get_kategori'] as $kategori)
                    <a href="/portal/artikel/kategori/{{$kategori}}" class="fh5co_tagg mt-3" style="margin-left: 25px;">{{$kategori}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
