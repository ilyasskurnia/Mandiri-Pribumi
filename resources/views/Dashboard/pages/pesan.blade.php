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
                                        <th class="text-center">Nama User</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Sosial Media</th>
                                        <th class="text-center">Nomor Telepon</th>
                                        <th class="text-center">Pesan</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Ilyas Kurnia Ramadhan</td>
                                        <td class="text-center">ilyas@gmail.com</td>
                                        <td class="text-center">Instagram : @ilyasskurnia</td>
                                        <td class="text-center">08132666122</td>
                                        <td class="text-center">Pelayan dari mandiri pribumi sangat ramah dan menyenangkan</td>
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
                                        <td class="text-center">Adnin Ramadhani</td>
                                        <td class="text-center">adnin@gmail.com</td>
                                        <td class="text-center">Instagram : @adninramadhani</td>
                                        <td class="text-center">081356789433</td>
                                        <td class="text-center">Pelayan dari mandiri pribumi sangat ramah dan menyenangkan</td>
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
                                        <td class="text-center">Naufal Nabil</td>
                                        <td class="text-center">Naufal@gmail.com</td>
                                        <td class="text-center">Instagram : @bilss</td>
                                        <td class="text-center">08132687643</td>
                                        <td class="text-center">Pelayan dari mandiri pribumi sangat ramah dan menyenangkan</td>
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
                                        <td class="text-center">4</td>
                                        <td class="text-center">Hastyantoko Dwiki</td>
                                        <td class="text-center">Hastyantoko@gmail.com</td>
                                        <td class="text-center">Instagram : @dwikikhd</td>
                                        <td class="text-center">08132687213</td>
                                        <td class="text-center">Pelayan dari mandiri pribumi sangat ramah dan menyenangkan</td>
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