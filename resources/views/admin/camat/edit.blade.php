@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data Camat</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">Data Camat</li>
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
            <form class="floating-labels m-t-40" action="{{route('admin.camat.update',$camat->id)}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group m-b-40">
                        <input type="text" name="nip" value="{{$camat->nip}}" class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">NIP</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" name="nama" value="{{$camat->nama}}" class="form-control" id="input1"
                            required>
                        <span class="bar"></span>
                        <label for="input1">Nama Lengkap</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" name="pangkat" value="{{$camat->pangkat}}" class="form-control" id="input3"
                            required>
                        <span class="bar"></span>
                        <label for="input3">Pangkat</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="jabatan_id" id="input6" required>
                            <option>Pilih Jabatan</option>
                            @foreach ($jabatan as $d)
                            <option value="{{$d->id}}" {{$d->id == $camat->jabatan_id ? 'selected' : ''}}>
                                {{$d->kode_jabatan . ' - ' . $d->nama_jabatan }}</option>
                            @endforeach
                        </select><span class="bar"></span>
                        <label for="input6">Jabatan</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="date" name="tanggal_menjabat" value="{{$camat->tanggal_menjabat}}"
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
                    <a href="{{Route('admin.camat.index')}}" class="btn btn-danger  m-l-15"><i
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