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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap">
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

        /* css floating content */

    .floating-content1 {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.5);
        /* Latar belakang putih tulang dengan opacity 50% */
        border: none;
        padding: 10px;
        border-radius: 10px;
        /* Menambahkan border radius */
        box-shadow: none;
        cursor: pointer;
        transition: transform 0.2s, opacity 0.2s;
    }

    .floating-content1:hover {
        transform: scale(1.1);
        opacity: 0.8;
    }

    .floating-content1 i {
        color: #25d366;
        font-size: 30px;
    }

    .floating-content1 h3 {
        margin: 0;
        font-weight: bold;
    }

    .floating-content1 a {
        text-decoration: none;
        color: inherit;
    }

    .overlay {
        display: none;
        position: fixed;
        bottom: 70px;
        /* Posisi tinggi floating box di kanan bawah */
        right: 20px;
        /* Posisi horizontal floating box di kanan bawah */
        /* background: rgba(0, 0, 0, 0.5); */
        align-items: center;
        justify-content: center;
    }


    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    /* Perubahan gaya untuk floating box */
    .floating-box {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        position: relative;
        width: 100%;
        font-family: "Sora", sans-serif;
        /* Menggunakan jenis huruf Arial atau jenis huruf sans-serif lainnya */
    }

    .floating-box h3 {
        font-size: 20px;
        /* Ukuran huruf yang lebih besar untuk judul */
        margin: 10px 0;
        /* Margin atas dan bawah judul */
    }

    .floating-box p {
        font-size: 16px;
        /* Ukuran huruf yang lebih besar untuk konten */
    }

    .floating-box a {
        display: inline-block;
        padding: 10px 20px;
        background: #0088cc;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        margin-top: 20px;
        /* Margin di atas tombol */
    }

    .card-title1 {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
        /* warna teks */
        margin-bottom: 10px;
    }

    /* Gaya untuk Card Text */
    .card-text1 {
        font-size: 1rem;
        color: #555;
        /* warna teks */
        margin-bottom: 15px;
    }

    /* Gaya untuk Small Text (Last updated) */
    .text-muted {
        font-size: 0.8rem;
        color: #888;
        /* warna teks */
    }

        @media (max-width: 768px) {
            /* @media floating content */

.floating-content1 {
    padding: 0;
    padding-right: 0;
    background-color: #DCF8C6;
}

.floating-content1 i {
    display: none;
}

.floating-content1 h6 {
    font-size: 12px;
    padding: 10px;
}

.floating-box {
    width: 30%;
}

.iconwa {
    display: none;
}

.card-title1 {
    font-size: 10px;
}

.card-text1 {
    font-size: 10px;
}

.text-muted {
    font-size: 10px;
}
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

    /* html floating content */

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 text-center">
            <div class="floating-content1" id="floating-content1">
                <a href="" target="" style="text-decoration: none; color: inherit;">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
                <h6 class="ps-md-3 mt-2 mt-md-0"><b>Ada Yang Bisa Kami Bantu?</b></h6>
            </div>
        </div>
    </div>
</div>


<div class="overlay" id="overlay">
    <div class="card mb-3" style="max-width: 360px;">
        <div class="row g-0">
            <div class="col-md-4 iconwa">
                <img src="{{URL::asset('/images/float.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8 word-iconwa">
                <div class="card-body ">
                    <h5 class="card-title1"><b>Ada Yang Bisa Kami Bantu?</b></h5>
                    <p class="card-text1">Tanyakan pada admin <b>Mandiri Pribumi</b> <a
                            href="https://wa.me/your-whatsapp-number">di sini</a></p>
                    <p class="card-text1"><small class="text-muted">Atau hubungi kami langsung <a
                                href="/portal/kontak">di sini</a></small></p>
                    <span class="close" id="close">&times;</span>
                </div>
            </div>
        </div>
    </div>
</div>

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

    // Fungsi untuk menambahkan class "active" saat elemen berada dalam viewport
    function handleScroll() {
        const elements = document.querySelectorAll('.fade-in');
        elements.forEach((element) => {
            const elementRect = element.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            if (elementRect.top < windowHeight && elementRect.bottom >= 0) {
                element.classList.add('active');
            } else {
                element.classList.remove('active');
            }
        });
    }

    // Memanggil fungsi saat halaman dimuat dan saat menggulir
    window.addEventListener('load', handleScroll);
    window.addEventListener('scroll', handleScroll);

    const floatingContent1 = document.getElementById('floating-content1');
    const overlay = document.getElementById('overlay');
    const closeButton = document.getElementById('close');

    floatingContent1.addEventListener('click', () => {
        overlay.style.display = 'block';
    });

    closeButton.addEventListener('click', () => {
        overlay.style.display = 'none';
    });
    </script>
</body>

</html>
