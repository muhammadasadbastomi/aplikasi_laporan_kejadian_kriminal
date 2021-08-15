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
                <li class="breadcrumb-item ">Data Gangguan</li>
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
            <form class="floating-labels m-t-40" action="{{route('admin.gangguan.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group m-b-40">
                        <input type="text" name="no_gangguan" class="form-control" id="input3" required>
                        <span class="bar"></span>
                        <label for="input3">Nomor Gangguan</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="camat_id" id="input6" required>
                            <option>Pilih Camat Penanggung Jawab</option>
                            @foreach ($camat as $d)
                            <option value="{{$d->id}}">{{$d->nip . ' - ' . $d->nama }}</option>
                            @endforeach
                        </select><span class="bar"></span>
                        <label for="input6">Camat Penanggung Jawab</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="kasi_id" id="input6" required>
                            <option>Pilih Kasi Penanggung Jawab</option>
                            @foreach ($kasi as $d)
                            <option value="{{$d->id}}">{{$d->nip . ' - ' . $d->nama }}</option>
                            @endforeach
                        </select><span class="bar"></span>
                        <label for="input6">Kasi Penanggung Jawab</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="petugas_id" id="input6" required>
                            <option>Pilih Petugas Penanggung Jawab</option>
                            @foreach ($petugas as $d)
                            <option value="{{$d->id}}">{{$d->id_petugas . ' - ' . $d->nama_petugas }}</option>
                            @endforeach
                        </select><span class="bar"></span>
                        <label for="input6">Petugas Penanggung Jawab</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="desa_id" id="input6" required>
                            <option>Pilih Desa Kejadian Gangguan</option>
                            @foreach ($desa as $d)
                            <option value="{{$d->id}}">{{$d->kode_desa . ' - ' . $d->nama_desa }}</option>
                            @endforeach
                        </select><span class="bar"></span>
                        <label for="input6">Desa Kejadian Gangguan</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="date" name="tanggal_gangguan" class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Tanggal Gangguan</label>
                    </div>
                    <div class="form-group m-b-5">
                        <textarea class="form-control" name="deskripsi_gangguan" rows="4" id="input7"
                            required></textarea>
                        <span class="bar"></span>
                        <label for="input7">Deskripsi Gangguan</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" name="penanganan" class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Penanganan</label>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.gangguan.index')}}" class="btn btn-danger  m-l-15"><i
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