@extends('dashboard.layouts.templates')

@section('content')
<style>
    .pesan-section {
        position: relative;
        background: #f5f5f5;
        min-height: 100vh;
        width: calc(100% - 240px);
        left: 240px;
        transition: all 0.5s ease;
    }

    .body-content {
        position: relative;
        padding-top: 125px;
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
@php
$nomor=1;
@endphp
<section class="pesan-section">
    <div class="body-content d-flex flex-column">
        <main class="d-flex flex-column gap-3 grow">
            <section class="d-flex gap-2 items-center justify-content-between">
                <h4>
                    Kategori Artikel<br> <a style="font-size: 18px">Anda memiliki {{ $data['total_item'] }}
                        Kategori</a>
                </h4>
                <div class="d-flex align-items-center ">
                    <a href="{{ url('/dashboard/artikel')}}"" type=" button"
                        class="btn btn-primary rounded-lg ml-auto mx-2">
                        <div class="mr-2"></div> Kembali ke artikel
                    </a>
                    <a href="{{ url('/dashboard/tambahkategori')}}"" type=" button"
                        class="btn btn-warning rounded-lg ml-auto">
                        <div class="fa fa-fw fa-plus mr-2"></div> Add Data
                    </a>
                </div>
            </section>
            <section class="d-flex dlex-column gap-2 mt-4">
                <div class="card mb-4" style="width: 100%">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0 table-hover">
                                <thead class="bg-grey1">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Kategori</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['get_data'] as $kategori)
                                    <tr>
                                        <td class="text-center">{{ $nomor++ }}</td>
                                        <td class="text-center">{{ $kategori->jenis_artikel }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="/dashboard/{{ $kategori->id }}/editkategori"
                                                    class="btn btn-xs bg-primary me-1 text-white">Edit</a>
                                                <form action="/dashboard/kategori/{{ $kategori->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" name="submit" value="delete"
                                                        class="btn btn-xs btn-danger me-1">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4 mt-4">
                            {{ $data['get_data']->links() }}
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

@endsection
