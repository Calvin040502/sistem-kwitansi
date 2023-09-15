@include('templates.header')
<head>
    <meta charset="UTF-8">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <title>Tambah Kwitansi</title>
</head>
<body>
    <div class="content-wrapper">
        <section class="wrapper">
            <div class="container pt-8 pt-md-14">
                <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
                    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
                        <div class="shape bg-dot orange rellax w-17 h-19" data-rellax-speed="1"
                            style="top: -1.7rem; left: -1.5rem;"></div>
                        <div class="shape rounded bg-soft-orange rellax d-md-block" data-rellax-speed="0"
                            style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
                    </div>
                    <!-- welcome text -->
                    <div class="title-form mt-3" id="title-form" style="text-align: center">
                        <h1>TAMBAH KWITANSI</h1>
                    </div>

                    <form action="{{ route('kwitansi.store') }}" method="post" style="margin-bottom: 1%">
                        @csrf
                        <div style="text-align: right">
                            <div class="nomor">
                                <label for="nomor_kwitansi">No :</label>
                                <input class="form-first" type="text" id="nomor_kwitansi" name="nomor_kwitansi"
                                    placeholder="Nomor Kwitansi...">
                            </div>
                        </div>
                        <div class="row mb-5 mt-5">
                            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label for="no_hp" class="col-sm-2 col-form-label"> No HP </label>
                            <div class="col-sm-10">
                                <input id="no_hp" class="form-control" type="number" id="no_hp" name="no_hp">
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label for="uang_sebanyak" class="col-sm-2 col-form-label">Uang Sebanyak</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="uang_sebanyak" name="uang_sebanyak">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <label for="pembayaran" class="col-sm-2 col-form-label">Pembayaran</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="pembayaran" name="pembayaran">
                            </div>
                        </div>
                        <fieldset style="margin-bottom: 1%">
                            <div>
                                <div style="margin-bottom: 1%">
                                    <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="lokasi" name="lokasi">
                                    </div>
                                </div>

                                <div style="margin-bottom: 1%">
                                    <label for="no_kavling" class="col-sm-2 col-form-label">No. Kavling</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="no_kavling" name="no_kavling">
                                    </div>
                                </div>

                                <div style="margin-bottom: 1%">
                                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="type" name="type">
                                    </div>
                                </div>

                                <div style="margin-bottom: 1%">
                                    <label for="luas" class="col-sm-2 col-form-label">Luas</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="luas" name="luas">
                                    </div>
                                </div>

                                <div style="margin-bottom: 1%">
                                    <label for="discount" class="col-sm-2 col-form-label">Discount</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="discount" name="discount">
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="mb-5">
                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="jumlah" name="jumlah">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Tambah</button>

                    </form>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
                    </script>
</body>

@extends('templates.footer')