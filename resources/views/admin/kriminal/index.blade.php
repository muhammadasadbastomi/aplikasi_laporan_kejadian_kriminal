@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data Kriminal</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Data Kriminal</li>
            </ol>
            <a href="{{Route('admin.kriminal.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
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
                                <th>No Kriminal</th>
                                <th>Jenis Kriminal</th>
                                <th>Camat Penanggung Jawab</th>
                                <th>Kasi Penanggung Jawab</th>
                                <th>Petugas Penanggung Jawab</th>
                                <th>Deskripsi Kriminal</th>
                                <th>Tanggal Kriminal</th>
                                <th>Pelaku</th>
                                <th>Korban</th>
                                <th>Saksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->no_kasus}}</td>
                                <td>{{$d->jenis_kriminal}}</td>
                                <td>{{$d->camat->nama}}</td>
                                <td>{{$d->kasi->nama}}</td>
                                <td>{{$d->petugas->nama_petugas}}</td>
                                <td>{{$d->deskripsi_kriminal}}</td>
                                <td>{{carbon\carbon::parse($d->tanggal_kejadian)->translatedFormat('d F Y')}}</td>
                                <td>{{$d->pelaku}}</td>
                                <td>{{$d->korban}}</td>
                                <td>{{$d->saksi}}</td>
                                <td>
                                    <a href="{{Route('admin.kriminal.edit',$d->id)}}" class="btn btn-info m-l-15"><i
                                            class="fa fa-edit"></i>
                                        Edit</a>
                                    <form action="{{Route('admin.kriminal.destroy',$d->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger m-l-15"><i class="fa fa-trash"></i>
                                            Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection