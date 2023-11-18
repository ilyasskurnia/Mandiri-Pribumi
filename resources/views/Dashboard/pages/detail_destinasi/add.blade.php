@extends('dashboard.layouts.templates')

@section('content')
<style>
    .paketdestinasi-section {
        position: relative;
        background: #f5f5f5;
        min-height: 100vh;
        width: calc(100% - 240px);
        left: 240px;
        transition: all 0.5s ease;
    }

    .body-content {
        position: relative;
        padding-top: 104px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .search {
        margin-right: 10px;
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
<section class="paketdestinasi-section">
    <div class="body-content d-flex flex-column">
        <main class="d-flex flex-column gap-3 grow">
            <section class="d-flex dlex-column gap-2 mt-4">
                <div class="page-inner" style="width: 100%">
                    <div id="add-data-paket" class="card">
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
                        <div class="card-header pb-2">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Tambah Detail Destinasi</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/' . $destinasi->id . '/detail_destinasi/tambah_detail"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">destinasi_id <strong>(field ini jangan diubah)</strong><strong>&nbsp&nbsp(Jika Nilai field ini kosong harap kembali ke halaman destinasi dan klik preview lagi)</strong></label>
                                            <input name="destinasi_id" class="form-control" type="text"
                                            value="{{ $destinasi ? $destinasi->id : '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Hari Ke</label>
                                            <input name="days" class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Detail Rute</label>
                                            <input name="detail_rute" class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Deskripsi</label>
                                            <input name="deskripsi" class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Thumbnail</label>
                                            <input name="thumbnail" class="form-control" type="file">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="button" class="btn btn-sm bg-warning me-2 text-white"
                                            onclick="goBack()">
                                            Cancel
                                        </button>
                                        <button type="submit" class="btn btn-sm bg-primary mr-2 text-white">
                                            Save Data
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <div class="copyright">
        <small>© 2023 Mandiri Pribumi Tour & Travel</small>
    </div>
</section>
<script>
    function goBack() {
        window.history.back();
    }
</script>

@endsection
