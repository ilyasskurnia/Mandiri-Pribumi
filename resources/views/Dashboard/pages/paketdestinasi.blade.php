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
<section class="paketdestinasi-section">
    <div class="body-content d-flex flex-column">
        <main class="d-flex flex-column gap-3 grow">
            <section class="d-flex gap-2 items-center justify-content-between">
                <h4>
                    Paket Destinasi <br> <a style="font-size: 18px">Anda memiliki total {{ $data['total_item'] }} paket
                        destinasi.</a>
                </h4>
                <div class="d-flex align-items-center ">
                    <div class="search ">
                        <input style="border-radius: 5px;" type="text" class="form-control" placeholder="Search for...">
                    </div>
                    <a href="{{ url('/dashboard/tambahpaket')}}" type="button"
                        class="btn btn-primary rounded-lg ml-auto">
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
                                        <th class="text-center">Thumbnail</th>
                                        <th class="text-center">Destinasi</th>
                                        <th class="text-center">Peta Wisata</th>
                                        <th class="text-center">Rute</th>
                                        <th class="text-center">Brosur</th>
                                        <th class="text-center">Total Waktu</th>
                                        <th class="text-center">Biaya</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['get_data'] as $destinasi)
                                    <tr>
                                        <td class="text-center">{{ $nomor++ }}</td>
                                        <td class="text-center"><img style="max-height: 100px"
                                                src="{{ asset('storage/' . $destinasi->thumbnail) }}" alt=""></td>
                                        <td class="text-center">{{ $destinasi->destinasi }}</td>
                                        <td class="text-center"><img style="max-height: 100px"
                                                src="{{ asset('storage/' . $destinasi->peta_wisata) }}" alt=""></td>
                                        <td class="text-center">{{ $destinasi->rute }}</td>
                                        <td class="text-center"><a style="text-decoration:none;"
                                                href="{{ asset('storage/' . $destinasi->brosure) }}"
                                                target="_blank">Lihat Brosure</a></td>
                                        <td class="text-center">{{ $destinasi->total_waktu }}</td>
                                        <td class="text-center">{{ $destinasi->biaya }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="/dashboard/{{ $destinasi->id }}/paketdestinasi"
                                                    class="btn btn-xs bg-primary me-1 text-white">Edit</a>
                                                <form action="/dashboard/paketdestinasi/{{ $destinasi->id }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" name="submit" value="delete"
                                                        class="btn btn-xs btn-danger me-1">
                                                </form>
                                                <a href="/dashboard/{{ $destinasi->id }}/detail_destinasi"
                                                    class="btn btn-xs btn-warning">Detail</a>
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
