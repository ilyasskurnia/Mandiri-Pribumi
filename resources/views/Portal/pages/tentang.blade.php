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

    h1,
    h3 {
        font-size: 2rem;
        /* You can adjust the size as needed */
    }

    /* Increase the font size for p elements */
    p {
        font-size: 1.2rem;
        /* You can adjust the size as needed */
    }

    /* Increase the font size for h5 */
    h5 {
        font-size: 1.5rem;
        /* You can adjust the size as needed */
    }

    /* Increase the font size for h6 */
    h6 {
        font-size: 1.2rem;
        /* You can adjust the size as needed */
    }

    .image-overlay {
        position: relative;
        z-index: -1;
        margin-left: -60px;
        max-width: 700px;
        height: 340px;
    }

    .img-icon {
        max-height: 50px;
        max-width: 100%;
        /* Gambar tidak melebihi lebar parent */
        display: block;
        /* Menghapus spasi bawah gambar */
        margin: 0 auto;
        /* Pusatkan gambar dalam parent */
    }

    .image-overlay1 {
        height: 90%;
        width: 80%;
        padding-left: 0px;
    }

    .visi-misi {
        padding-right: 250px;
    }

    .banner {
        padding-top: 150px;
    }

    @media (max-width: 768px) {
        .image-overlay {
            margin-left: 0;
            max-width: 100%;
            height: auto;
        }

        .image-overlay1 {
            margin-left: 40px;
            max-width: 100%;
            height: auto;
        }

        .logo {
            margin-left: 60px;
            max-width: 100%;
            height: auto;
        }

        .col-md-6 {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        .col-md-4 {
            width: 100%;
            text-align: center;
        }

        .img-icon {
            max-height: 80px;
            /* Mengubah tinggi gambar agar menyesuaikan lebar parent */
            max-width: 25px;
            /* Gambar tidak melebihi lebar parent */
        }

        .visi-misi {
            padding: 0px;
        }
    }
</style>
<div class="container banner">
    <div class="row justify-content-between">
        <div class="col-md-6 mt-5">
            <h1 class="mt-2">Mandiri Pribumi</h1>
            <h3 class="mt-2">Tour & Travel</h3>
            <p style="text-align: justify">
                Mandiri Pribumi tour and travel adalah travel agent terpercaya di Indonesia yang telah berdiri sejak
                2004 dengan kantor yang berada di Kota Semarang dan Kota Bandung. Kami hadir untuk memberikan perjalanan
                terbaik untuk anda.
            </p>
            <a href="/unduh-pdf" class="btn btn-primary">Unduh Company Profile</a>
        </div>
        <div class="col-md-2 mt-4 logo">
            <img style="max-height: 200px" src="{{URL::asset('/images/Logo-tentang.png') }}" alt="Logo">
        </div>
    </div>
</div><br><br><br>
<div class="container mt-5">
    <div class="row">
        <h3><span style="color: red;">Sejarah</span> <span style="color: black;">Perusahaan</span></h3>
    </div>
    <div class="row justify-content-between">
        <div class="col-md-6 mt-3">
            <p style="text-align: justify">Didirikan pada tahun 2004 sebagai travel agent terpercaya di Kota Bandung,
                oleh Drs Edy Suroso. Mandiri
                Pribumi tour and travel telah melayani pelanggan dari lingkup sekolah hingga perusahaan. </p>
            <p style="text-align: justify">Karena tingginya permintaan jumlah pelanggan, pada tahun 2023, Mandiri
                Pribumi tour and travel membuka kantor cabang di Kota
                Semarang. </p>
            <p style="text-align: justify">Hingga saat ini, kami telah melayani 245 pelanggan dari berbagai kalangan,
                dan akan terus
                bertambah.</p>
        </div>
        <div class="col-md-2 mt-3">
            <img class="image-overlay1" src="{{URL::asset('/images/pendiri.png') }}" alt="">
        </div>
    </div>
</div>
<div class="container mt-5 visi-misi">
    <div class="row">
        <h3 style="color: red;">
            Visi
        </h3>
    </div>
    <div class="row mt-3">
        <p style="text-align: justify">Perusahaan tour dan travel yang terpercaya dengan mengedepankan kepuasan
            pelanggan melalui layanan yang
            berkualitas dan berdedikasi untuk memberikan manfaat dalam sektor pariwisata.</p>
    </div>
</div>
<div class="container mt-5 visi-misi">
    <div class="row">
        <h3>
            Misi
        </h3>
    </div>
    <div class="row mt-3">
        <p style="text-align: justify">Menjamin pelayanan perjalanan dan wisata yang aman serta nyaman kepada pelanggan
            Berkomitmen dengan standar
            yang tinggi dalam melayani pelanggan
            Melengkapi dengan pelayanan handal, harga yang kompetitif dan kejujuran</p>
    </div>
</div>
<div class="container mt-5">
    <div class="row mt-3">
        <h3><span style="color: black;">Apa Yang Kami</span> <span style="color: red;">Tawarkan ?</span></h3>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/your-video-id" frameborder="0"
                allowfullscreen>
            </iframe>
        </div>
        <div class="col-md-6">
            <img class="image-overlay" src="{{URL::asset('/images/tentang-tagline.png') }}" alt="">
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row mt-3">
        <h5><strong>Kami melayani paket <span style="color: red;">perjalanan wisata domestik</span> ke berbagai <br>
                destinasi terbaik di Indonesia untuk rombongan maupun pribadi.</strong>
        </h5>
    </div>
</div>
<div class="container">
    <div class="row mt-5 justify-content-end">
        <div class="col-1">
            <img class="img-icon" src="{{URL::asset('/images/icontentang.png') }}" alt="">
        </div>
        <div class="col-7">
            <h5><strong>#Jelajah <span style="color: red;">Nusantara</span> - Tagline ini merepresentasikan akar
                    dari nilai Mandiri Pribumi, dengan semangat memberikan
                    pengalaman menjelajahi lanskap Nusantara demi <span style="color: red;">membantu orang-orang merekam
                        kebahagiaan.</span></strong>
            </h5>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row mt-3">
        <h3><span style="color: red;">Mengapa Harus</span> <span style="color: black;">Kami ?</span></h3>
    </div>
    <div class="row mt-3 justify-content-start">
        <div class="col-1">
            <img class="img-icon" src="{{URL::asset('/images/icontentang.png') }}" alt="">
        </div>
        <div class="col-6">
            <h6>Kualitas Pelayanan</h6>
            <p>Konsistensi dan berdedikasi dalam memberikan <span style="color: red;">pelayanan sepenuh hati.</span></p>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="row mt-3 justify-content-start">
        <div class="col-1">
            <img class="img-icon" src="{{URL::asset('/images/icontentang.png') }}" alt="">
        </div>
        <div class="col-8">
            <h6>Terpercaya</h6>
            <p>Kami sebagai perusahaan yang <span style="color: red;">berpengalaman sejak tahun 2004,</span> telah
                melayani lebih dari 100 pelanggan sehingga dapat diandalkan dalam memenuhi kepuasan pelanggan</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3 justify-content-start">
        <div class="col-1">
            <img class="img-icon" src="{{URL::asset('/images/icontentang.png') }}" alt="">
        </div>
        <div class="col-8">
            <h6>Dukungan Lokal</h6>
            <p>Memberikan nuansa lokal yang berkesan bagi pelanggan dan bermanfaat bagi sektor pariwisata.</p>
        </div>
    </div>
</div>
@endsection
