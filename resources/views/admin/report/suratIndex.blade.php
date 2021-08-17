@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Laporan Data Surat Tugas Petugas</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Laporan Data Surat Tugas Petugas</li>
            </ol>
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
                    <div class="col-md-12">
                        <form class="floating-labels m-t-40" action="{{route('admin.report.surat')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group m-b-40 ">
                                <select name="petugas_id" id="" class="form-control" required>
                                    @foreach ($petugas as $d)

                                    <option value="{{$d->id}}">{{$d->nama_petugas}}</option>
                                    @endforeach
                                </select>
                                <span class="bar"></span>
                                <label for="input1">Petugas</label>
                            </div>
                            <div class="form-group card-footer text-center">
                                <button type="submit" class="btn btn-info  m-l-15"><i class="fa fa-print"></i>
                                    Cetak Surat Tugas Petugas </button>
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