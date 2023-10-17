<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Travel</title>

    <!-- Tautan ke stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS tambahan untuk mempercantik tampilan -->
    <style>
        /* Tambahkan CSS kustom Anda di sini */
        .navbar {
            background-color: #BDCDEA;
            padding: 15px 0;
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
            /* Efek perubahan warna ketika dihover */
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
            /* Warna saat dihover */
        }

        .ml-auto {
            margin-left: auto;
            /* Menggeser menu ke kanan */
        }

        .footer {
            background-color: #BDCDEA;
            color: #000;
            text-align: center;
            padding: 10px 0;
        }

        .footer a {
            color: #000;
            /* Warna awal link */
            transition: color 0.3s;
            /* Efek perubahan warna ketika dihover */
        }

        .footer a:hover {
            color: #007bff;
            /* Warna saat dihover */
        }

        .footer i {
            font-size: 24px;
            /* Ukuran ikon */
            transition: color 0.3s;
            /* Efek perubahan warna ikon saat dihover */
        }

        .footer i:hover {
            color: #007bff;
            /* Warna ikon saat dihover */
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo-navbar.png') }}" alt="Logo Perusahaan"
                    style="width: 100px; margin-left: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"style="margin-right: 40px;">
                <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')
    <!-- Ini adalah area konten yang akan disesuaikan oleh halaman yang menggunakan layout.templates -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Bagian kiri (logo besar) -->
                    <img src="{{ asset('images/logo-footer.png') }}" alt="Logo Perusahaan" class="img-fluid">
                </div>
                <div class="col-lg-4">
                    <!-- Bagian tengah (alamat) -->
                    <p style="font-family: 'Sora', sans-serif;">Alamat Perusahaan:</p>
                    <p style="font-family: 'Sora', sans-serif;">Jalan Perjalanan No. 123</p>
                    <p style="font-family: 'Sora', sans-serif;">Kota Wisata, 12345</p>
                    <p style="font-family: 'Sora', sans-serif;">Indonesia</p>
                </div>
                <div class="col-lg-4">
                    <!-- Bagian kanan (contact us dan ikon sosial media) -->
                    <h5 style="font-family: 'Sora', sans-serif;">Contact Us</h5>
                    <ul class="list-unstyled d-flex justify-content-between" style="font-size: 24px;">
                        <li><a href="#" style="color: #000;"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" style="color: #000;"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#" style="color: #000;"><i class="fab fa-tiktok"></i></a></li>
                        <li><a href="#" style="color: #000;"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center mt-4" style="font-family: 'Sora', sans-serif;">
            <p>&copy; 2023 Mandiri Pribumi Tour & Travel</p>
        </div>
    </footer>
</body>

</html>