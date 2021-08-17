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
            <h2 style="text-align:center; text-decoration:underline;margin:0px;">SURAT TUGAS</h2>
            <h5 style="text-align:center; text-decoration:underline; margin:10px;">Nomor:
                445/&nbsp;/KEC/ST-{{Carbon\carbon::parse($data->created_at)->format('Y')}}</h5>
            <br>
            <p style="text-align: justify;">Yang bertanda Tangan Dibawah ini:</p>
            {{-- <h2 style="text-align: center; text-transform:uppercase;text-decoration:underline;">
                {{'TES'}}</h2> --}}
            <table>
                <tr>
                    <td style="height:30px !important;">Nama</td>
                    <td>:</td>
                    <td>Agus Fahlufi, SIP, M.Si</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">NIP</td>
                    <td>:</td>
                    <td>19710830 199101 1 002</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">Pangkat/Golongan</td>
                    <td>:</td>
                    <td>Pembina Utama Muda / IV/C.</td>
                </tr>

            </table>

            <br>
            <p style="text-align: justify;">Memberikan Tugas Kepada:</p>
            {{-- <h2 style="text-align: center; text-transform:uppercase;text-decoration:underline;">
                            {{'TES'}}</h2> --}}
            <table>
                <tr>
                    <td style="height:30px !important;">ID Petugas</td>
                    <td>:</td>
                    <td>{{$data->id_petugas}}</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">Nama</td>
                    <td>:</td>
                    <td>{{$data->nama_petugas}}</td>
                </tr>

            </table>
            <br>
            <p style="text-align: justify;">Untuk membantu melaksanakan tugas pada Kecamatan Cempaka dalam rangka:</p>
            <table>
                <tr>
                    <td>1. Melakukan input kegiatan pada Kecamatan Cempaka</td>
                </tr>
                <tr>
                    <td>2. Melakukan input kejadian gangguan pada Kecamatan Cempaka </td>
                </tr>
                <tr>
                    <td>3. Melakukan input kejadian kriminal pada Kecamatan Cempaka </td>
                </tr>
                <tr>
                    <td>4. Melakukan input kejadian konflik pada Kecamatan Cempaka </td>
                </tr>
            </table>
            <br>
            <br>
            <table>
                <tr>
                    <td width="50%"></td>
                    <td>
                        Ditetapkan di : Cempaka<br>
                        Pada Tanggal : {{carbon\carbon::parse($data->tanggal_bertugas)->translatedFormat('d F Y')}}<br>
                        --------------------------------------------------- <br>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="text-align: right; width:60%">
                    </td>
                    <td style="text-align: center;">
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