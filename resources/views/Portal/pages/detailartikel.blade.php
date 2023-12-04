@extends('portal.layouts.templates')

@section('custom_head')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/media_query.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/owl.theme.default.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/style_1.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-3.5.0.min.js')}}"></script>
@endsection

@section('content')
<style>
    .banner-section {
        font-family: 'Sora', sans-serif;
        background-image: url('{{ asset('images/artikel-bg.jpg') }}');
        background-position: center;
        background-size: cover;
        color: #000;
        padding: 150px;
    }
    .banner-section h1 {
        color: #000000;
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
    }

</style>
<section class="single">
    @foreach ($data['get_data'] as $detail)
    <div id="fh5co-title-box" style="background-image: url({{ asset('storage/' . $detail->thumbnail) }}); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">
        <img src="images/person_1.jpg" alt="">
        <span>{{ $detail->created_at_formatted }}</span>
        <h2>{{ $detail->title }}</h2>
    </div>
    @endforeach
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                @foreach ($data['get_data'] as $content)
                    <p>{!! $content->content !!}</p>
                @endforeach
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Kategori</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    @foreach ($data['get_kategori'] as $kategori)
                    <a href="#" class="fh5co_tagg">{{ $kategori }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Pilihan Editor</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach ($data['get_random'] as $random)
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{ asset('storage/' . $random->thumbnail) }}" alt=""/></div>
                    <div>
                        <a href="#" class="d-block fh5co_small_post_heading"><span class="">{{ $random->title }}</span></a>
                        <div class="c_g"><i class="fa-regular fa-calendar-days"></i> {{ $random->created_at_formatted }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Parallax -->
<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
<!-- Main -->
<script src="{{ asset('js/main.js')}}"></script>
<script>if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)){$(window).stellar();}</script>


@endsection
