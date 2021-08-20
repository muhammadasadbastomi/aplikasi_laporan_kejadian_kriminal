@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data Jadwal Petugas</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">Data Jadwal Petugas</li>
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
            <form class="floating-labels m-t-40" action="{{route('admin.jadwal.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="hari" id="input6" required>
                            <option>Pilih Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                        </select><span class="bar"></span>
                        <label for="input6">Petugas Penanggung Jawab</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="petugas_id" id="input6" required>
                            <option>Pilih Petugas Penanggung Jawab</option>
                            @foreach ($petugas as $d)
                            <option value="{{$d->id}}">{{$d->id_petugas . ' - ' . $d->pegawai->nama }}</option>
                            @endforeach
                        </select><span class="bar"></span>
                        <label for="input6">Petugas Penanggung Jawab</label>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.jadwal.index')}}" class="btn btn-danger  m-l-15"><i
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