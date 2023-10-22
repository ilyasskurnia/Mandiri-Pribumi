@extends('dashboard.layouts.templates')

@section('content')
<style>
    .galeri-section {
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
<section class="galeri-section">
    <div class="page-content">
        <div class="outer-boxes">
            <h4>Ini adalah halaman dashboard galeri</h4>
        </div>
    </div>
    <div class="copyright">
        <small>© 2023 Mandiri Pribumi Tour & Travel</small>
    </div>
</section>
@endsection