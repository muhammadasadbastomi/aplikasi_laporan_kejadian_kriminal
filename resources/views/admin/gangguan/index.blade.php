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
                <li class="breadcrumb-item active">Data Gangguan</li>
            </ol>
            <a href="{{Route('admin.gangguan.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
                    class="fa fa-plus-circle"></i> Tambah
                Data</a>
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
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped dataTable no-footer text-center"
                        role="grid" aria-describedby="myTable_info">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>No Gangguan</th>
                                <th>Camat Penanggung Jawab</th>
                                <th>Kasi Penanggung Jawab</th>
                                <th>Petugas Penanggung Jawab</th>
                                <th>Deskripsi Gangguan</th>
                                <th>Tanggal Gangguan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->no_gangguan}}</td>
                                <td>{{$d->camat->nama}}</td>
                                <td>{{$d->kasi->nama}}</td>
                                <td>{{$d->petugas->pegawai->nama}}</td>
                                <td>{{$d->deskripsi_gangguan}}</td>
                                <td>{{carbon\carbon::parse($d->tanggal_gangguan)->translatedFormat('d F Y')}}</td>
                                <td>
                                    <a href="{{Route('admin.gangguan.edit',$d->id)}}"
                                        class="btn btn-sm btn-info m-l-15"><i class="fa fa-edit"></i>
                                        Edit</a>
                                    <a href="{{Route('admin.gangguan.show',$d->id)}}"
                                        class="btn btn-sm btn-primary m-l-15"><i class="fa fa-eye"></i>
                                        Detail</a>
                                    <button type="button" data-route="{{Route('admin.gangguan.destroy',$d->id)}}"
                                        class="btn btn-sm btn-danger m-l-15 delete" data-toggle="modal"
                                        data-target="#exampleModal"><i class="fa fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    @include('layouts.delete')
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection