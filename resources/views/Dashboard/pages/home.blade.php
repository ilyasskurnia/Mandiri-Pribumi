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
        background: #fff;
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
        background-color: #fff;
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
    }
    .right-box-title {
        border-radius: 12px 12px 0 0;
        background-color: #fff;
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
                <p>Paket Destinasi</p>
            </div>
            <div class="left-box-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque aperiam ab at. Placeat fugit animi aspernatur alias iusto recusandae, quod dignissimos beatae voluptates eligendi ea a, ullam asperiores omnis illum.
                </p>
            </div>
        </div>
        <div class="right-box">
            <div class="right-box-title">
                <p>Artikel</p>
            </div>
            <div class="right-box-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque aperiam ab at. Placeat fugit animi aspernatur alias iusto recusandae, quod dignissimos beatae voluptates eligendi ea a, ullam asperiores omnis illum.
                </p>
            </div>
        </div>
    </div>
    <div class="copyright">
        <small>© 2023 Mandiri Pribumi Tour & Travel</small>
    </div>
</section>

@endsection