@extends('portal.layouts.templates')

@section('content')

<style>

.container {
    padding-left: 400px;

}
/* Section 1: Banner */
.banner-section {
        font-family: 'Sora', sans-serif;
        background-image: url('{{ asset('images/bali1.jpg') }}');        
        background-position: center;
        background-size: cover;
        color: #000;
        padding: 150px ;
    }

    .banner-section h1 {

color: #fff;
}

.banner-section h1.l {

color: #fff;
}

</style>

<!-- Section 1: Banner -->
<section class="banner-section">
    <div class="row text-right my-5" ">
        <h1><b>#Kesana</b></h1>
        <h1><span style="color: #ffffff;"><b>Kemari</b></span></h1>
        <h1><b>Bersama Mandiri Pribumi</b></h1>
    </div>
</section>

<div class="container ">
    <div class="row justify-content-between">
        <div class="col-1 mt-4">
            <div class="card" style="width: 18rem;">
                <img src="{{URL::asset('/images/gambar1.jpg') }}" class="card-img-top" alt="Image Description">
                    <div class="card-body">
                        <h5 class="card-title">Kenalan dengan Anak Singkong : Kota Yogya</h5>
                        <p class="card-text">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
        </div>

        <div class="col-8 mt-4">
            <div class="card" style="width: 18rem;">
                <img src="{{URL::asset('/images/gambar1.jpg') }}" class="card-img-top" alt="Image Description">
                    <div class="card-body">
                        <h5 class="card-title">Kenalan dengan Anak Singkong : Kota Yogya</h5>
                        <p class="card-text">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
        </div>
    </div>
        <div class="row justify-content-between">

        <div class="col-1 mt-4">
            <div class="card" style="width: 18rem;">
                <img src="{{URL::asset('/images/gambar1.jpg') }}" class="card-img-top" alt="Image Description">
                    <div class="card-body">
                        <h5 class="card-title">Kenalan dengan Anak Singkong : Kota Yogya</h5>
                        <p class="card-text">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
        </div>

        <div class="col-8 mt-4">
            <div class="card" style="width: 18rem;">
                <img src="{{URL::asset('/images/gambar1.jpg') }}" class="card-img-top" alt="Image Description">
                    <div class="card-body">
                        <h5 class="card-title">Kenalan dengan Anak Singkong : Kota Yogya</h5>
                        <p class="card-text">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
        </div>
    </div>
</div>



@endsection