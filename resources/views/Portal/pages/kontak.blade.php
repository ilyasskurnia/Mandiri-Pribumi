@extends('portal.layouts.templates')

@section('content')
<style>
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
  border-left:none;
  border-right:none;
  border-top:none;
 }
 textarea.untukInput1 {
  border-bottom: 3px solid #ccc;
  border-left:none;
  border-right:none;
  border-top:none;
  resize:none;
  width:480px;
  height:100px;
 }
 input.btn btn-primary {
    margin-right: -10px;
    background-color: #6e76e3
    border-radius :
 }
.peta {
    position: relative;
    align-self: right;
    padding-left: 120px;
}
</style>

<div class="container">
    <div class="row justify-content-between">
        <div class="col-5 mt-4">
            <h1 class="mt-2">Mandiri Pribumi</h1>
            <h3 class="mt-2">Tour & Travel</h3>
            <p>
                Kami sangat menghargai pesan dan kesan anda terhadap pelayanan kami.
            </p>
            <a href="/unduh-pdf" class="btn btn-primary">Hubungi Kami</a>
        </div>
        <div class="col-2">
            <img style="max-height: 200px" src="{{URL::asset('/images/Logo-tentang.png') }}" alt="Logo">
        </div>
    </div>
</div><br><br><br>

<div class="container mt-5">
    <div class="row">
      <div class="col-4 x-1">
        <h4 class="mt-2">Kirim Pesan</h4>
            <p>
                Ajukan pertanyaan, pesan, ataupun kesan terhadap pelayanan kami.
            </p>
        <form method="POST" action="/kirimPesan">
            @csrf
            <div class="row x-5 justify-content-between">
                <div class="col-1">
                    <label for="nama">Nama:</label><br>
                    <input class="untukInput1" type="text" id="nama" name="nama">
                </div>
                <div class="col-4" style="margin-left: 200px">
                    <label for="email">Alamat Email:</label><br>
                    <input class="untukInput1" type="email" id="email" name="email">
                </div>
            </div>
            <div class="row mt-3 justify-content-between">
                <div class="col-4">
                    <label for="sosmed">Social Media:</label><br>
                    <input class="untukInput1" type="text" id="sosmed" name="sosmed">
                </div>

                <div class="col-4" style="margin-left: 0px">
                    <label for="telp">Nomor Telepon:</label><br>
                    <input class="untukInput1" type="tel" id="telp" name="telp">
                </div>
            </div>

                <div class="col-1 mt-3" >
                    <label for="pesan">Pesan:</label><br>
                    <textarea class="untukInput1" id="pesan" name="pesan"></textarea><br>
                </div>
                <div class="col-1 mt-2" style="float : right">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
        </form>
      </div>

      <div class="col-4 x-1">
        <div class="vl"></div>
      </div>

      <div class="col-4 x-1">
        <h4>Call Us</h4>
        <p>Jika anda mempunyai keluhan atau permintaan dapat menelpon kita melalui nomor berikut.</p>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-1">
                    <img style="max-height: 25px" src="{{URL::asset('/images/call.png') }}" alt="">
                </div>
                <div class="col-8">
                    <p style="color: #FFBE2C">+62 1234567890</p>
                </div>
            </div>
        </div><br>

        <h4>Visit Us</h4>
        <p>Anda dapat mengunjungi ke kantor kami pada alamat berikut.</p>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-1">
                    <img style="max-height: 25px" src="{{URL::asset('/images/map.png') }}" alt="">
                </div>
                <div class="col-10">
                    <p style="color: #FFBE2C">Jl. Jend. Sudirman, Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div><br><br><br>

<div class="container mt-5 ps-5">
        <div class="peta">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126715.79661808687!2d110.33466309480079!3d-7.024722607663931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sSemarang%2C%20Semarang%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1697567441434!5m2!1sen!2sid" width="1000" height="350" style="border:10; align:center" allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</div><br><br><br><br><br><br>

<div class="container">
    <div class="row mt-5 justify-content-between">
        <div class="col-1">
            <p>FAQ</p>
            <h2>Frequently asked question.</h2>
        </div>
        <div class="col-4">
            <br><br>
            <h4>Apakah butuh bantuan atau pertanyaan?</h4>
            <p>Kami sudah mempersiapkan beberapa jawaban umum yang ingin anda sampaikan.</p><br>
            <h6>Apakah include tiket pesawat?</h6>
            <h6>Apakah include tiket kereta?</h6>
            <h6>Apakah menggunakan fasilitas hotel bintang 4?</h6>
        </div>
    </div>
</div><br><br><br><br><br>

@endsection
