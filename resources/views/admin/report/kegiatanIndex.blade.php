@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Laporan Data Kegiatan</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Laporan Data Kegiatan</li>
            </ol>
            <a href="{{Route('admin.report.kegiatanAll')}}" class="btn btn-info  m-l-15"><i class="fa fa-print"></i>
                Cetak Semua</a>
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
                <div class="row">
                    <div class="col-md-6">
                        <form class="floating-labels m-t-40" action="{{route('admin.report.kegiatanYear')}}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group m-b-40">
                                <input type="text" name="year" class="form-control" id="input1" required>
                                <span class="bar"></span>
                                <label for="input1">Tahun</label>
                            </div>
                            <div class="form-group card-footer text-center">
                                <button type="submit" class="btn btn-info  m-l-15"><i class="fa fa-print"></i>
                                    Cetak Kegiatan Per Tahun</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form class="floating-labels m-t-40" action="{{route('admin.report.kegiatanMonth')}}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group m-b-40 col-md-6">
                                    <select name="month" id="" class="form-control" required>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                    <span class="bar"></span>
                                    <label for="input1">Bulan</label>
                                </div>
                                <div class="form-group m-b-40 col-md-6">
                                    <input type="text" name="year" class="form-control" id="input1" required>
                                    <span class="bar"></span>
                                    <label for="input1">Tahun</label>
                                </div>
                            </div>
                            <div class="form-group card-footer text-center">
                                <button type="submit" class="btn btn-info  m-l-15"><i class="fa fa-print"></i>
                                    Cetak Kegiatan Per Bulan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

@endsection