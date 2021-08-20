@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data Gangguan</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Data Gangguan</li>
                <li class="breadcrumb-item">Detail</li>
            </ol>
            <a target="_blank" href="{{Route('admin.report.baGangguan',$gangguan->id)}}"
                class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-print"></i> Cetak Berita Acara Gangguan
            </a>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table class="table no-footer " role="grid" aria-describedby="myTable_info">
                        <tbody>
                            <tr>
                                <td width="20%">Nomor Gangguan</td>
                                <td width="2px">:</td>
                                <td>{{$gangguan->no_gangguan}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Camat Penanggung Jawab</td>
                                <td width="2px">:</td>
                                <td>{{$gangguan->camat->nama}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Kasi Penanggung Jawab</td>
                                <td width="2px">:</td>
                                <td>{{$gangguan->kasi->nama}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Petugas Penanggung Jawab</td>
                                <td width="2px">:</td>
                                <td>{{$gangguan->petugas->pegawai->nama}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Deskripsi Gangguan</td>
                                <td width="2px">:</td>
                                <td>{{$gangguan->deskripsi_gangguan}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Tanggal Gangguan</td>
                                <td width="2px">:</td>
                                <td>{{carbon\carbon::parse($gangguan->tanggal_gangguan)->translatedFormat('d F Y')}}
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">Penanganan</td>
                                <td width="2px">:</td>
                                <td>{{$gangguan->penanganan}}</td>
                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>
            <div class="card-footer text-right">
                <a href="{{Route('admin.gangguan.index',$gangguan->id)}}" class="btn btn-danger  m-l-15"><i
                        class="fa fa-exit"></i> Kembali
                </a>
            </div>
        </div>
    </div>
    @include('layouts.delete')
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection