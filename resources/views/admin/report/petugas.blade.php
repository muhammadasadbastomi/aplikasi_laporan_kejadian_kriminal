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
            <h2 style="text-align:center;">LAPORAN DATA PETUGAS</h2>
            <br>
            <table id="myTable" class="table table-bordered table-striped dataTable no-footer text-center" role="grid"
                aria-describedby="myTable_info">
                <thead>

                    <tr>
                        <th>No</th>
                        <th>ID Petugas</th>
                        <th>Nama</th>
                        <th>Tanggal Bertugas</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->id_petugas}}</td>
                        <td>{{$d->nama_petugas}}</td>
                        <td>{{carbon\carbon::parse($d->tanggal_bertugas)->translatedFormat('d F Y')}}</td>
                        <td>
                            @if ($d->status == 'Aktif')

                            Aktif
                            @else
                            Tidak
                            Aktif

                            @endif</td>
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