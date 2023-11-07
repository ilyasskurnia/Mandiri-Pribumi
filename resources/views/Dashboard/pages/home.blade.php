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
                    <div class="number">{{ $card['total_destinasi'] }}</div>
                </div>
                <div class="icon-box">
                    <i class="fa-solid fa-truck-fast fa-xl"></i>
                </div>
            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Pesan Masuk</div>
                    <div class="number">{{ $card['total_pesan'] }}</div>
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
            @foreach ($card['paket_destinasi'] as $destinasi)
            <div class="left-box-content">
                <div class="container">
                    <div class="row mt-4 justify-content-between">
                        <div class="col-1">
                            <img width="200" height="150" src="{{URL::asset('/images/destinasi2.png') }}" alt="">
                        </div>
                        <div class="col-7 mt-4">
                            <h5>{{ $destinasi->destinasi }}</h5>
                            <p style="color: #626262">{{ $destinasi->total_waktu }}</p>
                            <h6>Start from {{ $destinasi->biaya }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="right-box">
            <div class="right-box-title">
                <h4>Pesan Masuk</h4>
            </div>
            <div class="right-box-content">
                @foreach ($card['pesan_masuk'] as $pesan)
                <div class="container">
                    <div class="row mt-4 justify-content-between">
                        <div class="col-sm-3">
                            <h6>{{ $pesan->nama }}</h6>
                        </div>
                        <div class="col-sm-6">
                            <p style="color: #626262">{{ $pesan->pesan }}</p>
                        </div>
                        <div class="col-sm-3">
                            <h6>{{ $pesan->created_at }}</h6>
                        </div>
                    </div>
                </div><hr>
                @endforeach
            </div>
        </div>
    </div>
    <div class="copyright">
        <small>© 2023 Mandiri Pribumi Tour & Travel</small>
    </div>
</section>

@endsection
