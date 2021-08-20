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
            border: none;
        }

        th {
            text-align: center;
        }

        td {
            text-align: left;
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
            <h2 style="text-align:center; text-decoration:underline;margin:0px;">BERITA ACARA KRIMINAL</h2>
            <h5 style="text-align:center; text-decoration:underline; margin:10px;">Nomor:
                441/KEC/BA-{{Carbon\carbon::parse($data->created_at)->format('Y')}}</h5>
            <br>

            <p style="text-align: justify;">Pada hari
                {{carbon\carbon::parse($data->tanggal_kejadian)->translatedFormat('l')}},
                {{carbon\carbon::parse($data->tanggal_kejadian)->translatedFormat('d F Y')}} telah terjadi tindak
                kriminal dengan keterangan sebagai berikut:</p>
            {{-- <h2 style="text-align: center; text-transform:uppercase;text-decoration:underline;">
                            {{'TES'}}</h2> --}}
            <table>
                <tr>
                    <td width="40%" style="height:50px !important;">Nomor Kriminal</td>
                    <td width="2px">:</td>
                    <td>{{$data->no_kasus}}</td>
                </tr>
                <tr>
                    <td width="40%" style="height:50px !important;">Deskripsi Kriminal</td>
                    <td width="2px">:</td>
                    <td>{{$data->deskripsi_kriminal}}</td>
                </tr>
                <tr>
                    <td width="40%" style="height:50px !important;">Tanggal Kriminal</td>
                    <td width="2px">:</td>
                    <td>{{carbon\carbon::parse($data->tanggal_kejadian)->translatedFormat('d F Y')}}</td>
                </tr>
                <tr>
                    <td width="40%" style="height:50px !important;">Pelaku</td>
                    <td width="2px">:</td>
                    <td>{{$data->pelaku}}</td>
                </tr>
                <tr>
                    <td width="40%" style="height:50px !important;">Korban</td>
                    <td width="2px">:</td>
                    <td>{{$data->korban}}</td>
                </tr>
                <tr>
                    <td width="40%" style="height:50px !important;">Saksi</td>
                    <td width="2px">:</td>
                    <td>{{$data->saksi}}</td>
                </tr>
                <tr>
                    <td width="40%" style="height:50px !important;">Kasi Penanggung Jawab</td>
                    <td width="2px">:</td>
                    <td>{{$data->kasi->nama}}</td>
                </tr>
                <tr>
                    <td width="40%" style="height:50px !important;">Petugas Penanggung Jawab</td>
                    <td width="2px">:</td>
                    <td>{{$data->petugas->pegawai->nama}}</td>
                </tr>

            </table>
            <br>
            <p style="text-align: justify;">
                Demikian berita acara ini dibuat sesungguhnya untuk dipergunakan sebagai mestinya.
            </p>
            <br>
            <br>
            <table>
                <tr>
                    {{-- <td ></td> --}}
                    <td style="text-align: right; padding-right:30px" width="40%">
                        Banjarbaru,
                        {{carbon\carbon::parse($data->tanggal_kejadian)->translatedFormat('d F Y')}}
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="text-align: right; width:60%">
                    </td>
                    <td style="text-align: center;">
                        {{-- {{carbon\carbon::parse($data->tanggal_kejadian)->translatedFormat('d F Y')}} --}}
                        Camat
                        <br>
                        <br>
                        <br>
                        <br>
                        <h5 style="text-decoration:underline; margin:0px">Agus Fahlufi, SIP, M.Si</h5>
                        <h5 style="margin:0px">NIP. 19710830 199101 1 002</h5>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>