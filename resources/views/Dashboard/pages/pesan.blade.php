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
<section class="pesan-section">
    <div class="body-content d-flex flex-column">
        <main class="d-flex flex-column gap-3 grow">
            <section class="d-flex gap-2 items-center justify-content-between">
                <h4>
                    Pesan Masuk <br> <a style="font-size: 18px">Anda memiliki 3 Pesan Masuk.</a >
                </h4>
                <div class="d-flex align-items-center ">
                    <div class="search ">
                        <input style="border-radius: 5px;" type="text" class="form-control" placeholder="Search for...">
                    </div>
                    <a href="#" type="button" class="btn btn-primary rounded-lg ml-auto">
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
                                        <th class="text-center">Paket</th>
                                        <th class="text-center">Waktu</th>
                                        <th class="text-center">Biaya</th>
                                        <th class="text-center">Rute</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center"><img style="max-height: 100px" src="{{URL::asset('/images/destinasi1.png')}}" alt=""></td>
                                        <td class="text-center">Yogyakarta</td>
                                        <td class="text-center">2 hari 1 Malam</td>
                                        <td class="text-center">330k</td>
                                        <td class="text-center">Candi Borobudur-Candi Prambanan-Keraton Yogyakarta-Gua Pindul</td>
                                        <td>
                                            <div class="d-flex">
                                                <button
                                                    type="button"
                                                    class="btn btn-xs bg-primary me-1 text-white"
                                                >
                                                    Edit
                                                </button>
                                                <button
                                                    type="button"
                                                    class="btn btn-xs btn-danger me-1"
                                                >
                                                    Delete
                                                </button>
                                                <button
                                                type="button"
                                                class="btn btn-xs btn-warning"
                                            >
                                                Preview
                                            </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center"><img style="max-height: 100px" src="{{URL::asset('/images/destinasi2.png')}}" alt=""></td>
                                        <td class="text-center">Bali</td>
                                        <td class="text-center">4 hari 3 Malam</td>
                                        <td class="text-center">1.250k</td>
                                        <td class="text-center">Monumen Bajra Sandhi - GWK Cultural Park - Pura Uluwatu dll.</td>
                                        <td>
                                            <div class="d-flex">
                                                <button
                                                    type="button"
                                                    class="btn btn-xs bg-primary me-1  text-white"
                                                >
                                                    Edit
                                                </button>
                                                <button
                                                    type="button"
                                                    class="btn btn-xs btn-danger me-1"
                                                >
                                                    Delete
                                                </button>
                                                <button
                                                type="button"
                                                class="btn btn-xs btn-warning"
                                            >
                                                Preview
                                            </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center"><img style="max-height: 100px" src="{{URL::asset('/images/destinasi3.png')}}" alt=""></td>
                                        <td class="text-center">karimun Jawa</td>
                                        <td class="text-center">3 hari 2 Malam</td>
                                        <td class="text-center">1.500k</td>
                                        <td class="text-center">Pantai Tanjung Gelam-Sonrkeling: Karang Bintang Maer</td>
                                        <td>
                                            <div class="d-flex">
                                                <button
                                                    type="button"
                                                    class="btn btn-xs bg-primary me-1  text-white"
                                                >
                                                    Edit
                                                </button>
                                                <button
                                                    type="button"
                                                    class="btn btn-xs btn-danger me-1"
                                                >
                                                    Delete
                                                </button>
                                                <button
                                                type="button"
                                                class="btn btn-xs btn-warning"
                                            >
                                                Preview
                                            </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="px-5 mt-4">
                            pagination page
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