@extends('dashboard.layouts.templates')

@section('content')
<style>
    .home-section {
        position: relative;
        background: #f5f5f5;
        min-height: 100vh;
        width: calc(100% - 240px);
        left: 240px;
        transition: all 0.5s ease;
    }
    .page-content {
        position: relative;
        padding-top: 104px;
    }
    .page-content .outer-boxes {
        align-items: center;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 0 20px;
        margin-bottom: 26px;
    }
    .outer-boxes .box {
        display: flex;
        align-items: center;
        justify-content: center;
        width: calc(100% / 4 - 15px);
        background: #E0E7F4;
        padding: 15px 14px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }
    .outer-boxes .box-topic {
        font-size: 20px;
        font-weight: 500;
    }
    .page-content .box .number {
        display: inline-block;
        font-size: 30px;
        margin-top: -6px;
        font-weight: 500;
    }
    .icon-box {
        padding-top: 20px;
        padding-left: 20px;
        /* color: blue; */
    }
    .container-box {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        padding: 0 20px;
    }
    .left-box {
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        border-radius: 12px;
    }
    .left-box-title {
        border-radius: 12px 12px 0 0;
        background-color: #E0E7F4;
        padding: 15px;
        width: 100%;
        text-align: center;
        display: flex;
        justify-content: space-between;
    }
    .left-box-content {
        align-items: center;
        justify-content: center;
        padding: 15px 0;
        background:white;
        margin: 0;
        border-radius: 0 0 12px 12px;
        padding-left: 15px;
    }
    /* content box kanan */
    .right-box {
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        border-radius: 12px;
        background: #fff;
    }
    .right-box-title {
        border-radius: 12px 12px 0 0;
        background-color: #E0E7F4;
        padding: 15px;
        width: 100%;
        text-align: center;
        display: flex;
        justify-content: space-between;
    }
    .right-box-content {
        align-items: center;
        justify-content: center;
        padding: 15px 0;
        background:white;
        margin: 0;
        border-radius: 0 0 12px 12px;
        padding-left: 15px;
    }
    .copyright {
        margin-top: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 4rem;
        color: rgb(0, 0, 0);
        background: white;
        border-top: 1px solid #c0bfbf65;
    }
</style>
<section class="home-section">
    <div class="page-content">
        <div class="outer-boxes">
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Paket Destinasi</div>
                    <div class="number">4</div>
                </div>
                <div class="icon-box">
                    <i class="fa-solid fa-truck-fast fa-xl"></i>
                </div>
            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Pesan Masuk</div>
                    <div class="number">7</div>
                </div>
                <div class="icon-box">
                    <i class="fa-solid fa-envelope fa-xl"></i>
                </div>
            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Artikel</div>
                    <div class="number">5</div>
                </div>
                <div class="icon-box">
                    <i class="fa-solid fa-newspaper fa-xl"></i>
                </div>
            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Galeri</div>
                    <div class="number">10</div>
                </div>
                <div class="icon-box">
                    <i class="fa-regular fa-images fa-xl"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container-box">
        <div class="left-box">
            <div class="left-box-title">
                <h4>Paket Destinasi</h4>
            </div>
            <div class="left-box-content">
                <div class="container">
                    <div class="row mt-4 justify-content-between">
                        <div class="col-1">
                            <img width="200" height="150" src="{{URL::asset('/images/destinasi2.png') }}" alt="">
                        </div>
                        <div class="col-7 mt-4">
                            <h5>Bali</h5>
                            <p style="color: #626262">4 Hari 3 Malam</p>
                            <h6>Start from 1250k/pax</h6>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-4 justify-content-between">
                        <div class="col-1">
                            <img width="200" height="150" src="{{URL::asset('/images/destinasi1.png') }}" alt="">
                        </div>
                        <div class="col-7 mt-4">
                            <h5>Yogyakarta</h5>
                            <p style="color: #626262">2 Hari 1 Malam</p>
                            <h6>Start from 330k/pax</h6>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-4 justify-content-between">
                        <div class="col-1">
                            <img width="200" height="150" src="{{URL::asset('/images/destinasi3.png') }}" alt="">
                        </div>
                        <div class="col-7 mt-4">
                            <h5>Karimun Jawa</h5>
                            <p style="color: #626262">3 Hari 2 Malam</p>
                            <h6>Start from 1500k/pax</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-box">
            <div class="right-box-title">
                <h4>Pesan Masuk</h4>
            </div>
            <div class="right-box-content">
                <div class="container">
                    <div class="row mt-4 justify-content-between">
                        <div class="col-sm-3">
                            <h6>Ilyas Kurnia Ramadhan</h6>
                        </div>
                        <div class="col-sm-7">
                            <p style="color: #626262">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-2">
                            <h6>19.30</h6>
                        </div>
                    </div>
                </div><hr>
                <div class="container">
                    <div class="row mt-4 justify-content-between">
                        <div class="col-sm-3">
                            <h6>Adnin Ramadhani</h6>
                        </div>
                        <div class="col-sm-7">
                            <p style="color: #626262">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-2">
                            <h6>19.30</h6>
                        </div>
                    </div>
                </div><hr>
                <div class="container">
                    <div class="row mt-4 justify-content-between">
                        <div class="col-sm-3">
                            <h6>Naufal Nabil</h6>
                        </div>
                        <div class="col-sm-7">
                            <p style="color: #626262">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-2">
                            <h6>19.30</h6>
                        </div>
                    </div>
                </div><hr>
                <div class="container">
                    <div class="row mt-4 justify-content-between">
                        <div class="col-sm-3">
                            <h6>Hastyantoko Dwiki</h6>
                        </div>
                        <div class="col-sm-7">
                            <p style="color: #626262">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-2">
                            <h6>19.30</h6>
                        </div>
                    </div>
                </div><hr>
            </div>
        </div>
    </div>
    <div class="copyright">
        <small>© 2023 Mandiri Pribumi Tour & Travel</small>
    </div>
</section>

@endsection
