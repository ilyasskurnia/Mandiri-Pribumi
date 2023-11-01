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
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <style>
        nav {
            display: flex;
            justify-content: space-between;
            height: 80px;
            background: #BDCDEA;
            display: flex;
            align-items: center;
            position: fixed;
            width: calc(100% - 240px);
            left: 240px;
            z-index: 100;
            padding: 0 20px;
            box-shadow: 0 1px 1px rgba(255, 255, 255, 0.1);
            transition: all 0.5s ease;

        }
        nav .sidebar-button {
            display: flex;
            align-items: center;
            font-size: var(--fs-20);
            font-weight: 500;
            color: #f5f5f5;
        }
        nav .sidebar-button i {
            font-size: 35px;
            margin-right: 10px;
            color: #f5f5f5;
        }
        nav .profile-details {
            display: flex;
            align-items: center;
            background: #F5F6FA;
            border: 2px solid #EFEEF1;
            border-radius: 15px;
            height: 50px;
            min-width: 190px;
            padding: 0 15px 0 2px;
        }
        nav .profile-details fa-solid {
            height: 40px;
            width: 40px;
            border-radius: 15px;
            object-fit: cover;
        }
        .page-title {
            padding-left: 10px;
        }
    </style>
        <nav>
            <div class="sidebar-button">
                <i class="fa-solid fa-bars sidebarBtn"></i>
                <span class="page-title" style="font-size: 20px; color :black">
                    @if(Request::is('dashboard/pesan'))
                        Pesan
                    @elseif(Request::is('dashboard/artikel'))
                        Artikel
                    @elseif(Request::is('dashboard/galeri'))
                        Galeri
                    @elseif(Request::is('dashboard/paketdestinasi'))
                        Paket Destinasi
                    @else
                        Dashboard
                    @endif
                </span>
            </div>
            <div class="profile-details">
                <i class="fa-solid fa-user fa-xl" style=" margin-right : 10px; margin-left : 10px"></i>
                <span class="admin_name" style="margin-left: 10px">{{ auth()->user()->name }}</span>
            </div>
        </nav>

    <div class="sidebar">
        @include('dashboard.components.sidebar')
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
