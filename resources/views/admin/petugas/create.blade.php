@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data Petugas</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">Data Petugas</li>
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
            <form class="floating-labels m-t-40" action="{{route('admin.petugas.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group m-b-40">
                        <input type="text" name="id_petugas" class="form-control" id="input3" required>
                        <span class="bar"></span>
                        <label for="input3">ID Petugas</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="pegawai_id" id="input6" required>
                            <option>Pilih Pegawai</option>
                            @foreach ($pegawai as $d)
                            <option value="{{$d->id}}">{{$d->nama}}</option>
                            @endforeach
                        </select><span class="bar"></span>
                        <label for="input6">Pegawai</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="status" id="input6" required>
                            <option>Pilih Status Petugas</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select><span class="bar"></span>
                        <label for="input6">Status Petugas</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="date" name="tanggal_bertugas" class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Tanggal Bertugas</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="file" name="foto" class="form-control dropify" data-max-file-size="3M" required />
                        <span class="bar"></span>
                        <label for="input5">Foto</label>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.petugas.index')}}" class="btn btn-danger  m-l-15"><i
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