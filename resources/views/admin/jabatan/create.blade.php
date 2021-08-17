@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data Jabatan</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">Data Jabatan</li>
                <li class="breadcrumb-item active">Tambah</li>
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
            <form class="floating-labels m-t-40" action="{{route('admin.jabatan.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group m-b-40">
                        <input type="text" name="kode_jabatan" class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Kode Jabatan</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" name="nama_jabatan" class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Nama Jabatan</label>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.jabatan.index')}}" class="btn btn-danger  m-l-15"><i
                            class="fa fa-arrow-left"></i>
                        Batal</a>
                    <button type="submit" class="btn btn-info  m-l-15"><i class="fa fa-save"></i>
                        Simpan</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection