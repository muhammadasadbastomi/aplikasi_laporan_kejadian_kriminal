@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data User</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">Data User</li>
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
            <form class="floating-labels m-t-40" action="{{route('admin.user.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group m-b-40">
                        <input type="text" name="nama" class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Nama Lengkap</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" name="username" class="form-control" id="input3" required>
                        <span class="bar"></span>
                        <label for="input3">Username</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="password" name="password" class="form-control" id="input2" required>
                        <span class="bar"></span>
                        <label for="input2">Password</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="file" name="foto" class="form-control dropify" data-max-file-size="3M" required />
                        <span class="bar"></span>
                        <label for="input5">Foto</label>
                    </div>
                    <div class="form-group m-b-40">
                        <select class="form-control p-0" name="role" id="input6" required>
                            <option>Pilih Role User</option>
                            <option value="0">Petugas</option>
                            <option value="1">Kasi</option>
                        </select><span class="bar"></span>
                        <label for="input6">Role User</label>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.user.index')}}" class="btn btn-danger  m-l-15"><i
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