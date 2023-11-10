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
                                <h4 class="card-title">Edit Data Pesan</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="\dashboard\pesan\{{ $data->id }}" method="post" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Nama</label>
                                            <input name="nama" class="form-control" type="text"
                                                value="{{ $data->nama }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Email</label>
                                            <input name="email" class="form-control" type="text"
                                                value="{{ $data->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Social Media</label>
                                            <input name="social_media" class="form-control" type="text"
                                                value="{{ $data->social_media }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Telepon</label>
                                            <input name="telepon" class="form-control" type="text"
                                                value="{{ $data->telepon }}">
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
                                            <input type="date" class="form-select" name="tanggal" id="tanggal"
                                                value="{{ $data->tanggal }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pesan" class="form-label">Pesan:</label>
                                            <textarea class="form-control" id="pesan" name="pesan"
                                                rows="4">{{ $data->pesan }}</textarea>
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
