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

    .vl {
        border-left: 1px solid #000000;
        height: 55%;
        position: absolute;
        left: 50%;
        margin-left: -1px;
        top: 100;
    }

    input.untukInput1 {
        border-bottom: 3px solid #ccc;
        border-left: none;
        border-right: none;
        border-top: none;
    }

    textarea.untukInput1 {
        border-bottom: 3px solid #ccc;
        border-left: none;
        border-right: none;
        border-top: none;
        resize: none;
        width: 480px;
        height: 100px;
    }

    input.btn btn-primary {
        margin-right: -10px;
        background-color: #6e76e3;
    }

    .peta {
        position: relative;
        align-self: right;
        padding-left: 120px;
    }

    .side-detail {
        margin-left: 50px;
    }

    .logo-img {}

    .banner {
        padding-top: 150px;
    }

    @media (max-width: 768px) {
        .container {
            padding: 10px;
        }

        .col-5 {
            text-align: center;
        }

        .col-2 img {
            max-width: 100px;
        }

        .x-1 {
            margin-top: 20px;
        }

        .vl {
            display: none;
            /* Sembunyikan garis vertikal di perangkat seluler */
        }

        .peta iframe {
            margin-left: -100px;
            width: 250px;
            height: 350px;
            border: none;
        }

        .side-detail {
            margin-left: 0px;
        }

        .logo-img {
            display: none;
        }
    }

</style>

<div class="container banner">
    <div class="row justify-content-between">
        <div class="col-lg-5 col-md-12 mt-4">
            <h1 class="mt-2">Mandiri Pribumi</h1>
            <h3 class="mt-2">Tour & Travel</h3>
            <p>
                Kami sangat menghargai pesan dan kesan Anda terhadap pelayanan kami.
            </p>
        </div>
        <div class="col-lg-2 col-md-12">
            <img class="logo-img" style="max-height: 200px" src="{{ URL::asset('/images/Logo-tentang.png') }}"
                alt="Logo">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-12 mt-4">
            <h4>Kirim Pesan</h4>
            <p>
                Ajukan pertanyaan, pesan, atau kesan terhadap pelayanan kami.
            </p>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/portal/kontak" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="sosmed" class="form-label">Social Media:</label>
                    <input type="text" class="form-control" id="social_media" name="social_media" required>
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Nomor Telepon:</label>
                    <input type="number" class="form-control" id="telepon" name="telepon" required>
                </div>
                <div class="mb-3">
                    <label for="destinasi" class="form-label">Paket Destinasi</label>
                    <select class="form-select" id="destinasi" name="destinasi" required>
                        <option value="">pilih destinasi</option>
                        @foreach($data_destinasi as $nama_destinasi)
                            <option value="{{ $nama_destinasi}}">{{ $nama_destinasi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Pilih Tanggal Keberangkatan</label>
                    <input type="date" class="form-select" name="tanggal" id="tanggal">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan:</label>
                    <textarea class="form-control" id="pesan" name="pesan" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-lg-5 col-md-12 mt-5 side-detail">
            <h4>Call Us</h4>
            <p>Jika Anda memiliki keluhan atau permintaan, Anda dapat menghubungi kami.</p>
            <div class="mb-3 d-flex">
                <img style="max-height: 25px" src="{{ URL::asset('/images/call.png') }}" alt="">
                <p style="color: #FFBE2C; padding-left:10px;">+62 1234567890</p>
            </div>

            <h4>Visit Us</h4>
            <p>Anda dapat mengunjungi kantor kami pada alamat berikut:</p>
            <div class="mb-3 d-flex">
                <img style="max-height: 25px" src="{{ URL::asset('/images/map.png') }}" alt="">
                <p style="color: #FFBE2C; padding-left:10px;">Jl. Jend. Sudirman, Jakarta, Indonesia</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 ps-5 mt-4">
    <div class="peta">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126715.79661808687!2d110.33466309480079!3d-7.024722607663931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sSemarang%2C%20Semarang%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1697567441434!5m2!1sen!2sid"
            width="1000" height="350" style="border:10; align:center" allowfullscreen="" loading="fast"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="container">
    <div class="col mt-5 justify-content-between">
        <div class="col-1">
            <h5><b>FAQ</b></h5>
            <h1><b>Frequently asked question.</b></h1>
        </div>
        <div class="col">
            <br><br>
            <h4>Apakah butuh bantuan atau pertanyaan?</h4>
            <p>Kami sudah mempersiapkan beberapa jawaban umum yang ingin anda sampaikan.</p>
            <div class="accordion" id="accordionExample">
                @foreach ($get_faq as $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{ $faq->pertanyaan}}
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {{ $faq->jawaban }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

@endsection
