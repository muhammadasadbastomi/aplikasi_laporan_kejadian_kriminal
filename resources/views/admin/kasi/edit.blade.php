@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data Kasi</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">Data Kasi</li>
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
            <form class="floating-labels m-t-40" action="{{route('admin.kasi.update',$kasi->id)}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group m-b-40">
                        <input type="text" name="nip" value="{{$kasi->nip}}" class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">NIP</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" name="nama" value="{{$kasi->nama}}" class="form-control" id="input1"
                            required>
                        <span class="bar"></span>
                        <label for="input1">Nama Lengkap</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" name="pangkat" value="{{$kasi->pangkat}}" class="form-control" id="input3"
                            required>
                        <span class="bar"></span>
                        <label for="input3">Pangkat</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="date" name="tanggal_menjabat" value="{{$kasi->tanggal_menjabat}}"
                            class="form-control" id="input3" required>
                        <span class="bar"></span>
                        <label for="input3">Tanggal Menjabat</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="file" name="foto" class="form-control dropify" data-max-file-size="3M"
                            data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="Upload jika ingin mengubah foto!!" />
                        <span class="bar"></span>
                        <label for="input5">Foto</label>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.kasi.index')}}" class="btn btn-danger  m-l-15"><i
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