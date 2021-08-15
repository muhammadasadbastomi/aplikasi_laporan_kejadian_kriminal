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
            <form class="floating-labels m-t-40" action="{{route('admin.kegiatan.update',$kegiatan->id)}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group m-b-40">
                        <input type="text" name="no_kegiatan" value="{{$kegiatan->no_kegiatan}}" class="form-control"
                            id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Nomor Kegiatan</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="camat_id" id="input6" required>
                            <option>Pilih Camat Penanggung Jawab</option>
                            @foreach ($camat as $d)
                            <option value="{{$d->id}}" {{$d->id == $kegiatan->camat_id ? 'selected' : ''}}>
                                {{$d->nip . ' - ' . $d->nama }}</option>
                            @endforeach
                        </select><span class="bar"></span>
                        <label for="input6">Camat Penanggung Jawab</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="kasi_id" id="input6" required>
                            <option>Pilih Kasi Penanggung Jawab</option>
                            @foreach ($kasi as $d)
                            <option value="{{$d->id}}" {{$d->id == $kegiatan->kasi_id ? 'selected' : ''}}>
                                {{$d->nip . ' - ' . $d->nama }}</option>
                            @endforeach
                        </select><span class="bar"></span>
                        <label for="input6">Kasi Penanggung Jawab</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="petugas_id" id="input6" required>
                            <option>Pilih Petugas Penanggung Jawab</option>
                            @foreach ($petugas as $d)
                            <option value="{{$d->id}}" {{$d->id == $kegiatan->petugas_id ? 'selected' : ''}}>
                                {{$d->id_petugas . ' - ' . $d->nama_petugas }}</option>
                            @endforeach
                        </select><span class="bar"></span>
                        <label for="input6">Petugas Penanggung Jawab</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="date" name="tanggal_kegiatan" value="{{$kegiatan->tanggal_kegiatan}}"
                            class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Tanggal Kegiatan</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" name="nama_kegiatan" value="{{$kegiatan->nama_kegiatan}}"
                            class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Nama kegiatan</label>
                    </div>
                    <div class="form-group m-b-5">
                        <textarea class="form-control" name="deskripsi_kegiatan" rows="4" id="input7"
                            required>{{$kegiatan->deskripsi_kegiatan}}</textarea>
                        <span class="bar"></span>
                        <label for="input7">Deskripsi Kegiatan</label>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.kegiatan.index')}}" class="btn btn-danger  m-l-15"><i
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