    <head>
        <title>Kwitansi</title>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script>
        function printKwitansi() {
            window.print();
        }
    </script>

    <body>
        <div class="sheet wrapper"
            style="position: relative; display: flex; padding-top: 48; flex-direction: column; justify-content: center; align-items: center;">
            <div class="content wrapper"
                style="width: 21.59cm; height: 13.97cm; padding: 0 16px 24px 16px; border: 1px solid grey;">
                @include('templates.header')
                <div class="content">
                    <div class="output kwitansi" style="text-align: right">
                        <div class="no-kwitansi" style="margin-top: 0.5rem" id="no-kwitansi">
                            <label class="no" style="margin-right: 2px">No:</label>
                            <label style="width: 4.5rem" for="noKwitansi">{{ $kwitansi->nomor_kwitansi }}</label>
                        </div>
                    </div>
                    <div class="output" style="margin-bottom: 4px">
                        <label style="width: 8rem;">Nama Lengkap</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;" for="inputName">{{ $kwitansi->nama_lengkap }}</label>
                    </div>
                    <div class="output" style="margin-bottom: 4px">
                        <label style="width: 8rem;">Alamat</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;" for="inputName">{{ $kwitansi->alamat }}</label>
                    </div>
                    <div class="output" style="margin-bottom: 4px">
                        <label style="width: 8rem;">No.HP</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;" for="inputName">{{ $kwitansi->no_hp }}</label>
                    </div>
                    <div class="output" style="margin-bottom: 4px">
                        <label style="width: 8rem;">Uang Sejumlah</label></label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;" for="inputName">{{ $kwitansi->uang_sebanyak }}</label>
                    </div>
                    <div class="output" style="margin-bottom: 4px">
                        <label style="width: 8rem;">Pembayaran</label>
                        <label style="margin-left:">:</label>
                        <label style="margin-left: 0.2rem;" for="inputName">{{ $kwitansi->pembayaran }}</label>
                    </div>
                    <div class="wrapper ouput radio" style="display: flex; margin: 8px 0 4px;">
                        <div class="output">
                            <label style="width: 6rem">Lokasi</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 7rem"
                                for="outputPembayaran">{{ $kwitansi->lokasi }}</label>
                        </div>
                        <div class="output">
                            <label style="width: 2.5rem">Type</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 7rem"
                                for="outputPembayaran">{{ $kwitansi->type }}</label>
                        </div>
                        <div class="output">
                            <label style="width: 4.5rem">Discount</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 7rem"
                                for="outputPembayaran">{{ $kwitansi->discount }}</label>
                        </div>
                    </div>
                    <div class="wrapper ouput radio" style="display: flex; margin: 0 0 12px;">
                        <div class="output">
                            <label style="width: 6rem">No. Kavling</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 7rem"
                                for="outputPembayaran">{{ $kwitansi->no_kavling }}</label>
                        </div>
                        <div class="output">
                            <label style="width: 2.5rem">Luas</label>
                            <label>:</label>
                            <label style="margin-left: 0.2rem; width: 7rem"
                                for="outputPembayaran">{{ $kwitansi->luas }}</label>
                        </div>
                    </div>
                    <div class="output" style="display: flex;">
                        <label style="width: 6.3rem">Jumlah</label>
                        <label>:</label>
                        <label style="margin: 0 4 0 6">Rp.</label>
                        <label style="width: 10rem" for="outputPembayaran">{{ $kwitansi->jumlah }}</label>
                        <div style="flex-grow: 1; text-align: right;">
                            <label>Cirebon,</label>
                            <label style="width: 9rem" for="date">17 Februari 2023</label>
                        </div>
                    </div>
                    <div class="ttd-wrapper" style="width: 300; float: right; margin-right: 12">
                        <div class="row" style="margin-top: 4px;">
                            <div class="col text-center" style="border-top: 1px solid; border-left: 1px solid">
                                Pembeli
                            </div>
                            <div class="col text-center" style="border-top: 1px solid; border-left: 1px solid">
                                Kasir
                            </div>
                            <div class="col text-center"
                                style="border-top: 1px solid; border-left: 1px solid; border-right: 1px solid">
                                Keuangan
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"
                                style="border-top: 1px solid; border-left: 1px solid; border-bottom: 1px solid; height: 5.5rem;">
                            </div>
                            <div class="col" style="border: 1px solid; height: 5.5rem;">
                            </div>
                            <div class="col"
                                style="border-bottom: 1px solid; border-right: 1px solid; border-top:1px solid; height: 5.5rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button wrapper"
            style="padding: 32; position: relative; flex-direction: row; display: flex; justify-content: center; align-items: center">
            <div class="button" style="width: 21.59cm; text-align: center">
                <button type="button" class="btn btn-primary" onclick="">Kembali</button>
                <button type="button" class="btn btn-primary" onclick="printKwitansi()">Cetak</button>
            </div>
        </div>
    </body>