@extends('portal.layouts.templates')

@section('custom_head')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="{{ asset('css/media_query.css')}}" rel="stylesheet" type="text/css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="{{ asset('css/animate.css')}}" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link href="{{ asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
<!-- Bootstrap CSS -->
<link href="{{ asset('css/style_1.css')}}" rel="stylesheet" type="text/css" />
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
    <div id="fh5co-title-box" style="background-image: url('/images/banner1.jpg'); background-position: 50% 90.5px;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="page-title">
            <img src="images/person_1.jpg" alt="">
            <span>January 1, 2018</span>
            <h2>How to write interesting articles</h2>
        </div>
    </div>
    <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla malesuada enim id enim congue
                        convallis. Praesent a cursus orci. Proin mauris eros, rhoncus in risus nec, vestibulum dignissim
                        diam. Duis dapibus, magna ac fringilla consectetur, tellus quam aliquam quam, molestie tincidunt
                        justo risus et nunc. Donec quis justo nec diam hendrerit facilisis placerat non magna. Class
                        aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </p>
                    <p>
                        Nulla tincidunt sit amet ligula interdum pulvinar. Sed nec volutpat enim. Praesent pretium
                        ullamcorper
                        quam, at rhoncus magna consectetur quis. Nulla condimentum, libero vel varius sodales, lacus
                        urna
                        accumsan purus, at
                        mattis nisi nibh in lorem. Sed laoreet, ante vitae tincidunt auctor, sapien metus tincidunt
                        ante,
                        quis aliquam lacus risus id quam.
                    </p>
                    <h3>Free HTML5 Templates</h3>
                    <p>
                        Nam vehicula viverra quam, nec ornare ex convallis eget. Praesent pulvinar, justo at lacinia
                        elementum, dolor elit facilisis massa, vel feugiat elit massa et libero. Praesent hendrerit
                        metus eu
                        elementum commodo. Morbi tempus mi a nulla scelerisque, vitae vulputate nisi commodo. Maecenas
                        felis
                        urna, dictum quis mollis quis, mollis vel ligula. Nullam sodales sapien tellus, ornare tincidunt
                        dolor imperdiet at. Vestibulum convallis, felis quis condimentum finibus, justo lectus aliquam
                        libero, eu lacinia tellus leo eu orci.
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, modi!</li>
                        <li>Ea iure at, debitis culpa perspiciatis suscipit laudantium a, expedita.</li>
                        <li>Voluptate distinctio perspiciatis cum sed ipsum nisi accusantium a aut!</li>
                        <li>Sed vel quo dignissimos, quaerat totam officia, deserunt provident minus.</li>
                    </ul>
                    <p>
                        Maecenas consequat dictum aliquam. Praesent nec magna at ipsum facilisis dictum sit amet nec
                        arcu.
                        Donec ac metus a elit rhoncus euismod et sit amet velit. Nunc quis lacus vel metus tincidunt
                        vulputate in et libero. Aliquam dolor lacus, facilisis ultrices rutrum in, blandit vitae nulla.
                        Nullam vestibulum, odio vitae aliquam aliquam, nibh dui iaculis augue, ut tristique nisi est in
                        tellus. Fusce volutpat ultricies venenatis. In a arcu in tellus tincidunt accumsan. Nulla
                        pretium at
                        ex viverra vulputate. Cras mollis velit metus, non suscipit felis luctus sit amet. Ut vel leo
                        vitae
                        magna blandit tempor in sit amet arcu. Donec dignissim mattis dui. Donec ultrices malesuada
                        sapien,
                        ut fermentum nisi efficitur eu. Phasellus dui eros, posuere vel lacus vitae, venenatis feugiat
                        libero. Nunc sed nisi feugiat, consequat arcu id, vehicula augue. Donec viverra tincidunt nisi
                        eget
                        ornare.
                    </p>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="fh5co_tags_all">
                        <a href="#" class="fh5co_tagg">Business</a>
                        <a href="#" class="fh5co_tagg">Technology</a>
                        <a href="#" class="fh5co_tagg">Sport</a>
                        <a href="#" class="fh5co_tagg">Art</a>
                        <a href="#" class="fh5co_tagg">Lifestyle</a>
                        <a href="#" class="fh5co_tagg">Three</a>
                        <a href="#" class="fh5co_tagg">Photography</a>
                        <a href="#" class="fh5co_tagg">Lifestyle</a>
                        <a href="#" class="fh5co_tagg">Art</a>
                        <a href="#" class="fh5co_tagg">Education</a>
                        <a href="#" class="fh5co_tagg">Social</a>
                        <a href="#" class="fh5co_tagg">Three</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
            </div>
            <div class="owl-carousel owl-theme" id="slider2">
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/39-324x235.jpg" alt="" /></div>
                        <div>
                            <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer
                                    speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/joe-gardner-75333.jpg" alt="" /></div>
                        <div>
                            <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer
                                    speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/ryan-moreno-98837.jpg" alt="" /></div>
                        <div>
                            <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer
                                    speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/seth-doyle-133175.jpg" alt="" /></div>
                        <div>
                            <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer
                                    speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
    integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
    integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
</script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Parallax -->
<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
<!-- Main -->
<script src="{{ asset('js/main.js')}}"></script>
<script>
    if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)) {
        $(window).stellar();
    }
</script>


@endsection
