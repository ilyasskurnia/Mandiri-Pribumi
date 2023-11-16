<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandiri Pribumi</title>

    <!-- Tautan ke stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="icon" type="image/png" href="{!! asset('images/favicon.png') !!}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


    <!-- CSS tambahan untuk mempercantik tampilan -->
    <style>
        body {
            background-image: url('{{ asset('images/bg_mandiripribumi.png') }}');
        }

        .navbar {
            background-color: transparent;
            transition: background-color 0.5s, color 0.5s;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .navbar.navbar-scrolled {
            background-color: #ffffff;
            color: #000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            font-family: 'Sora', sans-serif;
            font-weight: 700;
            color: #000;
            margin-right: 30px;
        }

        .navbar-nav .nav-link {
            font-family: 'Sora', sans-serif;
            font-weight: 400;
            color: #000;
            padding: 15px 20px;
            transition: color 0.3s;
            margin-right: 40px;
            font-size: 20px;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        .ml-auto {
            margin-left: auto;
        }

        .footer {
            background-color: #BDCDEA;
            color: #000;
            text-align: center;
            padding: 10px 0;
        }

        .address {
            text-align: left;
        }

        .address a {
            display: block;
            font-family: 'Sora', sans-serif;
            text-decoration: none;
            margin-top: 25px;
            text-align: left;
        }

        .footer a {
            color: #000;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: #007bff;
        }

        .footer i {
            font-size: 35px;
            transition: color 0.3s;
        }

        .footer i:hover {
            color: #007bff;
        }
        .contact {
            text-align: left;
        }
        .contact a {
            display: block;
            font-family: 'Sora', sans-serif;
            text-decoration: none;
            margin-top: 18px;
            text-align: left;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/portal">
                <img src="{{ asset('images/logo-navbar.png') }}" alt="Logo Perusahaan"
                    style="width: 100px; margin-left: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                style="margin-right: 40px;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/portal')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/portal/tentang')}}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/portal/galeri')}}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/portal/destinasi')}}">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/portal/artikel')}}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/portal/kontak')}}">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="contact">
                        <h5><strong>CONTACT</strong></h5>
                        <a> Jl. Graha Aura No.29, Ketileng, Kel. Sendang Mulyo, Kec. Tembalang, Kota Semarang</a><br>
                        <a> P. +6289546782</a><br>
                        <a>E. mandiripribumitour@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 ps-5 mt-4">
                    <div class="address">
                        <h5><strong>COMPANY</strong></h5>
                        <a href="{{ url('/portal/tentang')}}" style="font-family: 'Sora', sans-serif;">Tentang Kami</a>
                        <a href="{{ url('/portal/destinasi')}}" style="font-family: 'Sora', sans-serif;">Destinasi</a>
                        <a href="{{ url('/portal/galeri')}}" style="font-family: 'Sora', sans-serif;">Galeri</a>
                        <a href="{{ url('/portal/kontak')}}" style="font-family: 'Sora', sans-serif;">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <h5 style="font-family: 'Sora', sans-serif;"><strong>Cari tahu lebih tentang kami !!!</strong></h5>
                    <ul class="list-unstyled d-flex justify-content-evenly" style="font-size: 40px;">
                        <li><a href="#" style="color: #000;"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" style="color: #000;"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#" style="color: #000;"><i class="fab fa-tiktok"></i></a></li>
                        <li><a href="#" style="color: #000;"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center mt-5" style="font-family: 'Sora', sans-serif;">
            <p>&copy; 2023 Mandiri Pribumi Tour & Travel</p>
        </div>
    </footer>

    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('.navbar').addClass('navbar-scrolled');
                } else {
                    $('.navbar').removeClass('navbar-scrolled');
                }
            });
        });
    </script>
</body>

</html>
