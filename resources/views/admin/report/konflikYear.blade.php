<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h4,
        h2 {
            font-family: serif;
        }

        body {
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th {
            text-align: center;
        }

        td {
            text-align: center;
        }

        br {
            margin-bottom: 5px !important;
        }

        .judul {
            text-align: center;
        }

        .header {
            margin-bottom: 0px;
            text-align: center;
            height: 110px;
            padding: 0px;
        }

        .pemko {
            width: 70px;
        }

        .logo {
            float: left;
            margin-right: 0px;
            width: 18%;
            padding: 0px;
            text-align: right;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 72%;
            padding-left: 0px;
            padding-right: 10%;
        }

        hr {
            margin-top: 10%;
            height: 3px;
            background-color: black;
            width: 100%;
        }

        .ttd {
            margin-left: 65%;
            text-align: center;
            text-transform: uppercase;
        }

        .text-right {
            text-align: right;
        }

        .isi {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img class="pemko" src="ART.png">
        </div>
        <div class="headtext">
            <h3 style="margin:0px;">PEMERINTAH KOTA BANJARBARU </h3>
            <h3 style="margin:0px;">KECAMATAN CEMPAKA </h3>
            <p style="margin:0px;">Jl.Gubernur Mistar Cokrokusumo Komplek Perkantoran No. 64 Rt. 027 Rw. 009 Kelurahan
                Sungai Tiung Kec.Cempaka Kota
                BANJARBARU Kode Pos 70734
            </p>
        </div>
        <br>
    </div>
    <div class="container">
        <hr style="margin-top:1px;">
        <div class="isi">
            <h2 style="text-align:center;">LAPORAN DATA KONFLIK TAHUN {{$year}}</h2>
            <br>
            <table class="table table-bordered" id="basic-data-table">
                <thead>

                    <tr>
                        <th>No</th>
                        <th>No Konflik</th>
                        <th>Tanggal Konflik</th>
                        <th>Camat Penanggung Jawab</th>
                        <th>Kasi Penanggung Jawab</th>
                        <th>Petugas Penanggung Jawab</th>
                        <th>Desa</th>
                        <th>Deskripsi Konflik</th>
                        <th>Penanganan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->no_konflik}}</td>
                        <td>{{carbon\carbon::parse($d->tanggal_konflik)->translatedFormat('d F Y')}}</td>
                        <td>{{$d->camat->nama}}</td>
                        <td>{{$d->kasi->nama}}</td>
                        <td>{{$d->petugas->nama_petugas}}</td>
                        <td>{{$d->desa->nama_desa}}</td>
                        <td>{{$d->deskripsi_konflik}}</td>
                        <td>{{$d->penanganan}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>
            <div class="ttd">
                <p style="margin:0px"> Banjarbaru, {{$now}}</p>
                <h6 style="margin:0px">Mengetahui</h6>
                <h5 style="margin:0px">Camat </h5>
                <br>
                <br>
                <h5 style="text-decoration:underline; margin:0px">(Agus Fahlufi, SIP, M.Si)</h5>
                <h5 style="margin:0px">NIP. 19710830 199101 1 002</h5>
            </div>
        </div>
    </div>
</body>

</html>