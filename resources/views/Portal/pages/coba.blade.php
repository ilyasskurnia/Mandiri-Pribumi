@extends('portal.layouts.templates')

@section('content')
<style>
    body {
        margin: 0;
        /* Hapus margin dari body */
        padding: 0;
        /* Hapus padding dari body */
    }
    .carousel-inner {
  padding: 1em;
}
.card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
}
.carousel-control-prev,
.carousel-control-next {
  background-color: #e1e1e1;
  width: 6vh;
  height: 6vh;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}
@media (min-width: 768px) {
  .carousel-item {
    margin-right: 0;
    flex: 0 0 33.333333%;
    display: block;
  }
  .carousel-inner {
    display: flex;
  }
}
.card .img-wrapper {
    max-width: 100%;
    height: 13em;
    display: flex;
    justify-content: center;
    align-items: center;
}
.card img {
    max-height: 100%;
}
@media (max-width: 600px) {
  .card .img-wrapper {
    height: 17em;
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

<div id="carouselExampleControls" class="carousel">
    <div class="carousel-inner">
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="{{URL::asset('/images/card1.jpg')}}" alt="Bali" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="{{URL::asset('/images/card2.jpg')}}" alt="Yogyakarta" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="{{URL::asset('/images/card3.jpg')}}" alt="KarimunJawa" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="{{URL::asset('/images/card4.jpg')}}" alt="BandaNeira" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 4</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="{{URL::asset('/images/card5.jpg')}}" alt="PantaiSeribu" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 5</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="{{URL::asset('/images/card6.jpg')}}" alt="Malang" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 6</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var multipleCardCarousel = document.querySelector("#carouselExampleControls");

        // Fungsi untuk menangani ukuran layar yang lebih besar
        function initCarousel() {
            var carousel = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });

            var carouselInner = $("#carouselExampleControls .carousel-inner");
            var cardWidth = $(".carousel-item").width();
            var scrollPosition = 0;

            $("#carouselExampleControls .carousel-control-next").on("click", function () {
                if (scrollPosition < carouselInner[0].scrollWidth - cardWidth * 4) {
                    scrollPosition += cardWidth;
                    carouselInner.animate({ scrollLeft: scrollPosition }, 600);
                }
            });

            $("#carouselExampleControls .carousel-control-prev").on("click", function () {
                if (scrollPosition > 0) {
                    scrollPosition -= cardWidth;
                    carouselInner.animate({ scrollLeft: scrollPosition }, 600);
                }
            });
        }

        // if (window.matchMedia("(min-width: 768px)").matches) {
        //     initCarousel(); // Inisialisasi Carousel jika ukuran layar lebih besar
        // } else {
        //     $(multipleCardCarousel).addClass("slide");
        // }

        // // Fungsi untuk menangani perubahan ukuran layar
        // window.addEventListener("resize", function () {
        //     if (window.matchMedia("(min-width: 768px)").matches) {
        //         initCarousel(); // Inisialisasi ulang Carousel jika ukuran layar lebih besar
        //         $(multipleCardCarousel).removeClass("slide"); // Hapus kelas 'slide' jika ukuran layar lebih besar
        //     } else {
        //         $(multipleCardCarousel).addClass("slide"); // Tambahkan kelas 'slide' jika ukuran layar lebih kecil
        //     }
        // });
    });
</script>


@endsection