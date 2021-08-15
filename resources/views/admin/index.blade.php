@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Dashboard Admin</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard Admin</li>
            </ol>
            {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create
                New</button> --}}
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
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row p-t-10 p-b-10">
                    <!-- Column -->
                    <div class="col p-r-0">
                        <h1 class="font-light">{{$kegiatan}}</h1>
                        <h6 class="text-muted">Kegiatan</h6>
                    </div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20"><i
                                class="mdi mdi-account-circle"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row p-t-10 p-b-10">
                    <!-- Column -->
                    <div class="col p-r-0">
                        <h1 class="font-light">{{$konflik}}</h1>
                        <h6 class="text-muted">Konflik</h6>
                    </div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="30%" class="css-bar m-b-0 css-bar-danger css-bar-20"><i
                                class="mdi mdi-briefcase-check"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row p-t-10 p-b-10">
                    <!-- Column -->
                    <div class="col p-r-0">
                        <h1 class="font-light">{{$gangguan}}</h1>
                        <h6 class="text-muted">Gangguan</h6>
                    </div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="40%" class="css-bar m-b-0 css-bar-warning css-bar-40"><i
                                class="mdi mdi-star-circle"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row p-t-10 p-b-10">
                    <!-- Column -->
                    <div class="col p-r-0">
                        <h1 class="font-light">{{$kriminal}}</h1>
                        <h6 class="text-muted">Kriminal</h6>
                    </div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="60%" class="css-bar m-b-0 css-bar-info css-bar-60"><i
                                class="mdi mdi-receipt"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Column -->
</div>
<div class="row">
    <div class="col-md-12 col-lg-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div id="morris-bar-chart"></div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
@endsection
@section('css')
<link href="{{asset('assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">

@endsection
@section('script')
<script src="{{asset('assets/node_modules/raphael/raphael-min.js')}}"></script>
<script src="{{asset('assets/node_modules/morrisjs/morris.js')}}"></script>
<script>
    Morris.Bar({
    element: 'morris-bar-chart',
    data: [{
    y: 'Grafik Kasus Kejadian',
    a: {{$konflik}},
    b: {{$gangguan}},
    c: {{$kriminal}}
    }],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Konflik', 'Gangguan Ketertiban', 'Kriminal'],
    barColors:['#b8edf0', '#b4c1d7', '#fcc9ba'],
    hideHover: true,
    gridLineColor: '#eef0f2',
    resize: true
    });
</script>

@endsection