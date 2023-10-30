@extends('portal.layouts.templates')

@section('content')

<style>
/* Responsivitas Logo di Kolom Kiri */
.logo-image {
    max-height: 200px; /* Atur tinggi maksimum gambar sesuai kebutuhan */
    width: auto; /* Biarkan lebar disesuaikan agar gambar tidak terdistorsi */
}
@media (max-width: 768px) {
    .col-1 img {
        max-height: 100%; /* Atur tinggi gambar */
    }
    .logo-image {
        max-height: 150px; /* Atur tinggi maksimum gambar untuk layar kecil */
        margin-left: -110px;
        margin-top: 10px;
    }

}

/* Responsivitas Isi Konten */
@media (max-width: 768px) {
    .col-8 {
        width: 100%; /* Lebar konten menjadi 100% */
    }
    .col-1 {
        width: 30%; /* Lebar kolom gambar menjadi 30% */
        text-align: center; /* Pusatkan gambar */

    }
    .btn-secondary {
        margin-top: 15px; /* Berikan jarak atas tombol */
    }
}

/* Margin atas tambahan */
.container {
    margin-top: 30px; /* Atur margin atas untuk setiap container */
}

/* Atur warna teks tombol */
.btn-secondary {
    color: #fff;
    background-color: #343a40; /* Ubah warna latar belakang tombol */
    border-color: #343a40; /* Ubah warna border tombol */
}

</style>

<div class="container">
    <div class="row justify-content-between">
        <div class="col-5 mt-4">
            <h1 class="mt-2">Mandiri Pribumi</h1>
            <h3 class="mt-2">Tour & Travel</h3>
            <p>
                Kami menyediakan tarif yang kompetitif dan terjangkau bagi Anda.
            </p>
            <a href="/unduh-pdf" class="btn btn-primary">Hubungi Kami</a>
        </div>
        <div class="col-2">
            <img class="logo-image" src="{{URL::asset('/images/Logo-tentang.png') }}" alt="Logo">
        </div>
    </div>
</div><br><br><br><br><br>

<div class="container">
    <div class="row mt-4 justify-content-between">
        <div class="col-1">
            <img style="max-height: auto" src="{{URL::asset('/images/destinasi1.png') }}" alt="">
        </div>
        <div class="col-8 mt-2">
            <h4>Yogyakarta</h4>
            <h6 style="color: #626262">2 Hari 1 Malam</h6>
            <h5 style="text-align: right">Start from 330k/pax</h5>
            <h5>Nuansa Alam di Kota Budaya</h5>
            <p>Paket wisata ini cocok bagi anda yang ingin menelusuri rekam sejarah kerajaan Mataram Kuno dan Kesultanan Ngayogakarta.</p>
            <br>
            <a href="#" class="btn btn-secondary">Selengkapnya</a>
        </div>
    </div>
</div><br><br>

<div class="container">
    <div class="row mt-4 justify-content-between">
        <div class="col-1">
            <img style="max-height: auto" src="{{URL::asset('/images/destinasi2.png') }}" alt="">
        </div>
        <div class="col-8 mt-2">
            <h4>Bali</h4>
            <h6 style="color: #626262">4 Hari 3 Malam</h6>
            <h5 style="text-align: right">Start from 1250k/pax</h5>
            <h5>Ikon Wisata Indonesia</h5>
            <p>Paket wisata ini cocok untuk anda yang ingin menikmati 3 pengalaman sekaligus.</p>
            <br>
            <a href="#" class="btn btn-secondary">Selengkapnya</a>
        </div>
    </div>
</div><br><br>

<div class="container">
    <div class="row mt-4 justify-content-between">
        <div class="col-1">
            <img style="max-height: auto" src="{{URL::asset('/images/destinasi3.png') }}" alt="">
        </div>
        <div class="col-8 mt-2">
            <h4>Karimun Jawa</h4>
            <h6 style="color: #626262">3 Hari 2 Malam</h6>
            <h5 style="text-align: right">Start from 1500k/pax</h5>
            <h5>Surga wisata bahari Pulau Jawa</h5>
            <p>Dalam paket ini anda akan diajak menjelajahi dan menikmati pesona pulau pulau dengan kekayaan biota laut.</p>
            <br>
            <a href="#" class="btn btn-secondary">Selengkapnya</a>
        </div>
    </div>
</div><br><br>

<div class="container">
    <div class="row mt-4 justify-content-between">
        <div class="col-1">
            <img style="max-height: auto" src="{{URL::asset('/images/destinasi4.png') }}" alt="">
        </div>
        <div class="col-8 mt-2">
            <h4>Malang - Batu Bromo</h4>
            <h6 style="color: #626262">2 Hari 1 Malam</h6>
            <h5 style="text-align: right">Start from 1100k/pax</h5>
            <h5>Golden Sunrise Terbaik Pulau Jawa</h5>
            <p>Paket wisata ini cocok bagi anda  yang ingin menikmati keindahan Gunung Bromo dan mencari sensasi petualangan</p>
            <br>
            <a href="#" class="btn btn-secondary">Selengkapnya</a>
        </div>
    </div>
</div><br><br>


@endsection
