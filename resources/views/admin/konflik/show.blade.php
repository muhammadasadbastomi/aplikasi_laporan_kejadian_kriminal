@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data Konflik</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Data Konflik</li>
                <li class="breadcrumb-item">Detail</li>
            </ol>
            <a target="_blank" href="{{Route('admin.report.baKonflik',$konflik->id)}}"
                class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-print"></i> Cetak Berita Acara Konflik
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
                                <td width="20%">Nomor Konflik</td>
                                <td width="2px">:</td>
                                <td>{{$konflik->no_konflik}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Camat Penanggung Jawab</td>
                                <td width="2px">:</td>
                                <td>{{$konflik->camat->nama}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Kasi Penanggung Jawab</td>
                                <td width="2px">:</td>
                                <td>{{$konflik->kasi->nama}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Petugas Penanggung Jawab</td>
                                <td width="2px">:</td>
                                <td>{{$konflik->petugas->pegawai->nama}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Deskripsi Konflik</td>
                                <td width="2px">:</td>
                                <td>{{$konflik->deskripsi_konflik}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Tanggal Konflik</td>
                                <td width="2px">:</td>
                                <td>{{carbon\carbon::parse($konflik->tanggal_konflik)->translatedFormat('d F Y')}}
                                </td>
                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>

        </div>
        <div class="card">
            <div class="card-header">
                <a href="{{Route('admin.detail_konflik.create',$konflik->id)}}"
                    class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Tambah
                    Dokumentasi</a>
            </div>
            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table class="table no-footer " role="grid" aria-describedby="myTable_info">
                        <tbody>
                            @foreach ($konflik->lampiran_konflik as $d)
                            <tr>
                                <td width="20%">Foto Dokumentasi {{$loop->iteration}}</td>
                                <td width="2px">:</td>
                                <td> <img style="height : 500px !important;" src="{{asset('lampiran/'.$d->lampiran)}}"
                                        alt="">
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
            <div class="card-footer text-right">
                <a href="{{Route('admin.konflik.index',$konflik->id)}}" class="btn btn-danger  m-l-15"><i
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