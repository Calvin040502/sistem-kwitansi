    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cetak Kwitansi {{ $kwitansi->nama_lengkap }}</title>
        <link rel="icon" href="{{ asset('img/logo-pt.png') }}">
        <script>
            function goBack() {
                history.back();
            }
        </script>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style type="text/css">
        @media print {
            @page {
                size: 21cm 33cm;
                margin: 11pt 0px 0px 0px;
            }

            .button.wrapper * {
                display: none;
                visibility: none;
            }

            .sheet.wrapper {
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

        }
    </style>

    <body>
        <div class="sheet wrapper"
            style="position: relative; display: flex; padding: 0; flex-direction: column; justify-content: center; align-items: center;">
            <div class="content wrapper mt-3"
                style="background-image: url('/img/konsumen.png'); width: 21.59cm; height: 10.8cm; padding: 0 24px 0px 24px; border-bottom: 1px solid; border-bottom-style: dashed">
                @include('templates.headerCetak')
                <div class="content">
                    <div class="output kwitansi" style="text-align: right">
                        <div class="no-kwitansi" style="margin: 0px 8px 0 0" id="no-kwitansi">
                            <label class="output-tittle" style="margin-right: 2px">No. Kwitansi:</label>
                            <label style="width: 7rem">{{ $kwitansi->nomor_kwitansi }}</label>
                        </div>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem">Nama Lengkap</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->nama_lengkap }}</label>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem;">Alamat</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->alamat }}</label>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem;">No.HP</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->no_hp }}</label>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem;">Terbilang</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->terbilang }}</label>
                    </div>
                    <div class="wrapper output radio" style="display: flex; margin: 0 0 -2px 12px">
                        <div class="output" style="margin: 0 0 -1px 0px">
                            <label class="output-tittle" style="width: 8rem;">Pembayaran</label>
                            <label style="margin-left:">:</label>
                            <label style="margin-left: 0.2rem; width: 15rem;"> <?php
                            $pembayaran = $kwitansi->pembayaran;
                            $keterangan = $kwitansi->keterangan;
                            
                            if ($pembayaran === 'Booking' || $pembayaran === 'DP' || $pembayaran === 'CBTH' || $pembayaran === 'KET') {
                                echo $pembayaran;
                            } elseif ($pembayaran === 'Angsuran ke') {
                                echo $pembayaran . ' ' . $keterangan;
                            } elseif ($pembayaran === 'Lain-lain') {
                                echo $keterangan;
                            } else {
                                echo $pembayaran;
                            }
                            ?></label>
                        </div>
                    </div>
                    <div class="wrapper output radio" style="display: flex; margin: 0 0 -2px 12px">
                        <div class="output" style="margin: 0 0 -1px 0px">
                            <label class="output-tittle" style="width: 8rem">Lokasi</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 17rem">{{ $kwitansi->lokasi }}</label>
                        </div>
                        <div class="output" style="margin: 0 0 -1px 0px">
                            <label class="output-tittle" style="width: 2rem">Type</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 5rem">{{ $kwitansi->type }}</label>
                        </div>
                    </div>
                    <div class="wrapper ouput radio" style="display: flex; margin-left: 12px">
                        <div class="output">
                            <label class="output-tittle" style="width: 8rem">No. Kavling</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 7rem">{{ $kwitansi->no_kavling }}</label>
                        </div>
                    </div>
                    <div class="output" style="display: flex; margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8.3rem; margin: 0 0 -1px 0">Jumlah</label>
                        <label style="margin: 0 0 -1px 0">:</label>
                        <label style="width: 10rem; margin: 0 0 -1px 6px">{{ $kwitansi->jumlah }}</label>
                        <div style="flex-grow: 1; text-align: right; margin: 0 0 -1px 0 ">
                            <label style="width: 15rem; margin-right: 8px;">Cirebon,
                                {{ date('j F Y', strtotime($kwitansi->created_at)) }}</label>
                        </div>
                    </div>
                    <div class="ttd-wrapper" style="float: right; margin-right:8px">
                        <div class="row" style="margin-top: 4px; padding: 0 8px 0 0">
                            <div class="col text-center"
                                style="border-top: 1px solid; width: 6rem; border-left: 1px solid">
                                <label class="output-tittle">Pembeli</label>
                            </div>
                            <div class="col text-center"
                                style="border-top: 1px solid; width: 6rem; border-left: 1px solid">
                                <label class="output-tittle">Kasir</label>
                            </div>
                            <div class="col text-center"
                                style="border-top: 1px solid; border-left: 1px solid; width: 6rem; border-right: 1px solid">
                                <label class="output-tittle">Keuangan</label>
                            </div>
                        </div>
                        <div class="row" style="padding: 0px 8px 0px 0px;">
                            <div class="col"
                                style="border-top: 1px solid; border-left: 1px solid; border-bottom: 1px solid; height: 4.6rem;">
                            </div>
                            <div class="col" style="border: 1px solid; height: 4.6rem;">
                            </div>
                            <div class="col"
                                style="border-bottom: 1px solid; border-right: 1px solid; border-top:1px solid; height: 4.6rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content wrapper mt-2"
                style="background-image: url('/img/kasir.png'); width: 21.59cm; height: 10.9cm; padding: 3pt 24px 0px 24px; border-bottom: 1px solid; border-bottom-style: dashed">
                @include('templates.headerCetak')
                <div class="content">
                    <div class="output kwitansi" style="text-align: right">
                        <div class="no-kwitansi" style="margin: 0px 8px 0 0" id="no-kwitansi">
                            <label class="output-tittle" style="margin-right: 2px">No. Kwitansi:</label>
                            <label style="width: 7rem">{{ $kwitansi->nomor_kwitansi }}</label>
                        </div>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem">Nama Lengkap</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->nama_lengkap }}</label>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem;">Alamat</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->alamat }}</label>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem;">No.HP</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->no_hp }}</label>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem;">Terbilang</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->terbilang }}</label>
                    </div>
                    <div class="wrapper output radio" style="display: flex; margin: 0 0 -2px 12px">
                        <div class="output" style="margin: 0 0 -1px 0px">
                            <label class="output-tittle" style="width: 8rem;">Pembayaran</label>
                            <label style="margin-left:">:</label>
                            <label style="margin-left: 0.2rem; width: 15rem;"> <?php
                            $pembayaran = $kwitansi->pembayaran;
                            $keterangan = $kwitansi->keterangan;
                            
                            if ($pembayaran === 'Booking' || $pembayaran === 'DP' || $pembayaran === 'CBTH' || $pembayaran === 'KET') {
                                echo $pembayaran;
                            } elseif ($pembayaran === 'Angsuran ke') {
                                echo $pembayaran . ' ' . $keterangan;
                            } elseif ($pembayaran === 'Lain-lain') {
                                echo $keterangan;
                            } else {
                                echo $pembayaran;
                            }
                            ?></label>
                        </div>
                    </div>
                    <div class="wrapper output radio" style="display: flex; margin: 0 0 -2px 12px">
                        <div class="output" style="margin: 0 0 -1px 0px">
                            <label class="output-tittle" style="width: 8rem">Lokasi</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 17rem">{{ $kwitansi->lokasi }}</label>
                        </div>
                        <div class="output" style="margin: 0 0 -1px 0px">
                            <label class="output-tittle" style="width: 2rem">Type</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 5rem">{{ $kwitansi->type }}</label>
                        </div>
                    </div>
                    <div class="wrapper ouput radio" style="display: flex; margin-left: 12px">
                        <div class="output">
                            <label class="output-tittle" style="width: 8rem">No. Kavling</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 7rem">{{ $kwitansi->no_kavling }}</label>
                        </div>
                    </div>
                    <div class="output" style="display: flex; margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8.3rem; margin: 0 0 -1px 0">Jumlah</label>
                        <label style="margin: 0 0 -1px 0">:</label>
                        <label style="width: 10rem; margin: 0 0 -1px 6px">{{ $kwitansi->jumlah }}</label>
                        <div style="flex-grow: 1; text-align: right; margin: 0 0 -1px 0 ">
                            <label style="width: 15rem; margin-right: 8px;">Cirebon,
                                {{ date('j F Y', strtotime($kwitansi->created_at)) }}</label>
                        </div>
                    </div>
                    <div class="ttd-wrapper" style="float: right; margin-right:8px">
                        <div class="row" style="margin-top: 4px; padding: 0 8px 0 0">
                            <div class="col text-center"
                                style="border-top: 1px solid; width: 6rem; border-left: 1px solid">
                                <label class="output-tittle">Pembeli</label>
                            </div>
                            <div class="col text-center"
                                style="border-top: 1px solid; width: 6rem; border-left: 1px solid">
                                <label class="output-tittle">Kasir</label>
                            </div>
                            <div class="col text-center"
                                style="border-top: 1px solid; border-left: 1px solid; width: 6rem; border-right: 1px solid">
                                <label class="output-tittle">Keuangan</label>
                            </div>
                        </div>
                        <div class="row" style="padding: 0px 8px 0px 0px;">
                            <div class="col"
                                style="border-top: 1px solid; border-left: 1px solid; border-bottom: 1px solid; height: 4.6rem;">
                            </div>
                            <div class="col" style="border: 1px solid; height: 4.6rem;">
                            </div>
                            <div class="col"
                                style="border-bottom: 1px solid; border-right: 1px solid; border-top:1px solid; height: 4.6rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content wrapper mt-2"
                style="background-image: url('/img/keuangan.png'); width: 21.59cm; height: 10.9cm; padding: 3pt 24px 0px 24px;">
                @include('templates.headerCetak')
                <div class="content">
                    <div class="output kwitansi" style="text-align: right">
                        <div class="no-kwitansi" style="margin: 0px 8px 0 0" id="no-kwitansi">
                            <label class="output-tittle" style="margin-right: 2px">No. Kwitansi:</label>
                            <label style="width: 7rem">{{ $kwitansi->nomor_kwitansi }}</label>
                        </div>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem">Nama Lengkap</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->nama_lengkap }}</label>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem;">Alamat</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->alamat }}</label>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem;">No.HP</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->no_hp }}</label>
                    </div>
                    <div class="output" style="margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8rem;">Terbilang</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;">{{ $kwitansi->terbilang }}</label>
                    </div>
                    <div class="wrapper output radio" style="display: flex; margin: 0 0 -2px 12px">
                        <div class="output" style="margin: 0 0 -1px 0px">
                            <label class="output-tittle" style="width: 8rem;">Pembayaran</label>
                            <label style="margin-left:">:</label>
                            <label style="margin-left: 0.2rem; width: 15rem;"> <?php
                            $pembayaran = $kwitansi->pembayaran;
                            $keterangan = $kwitansi->keterangan;
                            
                            if ($pembayaran === 'Booking' || $pembayaran === 'DP' || $pembayaran === 'CBTH' || $pembayaran === 'KET') {
                                echo $pembayaran;
                            } elseif ($pembayaran === 'Angsuran ke') {
                                echo $pembayaran . ' ' . $keterangan;
                            } elseif ($pembayaran === 'Lain-lain') {
                                echo $keterangan;
                            } else {
                                echo $pembayaran;
                            }
                            ?></label>
                        </div>
                    </div>
                    <div class="wrapper output radio" style="display: flex; margin: 0 0 -2px 12px">
                        <div class="output" style="margin: 0 0 -1px 0px">
                            <label class="output-tittle" style="width: 8rem">Lokasi</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 17rem">{{ $kwitansi->lokasi }}</label>
                        </div>
                        <div class="output" style="margin: 0 0 -1px 0px">
                            <label class="output-tittle" style="width: 2rem">Type</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 5rem">{{ $kwitansi->type }}</label>
                        </div>
                    </div>
                    <div class="wrapper ouput radio" style="display: flex; margin-left: 12px">
                        <div class="output">
                            <label class="output-tittle" style="width: 8rem">No. Kavling</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 7rem">{{ $kwitansi->no_kavling }}</label>
                        </div>
                    </div>
                    <div class="output" style="display: flex; margin: 0 0 -1px 12px">
                        <label class="output-tittle" style="width: 8.3rem; margin: 0 0 -1px 0">Jumlah</label>
                        <label style="margin: 0 0 -1px 0">:</label>
                        <label style="width: 10rem; margin: 0 0 -1px 6px">{{ $kwitansi->jumlah }}</label>
                        <div style="flex-grow: 1; text-align: right; margin: 0 0 -1px 0 ">
                            <label style="width: 15rem; margin-right: 8px;">Cirebon,
                                {{ date('j F Y', strtotime($kwitansi->created_at)) }}</label>
                        </div>
                    </div>
                    <div class="ttd-wrapper" style="float: right; margin-right:8px">
                        <div class="row" style="margin-top: 4px; padding: 0 8px 0 0">
                            <div class="col text-center"
                                style="border-top: 1px solid; width: 6rem; border-left: 1px solid">
                                <label class="output-tittle">Pembeli</label>
                            </div>
                            <div class="col text-center"
                                style="border-top: 1px solid; width: 6rem; border-left: 1px solid">
                                <label class="output-tittle">Kasir</label>
                            </div>
                            <div class="col text-center"
                                style="border-top: 1px solid; border-left: 1px solid; width: 6rem; border-right: 1px solid">
                                <label class="output-tittle">Keuangan</label>
                            </div>
                        </div>
                        <div class="row" style="padding: 0px 8px 0px 0px;">
                            <div class="col"
                                style="border-top: 1px solid; border-left: 1px solid; border-bottom: 1px solid; height: 4.6rem;">
                            </div>
                            <div class="col" style="border: 1px solid; height: 4.6rem;">
                            </div>
                            <div class="col"
                                style="border-bottom: 1px solid; border-right: 1px solid; border-top:1px solid; height: 4.6rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
    <style>
        label.output-tittle {
            font-weight: 500
        }
    </style>
