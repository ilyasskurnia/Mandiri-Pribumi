<style>
    .sidebar-content {
        position: fixed;
        height: 100%;
        width: 240px;
        background : #BDCDEA;
        transition: all 0.5s ease;
    }
    .sidebar-content .logo-details {
        height: 70px;
        display: flex;
    }
    .sidebar-content .logo-details img {
        width: 105px;
        margin: auto;
    }
    .nav-links {
        margin-top: 5rem;
    }
    .sidebar-content .nav-links li {
        position: relative;
        list-style: none;
    }
    .sidebar-content .nav-links li a {
        height: 100%;
        width: 100%;
        display: flex;
        /* align-items: center; */
        text-decoration: none;
        transition: all 0.4s ease;
    }
    .sidebar-content .nav-links li i {
        min-width: 60px;
        text-align: center;
        font-size: 20px;
        color: var(--white);
        height: 60px;
    }

    .sidebar-content .nav-links li a .links_name {
        color: black;
        font-size: 15px;
        font-weight: 400;
        white-space: nowrap;
    }
    /* .sidebar-content .nav-links li a.active {
        background: rgb(191, 95, 95);
    } */
</style>
<div class="sidebar-content">
    {{-- <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('pesan.baru') }}">Pesan Baru</a></li>
    <li><a href="{{ route('paket.destinasi') }}">Paket Destinasi</a></li>
    <li><a href="{{ route('total.pesanan') }}">Total Pesanan</a></li>
    <li><a href="{{ route('pesan') }}">Pesan</a></li>
    <li><a href="{{ route('artikel') }}">Artikel</a></li> --}}
    <div class="logo-details">
        <img src="{{URL::asset('/images/Logo-tentang.png')}}">
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{ url('/dashboard') }}" class="active">
                <i><iconify-icon icon="bx:grid-alt"></iconify-icon></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/dashboard/paketdestinasi') }}">
                <i class="fa-solid fa-cart-plus" style="color: #2b78ff;"></i>
                <span class="links_name">Paket Destinasi</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/dashboard/galeri') }}">
                <i class="fa-solid fa-image" style="color: #2b78ff;"></i>
                <span class="links_name">Galeri</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/dashboard/pesan') }}">
                <i class="fa-solid fa-envelope-open-text" style="color: #2b78ff;"></i>
                <span class="links_name">Pesan</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/dashboard/artikel') }}">
                <i class="fa-solid fa-envelope-open-text" style="color: #2b78ff;"></i>
                <span class="links_name">Artikel</span>
            </a>
        </li>
        <li>
            <div class="mt-5">
                <form id="logout-form" action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn"><i class="fa-solid fa-right-from-bracket"></i>Logout</button>
                </form>
            </div>
        </li>
        
    </ul>
</div>
{{-- <a href="{{ route('logout') }}" class="logout-link">Logout</a> --}}
